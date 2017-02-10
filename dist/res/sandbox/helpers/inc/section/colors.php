<section>
	<h2>Colors</h2>
	<div>
		<?php $colors = array(
			'bg-primary',
			'bg-success',
			'bg-info',
			'bg-warning',
			'bg-danger',
			'bg-deep-blue',
			'bg-medium-blue',
			'bg-light-blue',
			'bg-light-gray',
			'bg-gray',
			'bg-gray-f8',
			'bg-dark-gray',
			'bg-teal',
			'bg-yellow',
			'bg-pink',
			'bg-purple',
			'bg-transparent-deep-blue',
			'bg-gradient-primary',
			'bg-gradient-secondary',
			'bg-gradient-success',
			'bg-gradient-tertiary',
			'bg-inset-gradient',
			'bg-secondary-inset-gradient',
			'text-primary',
			'text-info',
			'text-warning',
			'text-danger',
			'text-success',
			'text-black',
			'text-deep-blue',
			'text-medium-blue',
			'text-secondary',
			'text-light-blue',
			'text-gray',
			'text-dark-gray',
			'text-teal',
			'text-yellow',
			'text-pink',
			'text-purple',
			'text-muted',
			'text-gradient-blue'
		);
		$colorsWhite = array(
			'bg-white',
			'bg-transparent-white',
			'bg-transparent-white-xs-only',
			'bg-transparent-white-sm-only',
			'bg-transparent-white-md-only',
			'bg-transparent-white-sm',
			'bg-transparent-white-md',
			'bg-transparent-white-lg',
			'text-white',
			'color-light',
			'light-color'
		); ?>
		<?php foreach ($colors as &$value) : ?>
			<p class="<?php echo $value;?>"><?php echo $value;?></p>
		<?php endforeach;?>
		<div style="background-color: black;" class="py-15">
			<?php foreach ($colorsWhite as &$value) : ?>
				<p class="<?php echo $value;?>"><?php echo $value;?></p>
			<?php endforeach;?>
		</div>
	</div>
</section>
