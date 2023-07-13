<?php
	declare(strict_types=1);
	
	use App\Application;
	use App\Kernel;
	
	$app = new Magnetar\Application(
		dirname(__DIR__)
	);
	
	// $app->singleton(Kernel::class, function($app) {
	// 	return new Kernel($app);
	// });
	
	$app->singleton(
		Magnetar\Kernel\Http\Kernel::class,
		App\Http\Kernel::class
	);
	
	return $app;