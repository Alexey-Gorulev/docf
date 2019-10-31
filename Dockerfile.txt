FROM php:7.2-apache

COPY ./index.php /var/www/html
COPY ./nginx /etc/nginx/sites-available
RUN apt-get update && apt-get install nginx && service reload apache && service reload nginx

EXPOSE 88