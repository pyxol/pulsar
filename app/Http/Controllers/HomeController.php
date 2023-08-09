<?php
	declare(strict_types=1);
	
	namespace App\Http\Controllers;
	
	use App\Http\Controllers\Controller;
	use Magnetar\Http\Response;
	use Magnetar\Http\JsonResponse;
	
	use Magnetar\Helpers\Facades\Theme;
	use Magnetar\Helpers\Facades\Cache;
	use Magnetar\Helpers\Facades\Log;
	
	class HomeController extends Controller {
		public function index(): Response {
			return Theme::renderResponse('frontpage');
		}
		
		public function set_cache(): Response {
			$cached_val = date('r');
			$cache_set = Cache::set('cached_val', $cached_val, 15);
			
			return Theme::renderResponse('cache/set', [
				'cached_val' => $cached_val,
				'cache_set' => $cache_set,
				'log' => Log::dump(0, true),
			]);
		}
		
		//public function get_cache(): Response {
		//	return Theme::renderResponse('cache/get', [
		//		'cached_val' => Cache::get('cached_val') ?? 'NOT SET',
		//		'log' => Log::dump(0, true),
		//	]);
		//}
		
		public function get_cache(): JsonResponse {
			return (new JsonResponse())->setData([
				'cached_val' => Cache::get('cached_val') ?? 'NOT SET',
				'log' => Log::dump(0, true),
			]);
		}
	}