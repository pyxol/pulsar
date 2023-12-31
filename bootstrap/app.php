<?php
	declare(strict_types=1);
	
	// determine when the application started
	define('MAGNETAR_START', microtime(true));
	
	// start the application
	$app = new Magnetar\Application(
		dirname(__DIR__)
	);
	
	// register our app's kernel
	$app->singleton(
		Magnetar\Http\Kernel::class,
		App\Http\Kernel::class
	);
	
	// register our app's console kernel
	$app->singleton(
		Magnetar\Console\Kernel::class,
		App\Console\Kernel::class
	);
	
	return $app;