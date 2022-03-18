FROM composer

WORKDIR /home/app

RUN apk add apk add zlib-dev icu-dev g++
RUN docker-php-ext-configure intl
RUN docker-php-ext-install mysqli pdo pdo_mysql intl
RUN docker-php-ext-enable intl

ENTRYPOINT tail -f /dev/null
