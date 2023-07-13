<?php
	declare(strict_types=1);
	
	namespace App\Http\Controllers;
	
	use Magnetar\Http\Controller\Controller;
	
	use Magnetar\Helpers\Facades\DB;
	use Magnetar\Helpers\Facades\App;
	use Magnetar\Helpers\Facades\Response;
	
	class HomeController extends Controller {
		public function index() {
			return Response::send('Hello, World!<br><a href="/db/">DB</a> | <a href="/dev/">Dev</a>');
		}
		
		public function db() {
			// in lieu of service workers
			App::bind('database', fn () => new \Magnetar\Database\ConnectionManager(App::getInstance()));
			
			print "DevController::db - ". App::make('config')->get('database.default') ."<br>\n";
			
			$tables = DB::get_rows("
				SHOW TABLES
			");
			
			Response::send('<pre>'. esc_html(print_r($tables, true)) .'</pre>');
		}
		
		public function devpage() {
			Response::send('Dev page');
		}
	}