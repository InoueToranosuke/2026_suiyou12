FROM php:8.4-fpm-alpine AS php

RUN apk add -U --no-cache \
    curl-dev \
    libpng-dev \
    freetype-dev 

RUN docker-php-ext-configure gd --with-freetype

RUN docker-php-ext-install curl exif gd

RUN apk add --no-cache $PHPIZE_DEPS
RUN pecl install apcu
RUN docker-php-ext-enable apcu

RUN docker-php-ext-install pdo_mysql
