#!/usr/bin/env bash
DOCKER="docker-compose -f ./docker-compose.yml -p ${PROJECT_NAME}"
export PATH_PROJECT=$(pwd)/..
export USER_UID=$(id -u $USERNAME)
export USER_GID=$(id -g)
export REMOTE_HOST=$(docker network inspect bridge -f '{{range .IPAM.Config}}{{.Gateway}}{{end}}')
export XDEBUG_CONFIG="remote_host=${REMOTE_HOST} remote_port=90${ID_NETWORK}"
export PHP_IDE_CONFIG=serverName=PROJECT_HOST

PHP72_HOST="${PROJECT_NAME}-php72"

# VHOST
# param 1 - http_host
# param 2 - http_path
# param 3 - php_host
function newVHost {
    cp ./nginx/1.11/symfony.vhost.tpl.conf ./nginx/1.11/conf.d/${1}.conf
    sed -i "s/{{HTTP_HOST}}/${1}/g" ./nginx/1.11/conf.d/${1}.conf
    sed -i "s/{{HTTP_PATH}}/${2}/g" ./nginx/1.11/conf.d/${1}.conf
    sed -i "s/{{PHP_HOST}}/${3}/g" ./nginx/1.11/conf.d/${1}.conf
}

newVHost "test.local" "\/var\/www\/public" $PHP72_HOST
