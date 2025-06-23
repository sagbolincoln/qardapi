# ⚙️ Base : PHP + Apache
FROM php:8.2-apache

# ⚙️ Installe extensions PHP pour Symfony
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install intl pdo pdo_mysql opcache

# ⚙️ Active mod_rewrite pour Apache
RUN a2enmod rewrite

# ⚙️ Définit le répertoire de travail
WORKDIR /var/www/html

# ⚙️ Copie et installe Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ⚙️ Étape clean : copie uniquement composer.*
COPY composer.json composer.lock ./

# ⚙️ Installe les dépendances PHP SANS scripts pour éviter cache:clear plantage
RUN composer install --no-scripts --no-interaction --optimize-autoloader

# ⚙️ Copie le reste du projet après
COPY . .

# ⚙️ (Facultatif) Droits pour var/ et vendor/
RUN chown -R www-data:www-data var vendor

# ⚙️ Expose le port 80 pour Apache
EXPOSE 80
