# Symfony Docker Build

Within this repo is a docker stack that is perfect for use when developing a symfony application.

## Tech Stack
- Symfony Framework 5.6.3
- MySQL 5.7


## Building the Containers

```
docker-compose up -d --build
```

## Interacting with the Containers

```
docker-compose up -d
docker-compose down
docker-compose restart
```

## Connecting to Containers
```
docker-compose exec php /bin/bash
docker-compose exec mysql /bin/bash
docker-compose exec nginx /bin/bash
```

