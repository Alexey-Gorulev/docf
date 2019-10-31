FROM php:7.2-apache

COPY ./index.php /var/www/html
RUN apt-get update -y && apt-get install nginx -y
COPY ./nginx /etc/nginx/sites-available

EXPOSE 88