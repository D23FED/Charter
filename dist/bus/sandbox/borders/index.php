<?php require($_SERVER['DOCUMENT_ROOT'].'/template/inc/header.php');
//begin base template ?>
<div class="container"></div>
	<div class="row">
		<div class="col-xs-12 col-sm-10 col-sm-push-sm-1 col-md-8 col-md-push-2">
			<h1><?php echo $document['title']; ?></h1>
			<hr>
			<?php include('inc/content.php'); ?>
		</div>
	</div>
</div>
<?php require($site[ 'files'][ 'site_footer']);
//end base template ?>
