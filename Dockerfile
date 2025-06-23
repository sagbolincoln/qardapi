# ⚙️ Base : PHP + Apache
FROM php:8.2-apache

# ⚙️ Installer les extensions PHP pour Symfony
RUN apt-get update && apt-get install -y \
    libicu-dev libzip-dev zip unzip git \
    && docker-php-ext-install intl pdo pdo_mysql opcache

# ⚙️ Activer mod_rewrite pour Apache
RUN a2enmod rewrite

# ⚙️ Définir le dossier de travail
WORKDIR /var/www/html

# ⚙️ Installer Composer depuis l'image officielle
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ⚙️ Copier d'abord composer.json et composer.lock pour utiliser le cache Docker
COPY composer.json composer.lock ./

# ⚙️ Installer les dépendances PHP sans exécuter les scripts
RUN composer install --no-scripts --no-interaction --optimize-autoloader

# ⚙️ Copier tout le reste du projet
COPY . .

# ✅ CRÉER le dossier `var` s'il n'existe pas (évite l'erreur)
RUN mkdir -p var vendor

# ✅ Donner les droits corrects à Symfony pour écrire dedans
RUN chown -R www-data:www-data var vendor

# ⚙️ Exposer le port HTTP
EXPOSE 80
