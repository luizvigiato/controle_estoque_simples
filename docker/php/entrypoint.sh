#!/bin/sh

# Executa as migrações
php artisan migrate

# Inicia o PHP-FPM
php-fpm
