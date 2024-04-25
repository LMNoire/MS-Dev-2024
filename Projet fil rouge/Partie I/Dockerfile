FROM php:8.2-apache

# Mettre à jour les paquets et installer les utilitaires requis
RUN apt-get update && apt-get install -y \
        libpq-dev \
        libpng-dev \
        git \
        unzip \
        zip \
        libzip-dev \
    && docker-php-ext-install pdo pdo_mysql gd zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*


# Installer Composer en évitant l'exécution en tant que superutilisateur
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier les fichiers de l'application
COPY . .

# Installer les dépendances via Composer sans interagir
RUN composer install

# Configurer Apache
COPY .docker/apache.conf /etc/apache2/sites-available/000-default.conf

# Exposer le port 80
EXPOSE 80

# Donner les droits appropriés
RUN chown -R www-data:www-data /var/www/html

# Copy the .env file specifically
COPY .env /var/www/html/.env

# Commande par défaut pour démarrer Apache
CMD ["apache2-foreground"]