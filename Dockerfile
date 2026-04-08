FROM php:8.2-apache

RUN apt-get update && apt-get install -y libexif-dev \
    && docker-php-ext-install exif

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

COPY . /var/www/html/

RUN mkdir -p /var/www/html/photos \
    && chown -R www-data:www-data /var/www/html/photos \
    && chmod 775 /var/www/html/photos

EXPOSE 80