<section>
	<h2>Disclaimer</h2>
	<div>
	<?php
	$disclaimer = array(
		''
	); ?>
		<?php foreach ($disclaimer as &$value) : ?>
			<p class="<?php echo $value;?>"><?php echo $value;?></p>
		<?php endforeach;?>
	</div>
</section>
