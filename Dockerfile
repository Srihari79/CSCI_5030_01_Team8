FROM php:7.4-apache
FROM php:5.6-apache
COPY php.in /usr/local/etc/php/
RUN apt-get update && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libmpng12-dev libmcrypt-dev mysal-client \
&& docker-php-ext-install pdo mysql mysqli gd iconv \
&& docker-php-ext-install mbstring \
&& docker-php-ext-install mcrypt
