# Use a imagem base PHP-FPM
FROM php:8.2-fpm

# Instale as dependências necessárias
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    curl \
    && docker-php-ext-install pdo_pgsql

# Instale o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Verifique a versão do Composer (opcional, para garantir a instalação)
RUN composer --version

# Adiciona o script ao contêiner
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Usa o script como entrypoint
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]