<?php require($_SERVER['DOCUMENT_ROOT'].'/template/inc/header.php');
//begin base template ?>
<div class="container"></div>
	<div class="row">
		<div class="col-xs-12 col-md-8">
			<header>
				<h1>Helpers Demo</h1>
			</header>
			<?php include_once('inc/section/display.php');?>
			<hr>
			<?php include_once('inc/section/position.php');?>
			<hr>
			<?php include_once('inc/section/spacing.php');?>
			<hr>
			<?php include_once('inc/section/size.php');?>
			<hr>
			<?php include_once('inc/section/borders.php');?>
			<hr>
			<?php include_once('inc/section/colors.php');?>
			<hr>
			<?php include_once('inc/section/text.php');?>
			<hr>
			<?php include_once('inc/section/buttons.php');?>
			<hr>
			<?php include_once('inc/section/images.php');?>
			<hr>
			<?php include_once('inc/section/forms.php');?>
			<hr>
			<?php include_once('inc/section/disclaimer.php');?>
			<hr>
		</div>
	</div>
</div>
<?php ?>
<?php require($site[ 'files'][ 'site_footer']);
//end base template ?>
