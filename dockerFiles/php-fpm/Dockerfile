FROM php:8.1.1-fpm

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && install-php-extensions pdo_pgsql
WORKDIR /var/www/hello.dev/

CMD ["php-fpm"]