# ⚙️ Base : PHP + Apache
FROM php:8.2-apache

# ⚙️ Install extensions PHP pour Symfony
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install intl pdo pdo_mysql opcache

# ⚙️ Active mod_rewrite
RUN a2enmod rewrite

# ⚙️ Définit le répertoire de travail
WORKDIR /var/www/html

# ⚙️ Copie et installe Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ⚙️ Copie uniquement composer.json et composer.lock d'abord
COPY composer.json composer.lock ./

# ⚙️ Installe les dépendances SANS scripts
RUN composer install --no-scripts --no-interaction --optimize-autoloader

# ⚙️ Copie le reste
COPY . .

# ✅ Crée le dossier var/ manquant pour éviter l'erreur
RUN mkdir -p var

# ⚙️ Droits si vraiment nécessaire
RUN chown -R www-data:www-data var vendor

# ⚙️ Expose le port 80
EXPOSE 80
