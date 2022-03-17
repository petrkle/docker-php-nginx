FROM php:8.1-fpm

RUN apt-get update && apt-get install -y locales locales-all libicu-dev \
    && docker-php-ext-install intl \
    && docker-php-ext-enable intl

ENV LANG cs_CZ.UTF-8  
ENV LANGUAGE cs_CZ.UTF-8
ENV LC_ALL cs_CZ.UTF-8 
