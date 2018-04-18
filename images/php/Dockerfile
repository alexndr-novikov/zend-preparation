FROM php:7.1.15-fpm-jessie

RUN  apt-get update && apt-get install -y \
        curl \
        wget \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
        libfann-dev \
        zlib1g-dev \
        libicu-dev \
        g++ \
        locales \
        locales-all \
    && docker-php-ext-install -j$(nproc) iconv mcrypt mbstring mysqli pdo_mysql zip intl \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && pecl install fann
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini
WORKDIR /var/www
ENV LC_ALL en_US.UTF-8
ENV LANG en_US.UTF-8
ENV LANGUAGE en_US.UTF-8
CMD ["php-fpm"]