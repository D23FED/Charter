<section>
	<h2>Images</h2>
	<div>
	<?php
	$images = array(
		'image-left',
		'image-center',
		'image-right'
	); ?>
		<?php foreach ($images as &$value) : ?>
			<p><?php echo $value;?></p>
			<p style="border: 1px solid gray; width: 600px; max-width: 100%;" class="clearfix"><img class="<?php echo $value;?>" src="http://placehold.it/200x200" /></p>
		<?php endforeach;?>
	</div>
</section>
