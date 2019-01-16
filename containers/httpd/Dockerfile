FROM httpd:alpine

ARG PHP_UPSTREAM_PORT

# RUN apk update && apk upgrade

RUN sed -i '/LoadModule proxy_module/s/^#//g' /usr/local/apache2/conf/httpd.conf
RUN sed -i '/LoadModule proxy_fcgi_module/s/^#//g' /usr/local/apache2/conf/httpd.conf
RUN sed -i '/LoadModule rewrite_module/s/^#//g' /usr/local/apache2/conf/httpd.conf

RUN { \
  echo '<FilesMatch \.php$>'; \
  echo 'SetHandler "proxy:fcgi://php-fpm:9000"'; \
  echo '</FilesMatch>'; \
  echo '<Directory "/usr/local/apache2/htdocs">'; \
  echo 'AllowOverride All'; \
  echo '</Directory>'; \
} >> /usr/local/apache2/conf/httpd.conf
