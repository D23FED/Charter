<?php
// Constants
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("INC", ROOT . '/template/inc/');

// Include paths
$global_inc_path = ROOT.'/template/inc';
$relative_inc_path = './template/inc';
set_include_path(get_include_path() . PATH_SEPARATOR . $global_inc_path . PATH_SEPARATOR . $relative_inc_path);

