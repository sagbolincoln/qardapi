# ✅ Étapes clefs résumées
FROM php:8.2-apache

# Install PHP extensions
RUN apt-get update && apt-get install -y \
    libicu-dev libzip-dev zip unzip git \
    && docker-php-ext-install intl pdo pdo_mysql opcache

RUN a2enmod rewrite

WORKDIR /var/www/html

# Install Composer depuis image officielle
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# D'abord copier composer.json + composer.lock pour cache Docker efficace
COPY composer.json composer.lock ./

RUN composer install --no-scripts --no-interaction --optimize-autoloader

# Puis copier tout le projet
COPY . .

# ✅ Crée le dossier var/ s'il n'existe pas
RUN mkdir -p var

# ✅ Donne les droits pour Symfony
RUN chown -R www-data:www-data var vendor

EXPOSE 80
