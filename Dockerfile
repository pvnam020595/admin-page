FROM php:8.1-apache

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

# Prepare fake SSL certificate
RUN apt-get install -y ssl-cert
# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# autorise .htaccess files
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
RUN a2enmod rewrite

# Install Redis

RUN pecl install redis

# Setup Apache2 mod_ssl
RUN a2enmod ssl
# Install NodeJs
RUN curl -sL https://deb.nodesource.com/setup_20.x | bash -
RUN apt-get install -y nodejs
# Setup Apache2 HTTPS env
RUN a2ensite default-ssl.conf
# Add new user
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www
# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# PHP.ini
COPY ./php.ini /usr/local/etc/php/conf.d/
#Apache defualt conf
COPY ./apache-default.conf /etc/apache2/site-available/000-defualt.conf
# Copy source to path
COPY . /var/www/html/
COPY --chown=root:root . /var/www/html/
# assign user 100 ownership folder
# RUN chown -R 1000 /var/www/html/
RUN chmod a+rw /var/www/html/
# Set working directory
WORKDIR /var/www/html
# Install nodejs
# RUN curl -fsSL https://deb.nodesource.com/setup_20.x  | bash -

# RUN apt-get install -y nodejs
# Change current user to www
# USER www
EXPOSE 80 443