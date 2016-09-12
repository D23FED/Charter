<?php
function title_tag() {
	$site_title = 'Time Warner Cable';
	if ( (isset($GLOBALS['title'] )) && ($GLOBALS['title'] !== '') ) {
		echo($GLOBALS['title']);
	} elseif ( (isset($GLOBALS['banner_title'] )) && ($GLOBALS['banner_title'] !== '') ) {
		echo ($GLOBALS['banner_title']);
	} else {
		echo 'Page Title';
	}
	echo " | $site_title";
}

function stylesheet($url) {
	$style_str = "<link rel='stylesheet' href='$url'>";
	echo $style_str;
}
function script_tag($url) {
	$script_str = "<script src='$url'></script>";
	echo $script_str;
}
// Check if a var is set, optionally supply a default; Useful to check var before echo
function issetor(&$var, $default = false) {
    return isset($var) ? $var : $default;
}
?>

