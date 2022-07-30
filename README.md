# Laravel header accept application/json middleware
The middleware which set global accept header as application/json for Laravel.

## Install

###### Composer command:
```php
composer require andreishevchuk/header-accept-json
```

###### Add  to config/app.php: 
```php
'providers' => [
  ..., 
  \Andreishevchuk\HeaderAcceptJson\HeaderAcceptJsonServiceProvider::class, 
  ...
 ];
```

###### Artisan command:
```php
php artisan vendor:publish --provider="Andreishevchuk\HeaderAcceptJson\HeaderAcceptJsonServiceProvider" --tag="middleware"
```

###### Add to app/Http/Karnel.php:
```php
protected $middleware = [
  ..., 
  \App\Http\Middleware\HeaderAcceptJson::class,
  ...
];
```
