#!/usr/bin/env bash
DOCKER="docker-compose -f ./docker-compose.yml -p ${PROJECT_NAME}"
export PATH_PROJECT=$(pwd)/..
export USER_UID=$(id -u $USERNAME)
export USER_GID=$(id -g)
export REMOTE_HOST=$(docker network inspect bridge -f '{{range .IPAM.Config}}{{.Gateway}}{{end}}')
export XDEBUG_CONFIG="remote_host=${REMOTE_HOST} remote_port=90${ID_NETWORK}"
export PHP_IDE_CONFIG=serverName=PROJECT_HOST