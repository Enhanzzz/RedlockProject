FROM php:8.1.18-apache 
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

EXPOSE 7077
EXPOSE 80

WORKDIR /var/www/html 
COPY index.php index.php
RUN chown -R www-data:www-data /var/www/html/ && chmod -R o-wx /var/www

