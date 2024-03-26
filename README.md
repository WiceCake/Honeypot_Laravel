# Deployment

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```

## Setting up webapp
- Copy .env file
```
cp .env.example .env
```
- Entering webapp container
```
docker compose exec webapp sh
```

- Run ``php artisan key:generate``
- Run ``php artisan migrate --seed``


