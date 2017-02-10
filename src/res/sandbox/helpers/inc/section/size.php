<section>
	<h2>Size</h2>
	<div>
	<?php
	$sizes = array(
		'fw-sm-only'
	); ?>
		<?php foreach ($sizes as &$value) : ?>
			<p class="<?php echo $value;?>"><?php echo $value;?></p>
		<?php endforeach;?>
	</div>
</section>
