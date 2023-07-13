<?php
	// rudimentary script to test the framework
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	define('MAGNETAR_START', microtime(true));
	
	require_once(__DIR__ ."/../vendor/autoload.php");
	
	use App\Http\Kernel;
	use App\Http\Controllers\HomeController;
	
	// test-specific stuff
	try {
		// initialize whoops
		$whoops = new Whoops\Run;
		$whoops->pushHandler(new Whoops\Handler\PrettyPageHandler);
		$whoops->register();
	} catch(Exception $e) {
		die("Error initializing Whoops: ". $e->getMessage());
	}
	// end of test-specific stuff
	
	$app = require_once(__DIR__ .'/../bootstrap/app.php');
	
	$kernel = $app->make(Kernel::class);
	
	// routes
	$kernel->get(
		'/^dev\/?/i',
		[HomeController::class, 'devpage']
	);
	
	$kernel->get(
		'/^db\/?/i',
		[HomeController::class, 'db']
	);
	
	$kernel->get(
		'/^\/?/i',
		[HomeController::class, 'index']
	);
	
	$kernel->serve();