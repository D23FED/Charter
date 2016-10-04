<?php require( $_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); //begin base template ?>

<div class="tabbedComponent">
	<div class="tab-component">

		<div class="tab-row">
			<ul>
				<div class="tabbedRow parsys">
					<div class="tabbedLabel">
						<li  class="icon-before " id="labelFirst"><a href="javascript:void(0)" data-ref="#labelfirst"><span>First tab</span></a> </li>
					</div>
				</div>
				<div class="tabbedRow parsys">
					<div class="tabbedLabel">
						<li  class="icon-before" id="someHeaderLabel"><a href="javascript:void(0)" data-ref="#someheaderlabel"><span>Second Tab</span></a> </li>
					</div>
				</div>
				<div class="tabbedRow parsys">
					<div class="tabbedLabel">
						<li  class="icon-before" id="anotherHeader"><a href="javascript:void(0)" data-ref="#anotherheader"><span>Third tab</span></a> </li>
					</div>
				</div>
			</ul>
		</div>

		<div class="tab-content-container">
			<div class="tabbedContent" id="labelfirst">
				<div class="parbase text">
					<p>Content for first tab.</p>
				</div>
			</div>
			<div class="tabbedContent" id="someheaderlabel">
				<div class="image cq-analyzable parbase">
					<div><img src="images/ball.jpg" alt="2up-price-conferences" title="2up-price-conferences" class="cq-dd-image"> </div>
				</div>
				<div class="parbase text">
					<p>Content for second tab</p>
				</div>
			</div>
			<div class="tabbedContent" id="anotherheader">
				<div class="parbase text">
					<p>Content for third tab. Content for third tab. Content for third tab. Content for third tab. Content for third tab. Content for third tab. Content for third tab. Content for third tab. Content for third tab. Content for third tab. Content for third tab. Content for third tab. Content for third tab. Content for third tab. Content for third tab. </p>
				</div>
			</div>
		</div>

	</div>
	<script type="text/javascript" src="js/script.js"></script>
	<script>$('.tabbedComponent').tabbedComponent();</script>
</div>

<?php require($site['files']['site_footer']); //end base template ?>

