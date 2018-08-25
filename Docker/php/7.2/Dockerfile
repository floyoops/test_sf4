FROM leadersleague/docker_php_ci:release-v7.2

ENV SSH_AUTH_SOCK /ssh-agent
ENV SSH_PRIVATE_KEY /home/www-data/private_key

RUN mkdir -p /home/www-data

###xdebug
ENV XDEBUG_VERSION 2.6.1
RUN pecl install channel://pecl.php.net/xdebug-${XDEBUG_VERSION}

# Conf php
COPY php.ini $PHP_INI_DIR/conf.d/php.ini
COPY xdebug.ini $PHP_INI_DIR/conf.d/xdebug.ini
COPY php-fpm.d/www.conf $PHP_INI_DIR/../php-fpm.d/www.conf

#entry point
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Set up the command arguments.
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

CMD ["php-fpm"]
