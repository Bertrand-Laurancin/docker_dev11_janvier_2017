FROM php:7.1.0-apache

ENV TERM=xterm

# Installation des dépendances pour composer
RUN apt-get update
RUN apt-get install unzip -y
# Installation de composer (gestionnaire de package pour php)
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.phpd
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/bin/composer

# Installation des packets pour le développement
RUN apt-get update
RUN apt-get install nano -y
