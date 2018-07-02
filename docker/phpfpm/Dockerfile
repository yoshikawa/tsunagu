FROM php:7-fpm
RUN apt-get update \
 && apt-get install -y \
        sudo \
        curl \
        git \
        unzip \
        libz-dev \
        aptitude \
        libpng-dev \
        mysql-client \
        libmemcached-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        gnupg \
        build-essential \
 && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
 && docker-php-ext-install -j$(nproc) gd iconv pdo_mysql

# install npm
RUN curl -sL https://deb.nodesource.com/setup_10.x | sudo -E bash -\ 
 && apt-get install -y nodejs
# install composer
RUN cd '/' \
 && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
 && php composer-setup.php \
 && php -r "unlink('composer-setup.php');" \
 && mv composer.phar /usr/local/bin/composer

WORKDIR /src