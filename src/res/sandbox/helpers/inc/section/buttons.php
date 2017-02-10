<section>
	<h2>Buttons</h2>
	<div>
	<?php	$buttons = array(
		'btn btn-default',
		'btn btn-primary',
		'btn btn-info'
	); ?>
	<?php foreach ($buttons as &$value) {
		button_demo_html($value);
	}; ?>
	</div>
</section>
