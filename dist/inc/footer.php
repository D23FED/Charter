		</main>
		<?php //Site footer ?>
		<?php if ( (isset($document['site_footer'])) && ($document['site_footer']) ) : ?>
			<footer class="site-footer">
				<?php require($site['files']['site_footer_menu']); ?>
			</footer>
		<?php endif; ?>
	</div><!-- /.site-container  -->
</body>
<?php // JS libraries
script_tag($site['assets']['jquery']);
script_tag($site['assets']['bootstrap_js']);

// Template Block: Custom page-specific footer
if (file_exists($site['files']['page_footer'])) {
	include($site['files']['page_footer']);
} else {
	html_comment($site['files']['page_footer'] . 'not found');
}

// Page-specific JS
if (file_exists('js/script.js')) {
	echo "<script>\r\n";
	include('js/script.js');
	echo '</script>';
}
?>
</html>

