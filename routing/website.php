<?php
	declare(strict_types=1);
	
	use Magnetar\Helpers\Facades\Router;
	
	use App\Http\Controllers\HomeController;
	
	Router::get(
		'/^cache\/set\/?$/i',
		[HomeController::class, 'set_cache']
	);
	
	Router::get(
		'/^cache\/get\/?$/i',
		[HomeController::class, 'get_cache']
	);
	
	Router::get(
		'/^\/?$/i',
		[HomeController::class, 'index']
	);