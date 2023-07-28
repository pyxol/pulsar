<?php
	require_once(__DIR__ ."/../vendor/autoload.php");
	
	use App\Http\Kernel;
	use Magnetar\Http\Request;
	
	$app = require_once(__DIR__ .'/../bootstrap/app.php');
	
	$kernel = $app->make(Kernel::class);
	
	$response = $kernel->process(
		$request = Request::create()
	);
	
	$kernel->terminate($request, $response);