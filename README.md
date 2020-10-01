# Laravel header accept application/json middleware
The middleware wich set global accept header as application/json for Laravel.

## Install

###### Composer command:
```composer require andreishevchuk/header-accept-json```

###### Add  to config/app.php: 
```'providers' => [..., \Andreishevchuk\HeaderAcceptJson\HeaderAcceptJsonServiceProvider::class, ...```

###### Artisan command:
```php artisan vendor:publish --provider="Andreishevchuk\HeaderAcceptJson\HeaderAcceptJsonServiceProvider" --tag="middleware"```

###### Add to app/Http/Karnel.php:
```protected $middleware = [..., \App\Http\Middleware\HeaderAcceptJson::class, ...```
