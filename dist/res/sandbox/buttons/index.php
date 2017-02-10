<?php require($_SERVER['DOCUMENT_ROOT'].'/template/inc/header.php'); //begin base template ?>

<div class="container">
	<?php
	button_demo_html('btn btn-default');
	button_demo_html('btn btn-primary');
	button_demo_html('btn btn-info');
	?>
</div>

<?php require($site[ 'files'][ 'site_footer']); //end base template ?>
