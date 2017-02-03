<?php
$document = array(
	'title' => 'Custom Table Component',
	'body'  => array(
		'id'    => '',
		'class' => ''
	),
	'component' => array(
		'name' => 'Custom Table',
		'lob'  => 'common', //common, residental, business, or enterprise
		'lob_switch' => false //enable switching between several lines of business for a single component
	),
	'site_header'    => true,
	'site_footer'    => true,
	'primary_nav'    => true,
	'site_container' => 'fixed' // 'fixed' or 'full-width'
);
