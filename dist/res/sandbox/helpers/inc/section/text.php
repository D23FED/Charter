<section>
	<h2>Text</h2>
	<div>
	<?php
	$text = array(
		'font-light',
		'font-medium',
		'font-bold',
		'text-bold',
		'font-extra-bold',
		'font-italic',
		'underline',
		'font-underline',
		// 'underline-none',
		'fs-8',
		'fs-36',
		'no-wrap',
		'text-left',
		'text-center',
		'text-right',
		'text-left-sm',
		'text-center-sm',
		'text-right-sm'
	); ?>
		<?php foreach ($text as &$value) : ?>
			<p class="<?php echo $value;?>"><?php echo $value;?></p>
		<?php endforeach;?>
		<p class="underline-none"><a href="">underline-none</a></p>
		<p>
			spacer
			<hr class="spacer">
			inset
			<hr class="inset">
			black
			<hr class="black">
		</p>
		<ul class="bullets-blue">
			<li>bullets-blue</li>
			<li>bullets-blue</li>
		</ul>
		<p>channel-logo logo-tmc: <a href="" class="channel-logo logo-tmc"></a></p>
	</div>
</section>
