<?php
if ( (isset($document['site_footer'])) && ($document['site_footer']) ) {
	require('menus/footer.php');
}
?>
</body>
<?php script_tag($site['assets']['jquery']);?>
<?php script_tag($site['assets']['bootstrap_js']);?>
<?php
// Custom page-specific footer
if (file_exists($site['files']['page_footer'])) {
	include($site['files']['page_footer']);
} else {
	html_comment($site['files']['page_footer'] . 'not found');
}
if (file_exists('js/script.js')) {
	echo "<script>\r\n";
	include('js/script.js');
	echo '</script>';
}
?>
</html>

