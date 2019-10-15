FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
    htop \
    git \
    wget \
    zip \
    unzip \
    curl \
    cmake \
    make \
    mc \
    curl \
    libz-dev \
    libmemcached-dev \
    libssl-dev \
    libc-client2007e-dev \
    libkrb5-dev \
    libmcrypt-dev \
    libcurl4-gnutls-dev \
    libxml2-dev \
    libpcre3 \
    libpcre3-dev \
    && docker-php-ext-install bcmath && docker-php-ext-enable bcmath

RUN pecl install xdebug-2.6.1 && docker-php-ext-enable xdebug

COPY ./docker/php/php.ini /usr/local/etc/php/
COPY ./docker/php/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV COMPOSER_ALLOW_SUPERUSER=1

WORKDIR /var/www/myblog