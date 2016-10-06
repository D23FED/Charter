<!DOCTYPE html><?php
require('constants.php');
require('variables.php');
require('functions.php');
// Page-specific variables
if (file_exists($site['files']['page_vars'])) {
	include($site['files']['page_vars']);
	html_comment('Page-specific variables loaded');
} else {
	html_comment('No page vars loaded');
}?>
<!--[if IE 9 ]><html class="ie ie-9 no-js" lang="en"><![endif]--><!--[if gt IE 9]><!-->
<html class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php title_tag(); ?>
	<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
	<?php // Bootstrap CSS
	stylesheet($site['assets']['bootstrap_css']);
	// Site CSS
	html_comment('Global Style');
	stylesheet($site['assets']['site_css']);
	// LOB CSS
	stylesheet('','lob-style');
	// Page-specific style
	html_comment('Page-specific style');
	stylesheet('style/style.css');
	// JS libraries
	script_tag($site['assets']['jquery']);
	script_tag($site['assets']['bootstrap_js']);
	// Global JS
	script_tag($site['assets']['site_js']);
	// Template block: Page-specific <HEAD>
	if (file_exists($site['files']['page_header'])) {
		include($site['files']['page_header']);
	} else {
		html_comment($site['files']['page_header'] . 'not found');
	}	?>
</head>

<body id="<?php echo issetor($document['body']['id'])?>" class="<?php echo issetor($document['body']['class'])?>">
	<div class="site-container">
		<?php if ( isset($document['site_header']) && $document['site_header'] ) : ?>
			<header class="site-header">
				<?php include_once($site['files']['site_header_menu']); ?>
			</header>
		<?php endif; ?>
		<main class="container-<?php echo $document['site_container']?>">
