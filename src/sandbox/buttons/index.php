<?php require( $_SERVER[ 'DOCUMENT_ROOT']. '/inc/header.php'); //begin base template ?>

<?php

function button_demo_html($class = 'btn') { ?>
	<div class="row">
		<div class="col-xs-12">
		<h1>Button Style: <code><?=$class?></code></h1>
		<hr>
		<h2>Link</h2>
			<a class="<?=$class?>" href="#">Button-style Link</a>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h2>&lt;button&gt;</h2>
			<button class="<?=$class?>">True &lt;button&gt;</button>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h2>&lt;input&gt;</h2>
			<form action="#">
				<input type="button" value="Launch Nukes" class="<?=$class?>">
				<input type="submit" value="Submit" class="<?=$class?>">
			</form>
		</div>
	</div>
<?php }; ?>

<div class="container">
	<?php
	button_demo_html('btn btn-primary');
	button_demo_html('btn btn-info');
	?>
</div>

<?php require($site[ 'files'][ 'site_footer']); //end base template ?>
