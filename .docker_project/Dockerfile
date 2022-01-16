FROM composer

WORKDIR /home/project

RUN docker-php-ext-install pdo
RUN apk update && apk add php8-pdo_pgsql

ENTRYPOINT tail -f /dev/null
