#!/usr/bin/env bash

source "./.env"
source "./base_env.sh"

#docker
${DOCKER} exec --user www-data php72 bash
