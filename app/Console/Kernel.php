<?php
	declare(strict_types=1);
	
	namespace Pulsar\Console;
	
	use Magnetar\Console\Kernel as ConsoleKernel;
	
	class Kernel extends ConsoleKernel {
		protected array $middleware = [
			// ...
		];
	}