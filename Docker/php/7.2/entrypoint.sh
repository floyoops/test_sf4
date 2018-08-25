#!/bin/bash

# Add local user
echo "User local user with UID: $USER_UID  GID: $USER_GID"

#assign host user id to local user
usermod -u $USER_UID -d  /home/www-data www-data 2> /proc/self/fd/2 && {
  groupmod -g $USER_GID www-data 2> /proc/self/fd/2 || usermod -a -G $USER_GID www-data
}

#create log file
touch /usr/local/var/log/docker-php.log && chown www-data:www-data /usr/local/var/log/docker-php.log
touch /usr/local/var/log/php-fpm.log && chown www-data:www-data /usr/local/var/log/php-fpm.log

#composer permissions (cache)
chown www-data:www-data -R /usr/local/bin/composer
chown www-data:www-data -R /home/www-data/.composer

#add private ssh
eval $(ssh-agent -s)
ssh-add $SSH_PRIVATE_KEY

exec "$@"