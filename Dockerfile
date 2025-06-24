# Utilise PHP-FPM sans Apache
FROM php:8.2-fpm

# Installe les extensions PHP pour Symfony
RUN apt-get update && apt-get install -y supervisor

RUN apt-get update && apt-get install -y \
    libicu-dev libzip-dev zip unzip git \
    && docker-php-ext-install intl pdo pdo_mysql opcache

# Copie Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www

# Pré-installe les dépendances pour profiter du cache
COPY composer.json composer.lock ./
RUN composer install --no-scripts --no-interaction --optimize-autoloader

# Copie le reste
COPY . .

# Droits pour Symfony
RUN mkdir -p var vendor && chown -R www-data:www-data var vendor

# Commande unique pour Railway
# Copie ton supervisord.conf dans le conteneur, à l’endroit standard
COPY docker/nginx/supervisord.conf /etc/supervisord.conf

# Et à la fin de ton Dockerfile, dis à Docker de lancer supervisord :
CMD ["supervisord", "-c", "/etc/supervisord.conf"]
