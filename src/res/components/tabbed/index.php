<?php require($_SERVER['DOCUMENT_ROOT'].'/template/inc/header.php'); //begin base template ?>
<main class="container single-column-template">
	<div class="customWrapper">
		<div class="cw-tab-style-1  ">
			<div>
				<div class="tabbedComponent section tab-style-5">
					<div class="inner" id="7e5bf786-644d-45bf-a32b-fca349863326">
						<div class="tab-row">
							<ul class="nav nav-tabs">
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="bafb3fcf-e9e8-466f-b1c9-39de72c94794" class="tab" id="labelFirst"> <a href="javascript:void(0)" data-ref="#firsttablabel"><span>First Tab Label</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="16d15735-d7a2-43b8-9f4f-316ba5b7c0e2" class="tab js-active" id="someHeaderLabel"> <a href="javascript:void(0)" data-ref="#secondtablabel"><span>Second Tab Label</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="eb4555da-eb4a-4943-9d63-1eafc5dfc78b" class="tab" id="anotherHeader"> <a href="javascript:void(0)" data-ref="#thirdtab"><span>Third Tab</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
							</ul>
						</div>
						<div class="tab-content-container">
							<div class="tabbedContent" id="firsttablabel" style="display: none;">
								<div class="parbase text">
									<p>Content for the <b>first tab</b>
									</p>
									<ul>
										<li>one</li>
										<li>two</li>
										<li>three</li>
									</ul>
									<ol>
										<li>one</li>
										<li>two</li>
										<li>three</li>
									</ol>
								</div>
							</div>
							<div class="tabbedContent" id="secondtablabel" style="display: block;">
								<div class="richtext">
									<div id="25635483-4657-4fb9-9129-bf6e2b5a656a">
										<p>Content for the <b>second tab</b>
										</p>
									</div>

								</div>
							</div>
							<div class="tabbedContent" id="thirdtab" style="display: none;">
								<div class="parbase text">
									<p>Content for the <b>third tab</b>.&nbsp;Mauris sagittis porttitor arcu, eu maximus urna pharetra ac. Suspendisse id egestas nisi, et tincidunt lectus. Curabitur volutpat, sapien sit amet tincidunt volutpat, ligula dui mollis nibh, fermentum rhoncus ante tortor non quam. Duis semper, sapien quis facilisis blandit, orci velit mollis lorem, quis convallis massa quam sit amet eros.</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

</main>
<?php require($site[ 'files'][ 'site_footer']); //end base template ?>
