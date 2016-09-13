<!-- Global vars loaded -->
<?php // Global site variables
$site = array(
	'title' => 'Charter Spectrum',
	'assets' => array(
		'bootstrap_js' => 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js',
		'bootstrap_css' => 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css',
		'jquery' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js',
		'site_css' => '/style/style.css'
	),
	'files' => array(
		'site_header' => 'inc/header.php',
		'site_footer' => 'inc/footer.php',
		'site_header_menu' => 'menus/header.php',
		'site_footer_menu' => 'menus/footer.php',
		'page_vars' => 'inc/variables.php',
		'page_header' => 'inc/page-header.php',
		'page_footer' => 'inc/page-footer.php'
	)
);

// Per-document variables, defaults
$document = array(
	'title' => '',
	'meta' => array(
		'description' => '',
		'keywords' => ''
	),
	'body' => array(
		'id'    => '',
		'class' => ''
	),
	'site_header' => true,
	'site_footer' => true,
	'primary_nav' => true,
	'site_container' => 'fixed' // 'fixed' or 'full-width'
);

