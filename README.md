# Test sf4

## Quick start
Add test.local in your /etc/hosts
```shell
cp Docker/.env.dist Docker/.env
```

### Run docker
```shell
cd Docker && ./run.sh -f
```

### go bash php
```shell
cd Docker && ./php72.sh
cp .env.dist .env
composer install
```

### test url
go to http://test.local
