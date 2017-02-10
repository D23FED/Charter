<section>
	<h2>Terms</h2>
	<div>
	<?php
	$terms = array(
		''
	); ?>
		<?php foreach ($terms as &$value) : ?>
			<p class="<?php echo $value;?>"><?php echo $value;?></p>
		<?php endforeach;?>
	</div>
</section>
