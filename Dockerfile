FROM php:8.2-apache

RUN docker-php-ext-install exif
# アップロード上限を5MBに変更
RUN echo "upload_max_filesize = 5M" > /usr/local/etc/php/conf.d/uploads.ini
RUN echo "post_max_size = 5M" >> /usr/local/etc/php/conf.d/uploads.ini

COPY . /var/www/html/

# photosフォルダの権限を設定する
RUN mkdir -p /var/www/html/photos
RUN chmod 777 /var/www/html/photos


EXPOSE 80