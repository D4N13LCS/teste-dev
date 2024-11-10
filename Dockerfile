# Use uma imagem PHP com Laravel
FROM php:8.1-fpm

# Instale extensões necessárias
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    zip \
    unzip

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl gd

# Instale o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Defina o diretório de trabalho
WORKDIR /var/www

# Copie os arquivos para o container
COPY . .

# Instale as dependências do Laravel
RUN composer install

# Defina as permissões corretas
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Defina o usuário do container
USER www-data
