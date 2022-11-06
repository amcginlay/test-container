FROM php:8.0.1-apache
COPY index.php /var/www/html/
RUN chmod a+rx index.php
