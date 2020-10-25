<?php

namespace Andreishevchuk\HeaderAcceptJson;

use Illuminate\Support\ServiceProvider;

class HeaderAcceptJsonServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
	    $this->publishes([
	        __DIR__.'/../../Middleware/HeaderAcceptJson.php' => app_path() . '/Http/Middleware/HeaderAcceptJson.php'
	    ], 'middleware');

	}

	/**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}