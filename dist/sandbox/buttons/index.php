<?php require( $_SERVER[ 'DOCUMENT_ROOT']. '/inc/header.php'); //begin base template ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
		<h1>Primary</h1>
		<h2>Link</h2>
			<a class="btn btn-primary" href="#">Button-style Link</a>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
		<h2>&lt;button&gt;</h2>

			<button class="btn btn-primary">True &lt;button&gt;</button>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h2>&lt;input&gt;</h2>

			<form action="#">
				<input type="button" value="Launch Nukes" class="btn btn-primary">
				<input type="submit" value="Submit" class="btn btn-primary">
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12"></div>
	</div>
</div>

<?php require($site[ 'files'][ 'site_footer']); //end base template ?>
