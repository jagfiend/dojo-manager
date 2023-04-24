# https://hub.docker.com/_/php
FROM php:8.2-fpm

# Set current dir
WORKDIR /var/www/vhost/

# Install system deps
RUN apt-get clean && apt-get update --fix-missing && apt-get upgrade --yes && apt-get install --yes \
    git \
    libcurl4-openssl-dev \
    libicu-dev \
    libonig-dev \
    libpng-dev \
    libjpeg-dev \
    libssl-dev \
    libxml2-dev \
    libzip-dev \
    supervisor \
    unzip \
    wget \
    zip

# configure and install PHP extensions
RUN docker-php-ext-configure gd --with-jpeg=/usr/include

RUN docker-php-ext-install \
    bcmath \
    exif \
    gd \
    intl \
    opcache \
    pdo_mysql \
    zip

# Composer 2
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
