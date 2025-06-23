# ⚙️ Base : PHP + Apache
FROM php:8.2-apache

# ⚙️ Installer extensions PHP pour Symfony
RUN apt-get update && apt-get install -y \
    libicu-dev libzip-dev zip unzip git \
    && docker-php-ext-install intl pdo pdo_mysql opcache

# ⚙️ Activer mod_rewrite pour Apache
RUN a2enmod rewrite

# ✅ Changer le DocumentRoot d'Apache : /var/www/public
RUN sed -i 's|/var/www/html|/var/www/public|g' /etc/apache2/sites-available/000-default.conf

# ⚙️ Définir le dossier de travail du projet (pas le public, mais le projet complet)
WORKDIR /var/www

# ⚙️ Installer Composer depuis l'image officielle
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ⚙️ Copier composer.json et composer.lock pour profiter du cache Docker
COPY composer.json composer.lock ./

# ⚙️ Installer les dépendances sans scripts
RUN composer install --no-scripts --no-interaction --optimize-autoloader

# ⚙️ Copier tout le reste du projet
COPY . .

# ✅ Créer les dossiers si besoin et donner les bons droits
RUN mkdir -p var vendor && chown -R www-data:www-data var vendor

# ⚙️ Exposer le port HTTP
EXPOSE 80
