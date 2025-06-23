# ⚙️ Image de base : PHP avec Apache
FROM php:8.2-apache

# ⚙️ Installe les extensions PHP nécessaires pour Symfony
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install intl pdo pdo_mysql opcache

# ⚙️ Active mod_rewrite pour Apache (Symfony en a besoin)
RUN a2enmod rewrite

# ⚙️ Copie tout ton projet dans le conteneur
COPY . /var/www/html/

# ⚙️ Définit le répertoire de travail
WORKDIR /var/www/html

# ⚙️ Copie et installe Composer depuis l'image officielle
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ⚙️ Installe les dépendances PHP (en prod, on peut ajouter --no-dev)
RUN composer install --no-interaction --optimize-autoloader

# ⚙️ Donne les bons droits à Symfony pour var/ et vendor/ si nécessaire
RUN chown -R www-data:www-data var vendor

# ⚙️ Expose le port 80 pour Apache
EXPOSE 80
