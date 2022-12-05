#FROM composer/composer:latest as build

FROM php:7.2-apache
COPY --from=composer/composer:latest-bin /composer /usr/bin/composer
#RUN mkdir -p /var/www/apache-server/html
RUN apt-get update -y && apt-get install -y apache2-utils libaprutil1-dbd-mysql libpng-dev libgmp-dev
RUN a2enmod authn_dbd
RUN docker-php-ext-install mysqli gd
RUN pecl install redis && docker-php-ext-enable redis

RUN curl -O https://phar.phpunit.de/phpunit-6.5.0.phar
RUN chmod +x phpunit-6.5.0.phar && mv phpunit-6.5.0.phar /usr/local/bin/phpunit
RUN phpunit --version
