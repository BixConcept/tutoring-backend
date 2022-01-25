FROM php:fpm

# enable mysqli
RUN docker-php-ext-install pdo && docker-php-ext-enable pdo
RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli 

WORKDIR /app