<!DOCTYPE html>
<?php
require('constants.php');
require('variables.php');
require('functions.php');
// Page-specific variables
if (file_exists($site['files']['page_vars'])) {
	include($site['files']['page_vars']);
} else {
	echo '<!-- No page vars loaded -->';
}?>
<!--[if IE 9 ]><html class="ie ie-9 no-js" lang="en"><![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php title_tag(); ?>
	<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
	<?php stylesheet($site['assets']['bootstrap_css']); ?>
	<?php // Page-specific variables ?>
	<?php stylesheet('/style/style.css'); ?>
	<?php	// Custom page-specific <HEAD>
	if (file_exists($site['files']['page_header'])) {
		include($site['files']['page_header']);
	} else {
		html_comment($site['files']['page_header'] . 'not found');
	}
	?>
</head>

<body id="<?php echo issetor($document['body']['id'])?>" class="<?php echo issetor($document['body']['class'])?>">
	<?php if ( isset($document['site_header']) && $document['site_header'] ) {
		include_once('menus/header.php');
	}
	?>
