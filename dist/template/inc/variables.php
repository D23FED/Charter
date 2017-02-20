<?php
// Global site variables
$site = array(
	'title' => 'Charter Spectrum',
	'assets' => array(
		'bootstrap_js'    => 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js',
		'bootstrap_css'   => 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css',
		'fontawesome_css' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css',
		'jquery'          => 'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js',
		'site_css'        => '/template/style/style.css',
		'residential_css' => '/template/style/residential.css',
		'business_css'    => '/template/style/business.css',
		'site_js'         => '/template/js/script.min.js'
	),
	'files' => array(	// Files within project folders
		'site_header'      => 'header.php',
		'site_footer'      => 'footer.php',
		'site_header_menu' => 'menus/header.php',
		'site_footer_menu' => 'menus/footer.php',
		'page_vars'        => 'inc/variables.php',
		'page_header'      => 'inc/page-header.php',
		'page_footer'      => 'inc/page-footer.php'
	)
);

// Per-document variables, defaults
$document = array(
	'title' => '',
	'body' => array(
		'id'    => '',
		'class' => ''
	),
	'component' => array(
		'name' => '',
		'lob' => ''
	),
	'site_header'    => true,
	'site_footer'    => true,
	'primary_nav'    => true,
	'site_container' => 'fixed' // 'fixed' or 'full-width'
);

