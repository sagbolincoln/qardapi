# ✅ Utilise PHP-FPM de base
FROM php:8.2-fpm

# ✅ Installe nginx + supervisord + extensions PHP requises
RUN apt-get update && apt-get install -y nginx supervisor \
    libicu-dev libzip-dev zip unzip git && \
    docker-php-ext-install intl pdo pdo_mysql opcache

# ✅ Copier Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ✅ Définir le répertoire de travail
WORKDIR /var/www

# ✅ Pré-installe les dépendances pour le cache
COPY composer.json composer.lock ./
RUN composer install --no-scripts --no-interaction --optimize-autoloader

# ✅ Copier le reste du code
COPY . .

# ✅ Crée les dossiers et donne les droits
RUN mkdir -p var vendor && chown -R www-data:www-data var vendor

# ✅ Copier la conf nginx et supervisord dans le conteneur
COPY docker/nginx/nginx.conf /etc/nginx/nginx.conf
COPY docker/nginx/supervisord.conf /etc/supervisord.conf

# ✅ Expose le port HTTP pour Render
EXPOSE 80

# ✅ Lance supervisord qui démarre nginx + php-fpm
CMD ["supervisord", "-c", "/etc/supervisord.conf"]
