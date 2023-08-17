<?php
	display_tpl('header', [
		'title' => $this->title ?? 'Frontpage',
	]);
?>
	
	<div class='h1'>503 Server Error</div>
	
	<p>We experienced a server error with your request.</p>
	
	<?php if($this->message): ?>
		<p class="text-muted"><?=esc_html($this->message);?></p>
		<p class="text-muted">in file: <?=esc_html($this->file ?? "Unknown");?></p>
		<p class="text-muted">on line: <?=esc_html($this->line ?? "Unknown");?></p>
		<p class="text-muted">Trace: <?=nl2br($this->trace ?? "");?></p>
		<p class="text-muted">Please try again later.</p>
	<?php endif; ?>
	
<?php
	display_tpl('footer');