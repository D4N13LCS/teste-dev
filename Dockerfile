FROM php:8.2.27-cli-alpine3.20

RUN apk update && apk add --no-cache \
    bash \
    zip \
    unzip \
    git \
    curl \
    libpq \
    libpng-dev \
    oniguruma-dev \
    icu-dev \
    postgresql-dev \
    libxml2-dev \
    nodejs \
    npm && \
    docker-php-ext-configure intl && \
    docker-php-ext-install \
    pdo_pgsql \
    bcmath \
    intl \
    gd \
    soap


COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install && \
    npm install && \
    npm run build

RUN chown -R www-data:www-data /var/www

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]