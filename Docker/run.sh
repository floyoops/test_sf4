#!/usr/bin/env bash

source "./.env"
source "./base_env.sh"

echo ${DOCKER}
echo ""

${DOCKER} stop
case $1 in
        -f|--f|-force|--force)
            #stop current containers
            ${DOCKER} stop
            #
            ##force recreate to
            ${DOCKER} rm -f
            #
            ##build and run
            ${DOCKER} build
            #
            ${DOCKER} up -d --force-recreate
        ;;
    *)
    ${DOCKER} up -d
esac