<?php require($_SERVER['DOCUMENT_ROOT'].'/template/inc/header.php'); //begin base template ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-8">
			<h1>Typography Demo</h1>
			<hr>
			<section>
				<h2><code>html</code> and <code>body</code> text defaults, links</h2>
				<div>
					<p>Proin vehicula, <a href="#">orci quis rutrum porta</a>, mauris turpis consectetur sapien, eget ornare lacus dolor ac urna. Morbi rhoncus nisl quis pulvinar viverra. Donec pulvinar venenatis condimentum. Nam ac dolor elit. Nam in pharetra nibh.</p>
				</div>
			</section>
			<hr>
			<section>
				<h2>Headers</h2>
				<?php for ($i = 1; $i < 7; $i++) : ?>
					<h<?php echo $i;?>>H<?php echo $i;?> Header</h<?php echo $i;?>>
					<h<?php echo $i;?> class="alternate">H<?php echo $i;?> Alternate Header</h<?php echo $i;?>>
				<?php endfor; ?>
			</section>
			<hr>
			<section>
				<h2>Disclaimer</h2>
				<p class="disclaimer">
					Complete offer, savings and restriction details: 1 Savings claim based on free DVR service on one box or discounted 2-4 boxes to $9.99 for year 1; standard rates apply after year 1; Triple Play required. TV: Equipment required and is extra; DVR receiver required for DVR service and is extra.
				</p>
			</section>
		</div>
	</div>
</div>
<?php

?>
<?php require($site[ 'files'][ 'site_footer']); //end base template ?>
