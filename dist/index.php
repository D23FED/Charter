
<?php require( $_SERVER[ 'DOCUMENT_ROOT']. '/inc/header.php'); //begin base template ?>
<?php
$components = array(
	'Accordion Table' => array(
		'url' => 'accordion-table'
	)
)
?>
<main class="container">
<div class="row">
	<div class="col-xs-12">
	<h1>Components</h1>
		<ul>
			<li><a href="components/accordion-table/">Accordion Table</a></li>
			<li><a href="components/image-art-direction/">Image Art Direction</a></li>
			<li><a href="components/price/">Pricing</a></li>
			<li><a href="components/tabs/">Tabs</a></li>
			<li><a href="components/video-wrapper/">Video Wrapper/</a></li>
		</ul>
	</div>
</div>

</main>
<?php require($site[ 'files'][ 'site_footer']); //end base template ?>
