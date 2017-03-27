<?php require($_SERVER['DOCUMENT_ROOT'].'/template/inc/header.php'); //begin base template ?>
<?php
$price_internet = array(
	"before" => "From",
	"after" => "",
	"currency" => "$",
	"whole" => "29",
	"super" => "99/mo",
	"terms" => "for 12 mos.*",
	"terms2" => ""
);
$price_tv = array(
	"before" => "From",
	"after" => "",
	"currency" => "$",
	"whole" => "59",
	"super" => "99",
	"extra" => "/mo",
	"terms" => "for 12 mos",
	"terms2" => "when bundled*"
);

$price_column_class = "p-col";
$price_row_class = "p-row";

function price_html($price, $class ='') {
	global $price_column_class, $price_row_class; ?>
	<div class="price-block <?php echo $class; ?>">

		<?php // Before ?>
		<div class="before">
			<div class="inner">
				<?php if ( $price['before'] !== '') {
					echo $price['before'];
				} else {
					echo "&nbsp;";
				} ?>
			</div>
		</div>

		<?php // Price ?>
		<!-- <div class="row-price row"> -->
			<div class="price">

				<div class="currency <?=$price_column_class;?>">
					<?php echo $price['currency']; ?>
				</div>
				<div class="whole <?=$price_column_class;?>">
					<?php echo $price['whole']; ?>
				</div>
				<div class="details <?=$price_column_class;?>">
					<div class="inner">
						<div class="super">
							<?php echo $price['super'];
							if (isset($price['extra']) && $price['extra'] !== '') {
								echo '<span class="extra">'.$price['extra'].'</span>';
							}; ?>
						</div>
						<?php	if (isset($price['terms']) && $price['terms'] !== '') : ?>
							<div class="term">
								<?php echo $price['terms']; ?>
							</div>
							<div class="term">
								<?php echo $price['terms2']; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>

			</div>
		<!-- </div> -->

		<?php // After
		if ( $price['after'] !== '') :?>
			<div class="after">
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
			<h1>Price Component</h1>
			<h2>Single Price</h2>
		</div>
	</div>

	<!-- Single prices -->
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<h3>Basic</h3>
			<?php price_html($price_internet); ?>
		</div>

		<div class="col-sm-8 col-sm-offset-2">
			<h3>Style 01</h3>
			<?php price_html($price_internet, 'price-style-01'); ?>
		</div>

		<div class="col-sm-8 col-sm-offset-2">
			<h3>Style 02</h3>
			<?php price_html($price_internet, 'price-style-02'); ?>
		</div>

		<div class="col-sm-8 col-sm-offset-2">
			<h3>Style 03</h3>
			<?php price_html($price_internet, 'price-style-03'); ?>
		</div>

		<div class="col-sm-8 col-sm-offset-2">
			<h3>Style 04</h3>
			<?php price_html($price_internet, 'price-style-04'); ?>
		</div>

		<div class="col-sm-8 col-sm-offset-2">
			<h3>Style 05</h3>
			<?php price_html($price_tv, 'price-style-05'); ?>
		</div>
	</div>

	<!-- Double prices -->
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<h2>Double Price Block</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="price-block-double price-style-01">
				<?php price_html($price_tv, 'price-style-01'); ?>
				<span class="separator price-style-01">&plus;</span>
				<?php price_html($price_internet, 'price-style-01'); ?>
			</div>
		</div>
	</div>
</div>

<?php require($site[ 'files'][ 'site_footer']); //end base template ?>
