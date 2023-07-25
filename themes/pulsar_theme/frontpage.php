<?php
	display_tpl('header', [
		'title' => $this->title ?? 'Frontpage',
	]);
?>
	
	<h1>Pulsar Web App</h1>
	
	<p>Welcome to a fully featured Web Application framework powered by <a href="https://www.github.com/pyxol/magnetar/" target="_blank">Magnetar</a>.</p>
	
	<p><a href="https://github.com/pyxol/pulsar" target="_blank" title="PHP Web Application Framework" class="btn btn-primary"><strong>Try Pulsar</strong></a></p>
	
<?php
	display_tpl('footer');