FROM php:8.0.0RC3-fpm-alpine

RUN apk --update --no-cache add git bash
RUN docker-php-ext-install pdo_mysql

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN wget https://get.symfony.com/cli/installer -O - | bash
RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony
RUN git config --global user.email "you@example.com"
RUN git config --global user.name "Your Name"

CMD composer install ;  php-fpm

WORKDIR /var/www

EXPOSE 9000