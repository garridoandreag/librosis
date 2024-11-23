FROM php:8.2-fpm

# Instalar dependencias necesarias para intl
RUN apt-get update && apt-get install -y \
    libicu-dev \
    && docker-php-ext-install intl zip

RUN apt-get update && apt-get install -y \
    curl \
    && curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm@latest

# Instalar herramientas esenciales y Git
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    unzip \
    zip \
    git \
    mariadb-client \
    && docker-php-ext-install pdo pdo_mysql

# Instalar Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    php -r "unlink('composer-setup.php');"

# Verificar las versiones instaladas
RUN git --version && composer --version

WORKDIR /var/www/html
