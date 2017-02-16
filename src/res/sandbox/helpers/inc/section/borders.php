<section>
	<h2>Borders</h2>
	<div>
		<?php $borders = array(
			'border-bottom ',
			'border-radius',
			'bordered-solid',
			'bordered-dotted',
			'bordered-left',
			'ordered-right',
			'box',
			'bd-0',
			'bd-1',
			'bdx-1',
			'bd-gray',
			'bd-dkgray'
		); ?>
		<?php foreach ($borders as &$value) : ?>
			<p class="<?php echo $value;?>"><?php echo $value;?></p>
		<?php endforeach;?>
	</div>
</section>
