<?php
	return [
		// the key from the 'connections' array below used for
		// the default cache connection
		'default' => env('CACHE_TYPE', 'inmemory'),
		
		// cache connection settings
		'connections' => [
			'memcached' => [
				'host' => env('CACHE_HOST', 'localhost'),
				'port' => env('CACHE_PORT', '11211'),
			],
		],
	];