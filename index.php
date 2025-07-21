<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mini</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  
  <div class="mini">
  <h1>MINI INSTA</h1>
  <p>Ajoutez une PHOTO!!</p>
  
  <form action="/upload.php" method="post" enctype="multipart/form-data">
    <label for="title">Title</label>
    <input type="text" id="title" name="title" required><br><br>
    
    <label for="photo">Choisissez une photo!</label>
    <input type="file" id="photo" name="photo" accept="image/*" required><br><br>
    
    <button type="submit">Envoyer</button>
  </form>




</header>
</div>

<?php
$photoDir = "photos/";
$handle = opendir($photoDir); // フォルダを開く
$images = [];

if ($handle) {
    while (($file = readdir($handle)) !== false) {
        $filePath = $photoDir . $file;

        // ファイルかつ画像のみ取得
        if (is_file($filePath) && exif_imagetype($filePath)) {
            $images[] = $file;
        }
    }
    closedir($handle); // フォルダを閉じる
}
?>

<!-- 表示部分 -->
 
<div class="photo">
  <?php foreach ($images as $image): ?>
    <div style="text-align: center;">
      <img src="<?= $photoDir . htmlspecialchars($image) ?>" alt="photo" style="width: 200px;">
      <p><?= htmlspecialchars(pathinfo($image, PATHINFO_FILENAME)) ?></p>
    </div>
  <?php endforeach; ?>
</div>




</body>

</html>