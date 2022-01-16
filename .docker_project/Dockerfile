FROM composer

WORKDIR /home/project

RUN docker-php-ext-install mysqli pdo pdo_mysql

ENTRYPOINT tail -f /dev/null
