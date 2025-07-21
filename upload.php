<?php

$isSuccessful = false;
$title = "";
$datetime = "";
$fullTitle = "";
$filename = ""; // 後で表示に使うため初期化

if (isset($_FILES["photo"]) && isset($_POST["title"])) {
    // 入力されたタイトルをエスケープ（HTML安全対策）
    $title = htmlspecialchars($_POST["title"]);

    // 一時ファイルの場所
    $chemin_tmp = $_FILES["photo"]["tmp_name"];

    // 日付・時刻を取得（Paris時間）
    date_default_timezone_set('Europe/Paris');
    $datetime = date("Y-m-d_H-i-s"); // ファイル名に使用。":" は使えないので "_"

    // 拡張子を取得
    $originalName = basename($_FILES["photo"]["name"]);
    $extension = pathinfo($originalName, PATHINFO_EXTENSION);

    // タイトルをファイル名に使える形式に変換（記号などを置き換える）
    $safeTitle = preg_replace('/[^\w\-]/u', '_', $title);

    // 保存ファイル名を作成
    $filename = $safeTitle . "_" . $datetime . "." . $extension;
    $destination = "photos/" . $filename;

    // ファイルが画像であるか確認
    if (getimagesize($chemin_tmp) !== false) {
        // ファイルを保存
        $isSuccessful = move_uploaded_file($chemin_tmp, $destination);

        // 表示用タイトル
        $fullTitle = $title . " (" . $extension . ")";
    }
}
?>


<?php if($isSuccessful == true) : ?>
    <h1>Upload Success ! </h1>
<?php else :?>
    
    <h1>Upload Failed ! </h1>
<?php endif; ?>


<a href="/">Retour à la page d'accueil</a>








?>