<section>
	<h2>Forms</h2>
	<div>
	<?php
	$forms = array(
		''
	); ?>
		<?php foreach ($forms as &$value) : ?>
			<p class="<?php echo $value;?>"><?php echo $value;?></p>
		<?php endforeach;?>
	</div>
</section>
