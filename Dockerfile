FROM php:8.1-fpm

RUN apt-get clean
RUN apt-get update && apt-get install -y \
        zlib1g-dev libicu-dev g++ \
        libjpeg62-turbo-dev \
        libzip-dev \
        libpng-dev \
        libwebp-dev \
        libfreetype6-dev \
    	libxml2-dev \
    	git \
    	zip \
    	unzip \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-enable pdo_mysql \
    && docker-php-ext-configure gd --with-webp=/usr/include/webp --with-jpeg=/usr/include --with-freetype=/usr/include/freetype2/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) zip \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

# PHP.ini
COPY ./docker_files/php-fpm/php.ini /usr/local/etc/php/conf.d/

# # Install Redis
# RUN pecl install redis
# Install NodeJs
RUN curl -sL https://deb.nodesource.com/setup_20.x | bash -
RUN apt-get install -y nodejs
# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# # Copy source to path
# COPY . /var/www/html/
# COPY --chown=root:root . /var/www/html/
# Set working directory
WORKDIR /var/www/html
# Expose port
EXPOSE 9000
USER www-data