<?php
echo 'constants.php';
// Constants
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("INC", ROOT . '/inc/');
// Include paths
set_include_path(".:/usr/local/php56/pear:".$_SERVER['DOCUMENT_ROOT']."/inc");
?>

