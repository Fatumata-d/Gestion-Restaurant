# Utilisez une image PHP avec Composer et les extensions nécessaires
FROM php:8.1-fpm

# Installez les dépendances
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Installez Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiez les fichiers de l'application dans le conteneur
COPY . /var/www

# Définissez le répertoire de travail
WORKDIR /var/www

# Installez les dépendances de Laravel
RUN composer install --no-dev --optimize-autoloader

# Donnez les bonnes permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Expose le port 80
EXPOSE 80

# Démarrez l'application
CMD php artisan serve --host=0.0.0.0 --port=80
