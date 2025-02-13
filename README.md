# Product Catalog API

## Installation
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

## API Endpoints
- `GET /api/v1/products`
- `GET /api/v1/products/{id}`
- `POST /api/v1/products`
- `PUT /api/v1/products/{id}`
- `DELETE /api/v1/products/{id}`
- `GET /api/v1/categories`

## Error Handling
- Returns JSON error responses with appropriate status codes.

## Testing
- Unit tests for repositories

## Documentation
https://documenter.getpostman.com/view/25501561/2sAYXCjyEY