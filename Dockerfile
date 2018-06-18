
FROM php:7.1.8-apache

MAINTAINER Nurzhamal Shadmanova

COPY . /srv/app
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /srv/app \
    && a2enmod rewrite
RUN apt-get update && apt-get install -y python  \
	&& curl https://bootstrap.pypa.io/get-pip.py -o get-pip.py \
	&& python get-pip.py \
	&& pip install --upgrade youtube_dl
