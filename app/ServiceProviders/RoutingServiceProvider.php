<?php
	declare(strict_types=1);
	
	namespace App\ServiceProviders;
	
	use Magnetar\Helpers\ServiceProvider;
	use Magnetar\Router\RouterFileLoader;
	
	class RoutingServiceProvider extends ServiceProvider {
		/**
		 * Register application-specific services
		 * @return void
		 */
		public function register(): void {
			//
		}
		
		/**
		 * Boot logic for service provider
		 * @return void
		 */
		public function boot(): void {
			// register routes
			(new RouterFileLoader($this->app['router']))->loadFrom(
				$this->app->pathRouting('website.php')
			);
		}
	}