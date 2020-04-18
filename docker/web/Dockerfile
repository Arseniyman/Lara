FROM nginx

COPY nginxserv.conf /etc/nginx/conf.d/default.conf

# FROM php:7.3-apache

# RUN apt-get update && apt-get upgrade -y

# RUN docker-php-ext-install mysqli
# RUN docker-php-ext-install pdo
# RUN docker-php-ext-install pdo_mysql

# Composer download and install
# RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
# RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
# RUN php -r "unlink('composer-setup.php');"

# COPY default.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html