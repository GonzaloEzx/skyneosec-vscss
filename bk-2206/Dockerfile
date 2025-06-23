FROM php:8.2-cli
COPY . /var/www/html
WORKDIR /var/www/html
EXPOSE 8000
CMD ["php", "-S", "0.0.0.0:8000"]

# Dockerfile
FROM php:8.2-apache

# Activamos mod_rewrite (útil para .htaccess y URLs amigables)
RUN a2enmod rewrite

# Copiamos los archivos al contenedor
COPY . /var/www/html/

# Establecemos el directorio de trabajo
WORKDIR /var/www/html/

# Permisos (opcional para evitar errores de escritura)
RUN chown -R www-data:www-data /var/www/html
