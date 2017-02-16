<section>
	<h2>Position</h2>
	<?php $positions = array(
		'relative',
		'absolute',
		'left',
		'right',
		'float-left',
		'float-right',
		'bottom-justified',
		'top-justified',
		'left-justified',
		'right-justified',
		'vertical-center',
		'vertical-center-abs',
		'vertical-center-flex',
		'horizontal-center',
		'horizontal-center-flex',
		'absolute-center',
		'absolute-center-flex',
		'full',
		'vertical-top',
		'vertical-middle',
		'vertical-bottom',
		'vertical-baseline'
	); ?>
	<div class="relative">
		<?php foreach ($positions as &$value) : ?>
			<p class="<?php echo $value;?>"><?php echo $value;?></p>
		<?php endforeach;?>
	</div>
</section>
