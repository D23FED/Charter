		</main>
		<?php //Site footer ?>
		<?php if ( (isset($document['site_footer'])) && ($document['site_footer']) ) : ?>
			<footer class="site-footer">
				<?php require($site['files']['site_footer_menu']); ?>
			</footer>
		<?php endif; ?>
	</div><?php //end .site-container ?>
	<?php

	// Template Block: Custom page-specific footer
	if (file_exists($site['files']['page_footer'])) {
		include($site['files']['page_footer']);
	} else {
		html_comment($site['files']['page_footer'] . 'not found');
	}

	// Add ability to switch line of business if enabled
	if( isset($document['component']['lob_switch']) && $document['component']['lob_switch'] ) {
		echo count($document['component']);
	}

	// Page-specific JS
	if (file_exists('js/script.js')) {
		echo "<script>\r\n";
		include('js/script.js');
		echo '</script>';
	} ?>
</body></html>
