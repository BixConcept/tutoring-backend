FROM php:fpm

# install composer
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

# enable mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli 

WORKDIR /app