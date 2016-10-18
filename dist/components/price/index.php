<?php require( $_SERVER[ 'DOCUMENT_ROOT']. '/inc/header.php'); //begin base template ?>
<?php
$price_internet = array(
	"before" => "from",
	"after" => "",
	"currency" => "$",
	"whole" => "29",
	"super" => "99/mo",
	"terms" => "for 12 mos.*"
);
$price_tv = array(
	"before" => "from",
	"after" => "",
	"currency" => "$",
	"whole" => "59",
	"super" => "99/mo",
	"terms" => "for 12 mos.*"
);

function price_html($price, $class ='') { ?>
	<div class="price-block <?php echo $class; ?>">

		<?php // Before
		if ( $price['before'] !== '') :?>
			<div class="before p-row">
				<div class="inner">
					<?php echo $price['before']; ?>
				</div>
			</div>
		<?php endif;?>

		<?php // Price ?>
		<div class="price p-row">
			<div class="currency p-col">
				<?php echo $price['currency']; ?>
			</div>
			<div class="whole p-col">
				<?php echo $price['whole']; ?>
			</div>
			<div class="details p-col">
				<div class="inner">
					<div class="super">
						<?php echo $price['super']; ?>
					</div>
					<div class="term">
						<?php echo $price['terms']; ?>
					</div>
				</div>
			</div>
		</div>

		<?php // After
		if ( $price['after'] !== '') :?>
			<div class="after p-row">
				<div class="inner">
					<?php echo $price['after']?>
				</div>
			</div>
		<?php endif;?>

	</div>
<?php } ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1>Single Price</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6">
			<h2>Basic</h2>
			<?php price_html($price_internet); ?>
		</div>
		<div class="col-xs-6">
			<h2>Style 01</h2>
			<?php price_html($price_internet, 'price-style-01'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h1>Double Price Block</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="price-block-double price-style-01">
				<?php price_html($price_tv, 'price-style-01'); ?>
				<span class="separator price-style-01">
					&plus;
				</span>
				<?php price_html($price_internet, 'price-style-01'); ?>
			</div>
		</div>
	</div>
</div>





<?php require($site[ 'files'][ 'site_footer']); //end base template ?>
