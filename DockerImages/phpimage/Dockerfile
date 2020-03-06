FROM php:7.4-fpm


RUN apt-get update && apt-get install -y --no-install-recommends apt-utils \
        curl \
        wget \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        libonig-dev \
	libmemcached-dev \
	libzip-dev \
    && docker-php-ext-install -j$(nproc) mbstring mysqli pdo_mysql zip opcache \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

WORKDIR /app




RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini
ADD php-fpm.d/www.conf /usr/local/etc/php-fpm.d/www.conf
