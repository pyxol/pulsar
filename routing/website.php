<?php
	declare(strict_types=1);
	
	use Magnetar\Helpers\Facades\Router;
	
	use App\Http\Controllers\HomeController;
	
	Router::get(
		'/^\/?$/i',
		[HomeController::class, 'index']
	);