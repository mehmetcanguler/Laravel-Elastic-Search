FROM php:8.4-fpm

# Sistem bağımlılıkları
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libpq-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Uygulama dosyaları
WORKDIR /var/www/html
COPY . .

RUN composer install
