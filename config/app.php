<?php
	use Magnetar\Helpers\Facades\Facade;
	use Magnetar\Helpers\ServiceProvider;
	
	return [
		// application name
		'name' => env('APP_NAME', 'Pulsar App'),
		
		// environment ("dev" or "production")
		'env' => env('APP_ENV', 'production'),
		
		// timezone
		'timezone' => env('APP_TIMEZONE', 'UTC'),
		
		// debug
		'debug' => env('APP_DEBUG', false),
		
		// internal encoding charset (mb_internal_encoding)
		'internal_encoding' => 'UTF-8',
		
		// aliases to load
		'aliases' => Facade::defaultAliases()->merge([
			// additional Facade aliases
			// ...
		])->toArray(),
		
		// service providers
		'providers' => ServiceProvider::defaultProviders()->merge([
			// additional default Service Providers
			App\ServiceProviders\AppServiceProvider::class,
			App\ServiceProviders\RoutingServiceProvider::class,
		])->toArray(),
	];