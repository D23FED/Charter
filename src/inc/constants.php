<?php
// Constants
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("INC", ROOT . '/inc/');
// Include paths
$global_inc_path = ROOT.'/inc';
$relative_inc_path = './inc';
set_include_path(get_include_path() . PATH_SEPARATOR . $global_inc_path . PATH_SEPARATOR . $relative_inc_path);
// Debug
$debug = false;
if ($debug) {
	echo "CONSTANTS LOADED".'<br>';
	echo 'Include path: '.get_include_path()."\n";
}
?>

