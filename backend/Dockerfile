FROM php:8.3.18RC1-fpm-alpine3.21

RUN apk add --no-cache bash curl git unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer --version