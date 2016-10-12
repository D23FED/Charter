<?php require( $_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); //begin base template ?>

<main class="container single-column-template">
	<div class="injectionContainer">
		<style type="text/css">
			/* Begin dev-only rules (Just for testing, remove from final CSS) */
			/* =================================== */
			[class*=cw-tab-style-] {
				margin-bottom: 10rem;
			}
			.cw-tab-style-3,
			.cw-tab-style-4 {
				background-color: #003057;
			}
			.cw-tab-style-3 .tab-row {
				padding: 2rem 0;
			}
			@media (min-width: 75em) {
				.cw-tab-style-3 .tab-row {
					padding: 0;
				}
			}
			/* End dev-only rules ================ */
		</style>
	</div>
	<div class="customWrapper">
		<div class="cw-tab-style-1 ">
			<div>
				<div class="tabbedComponent section tab-style-1">
					<div id="67c25138-3388-49d0-b450-1635f0e37d3f">
						<div class="tab-row">
							<ul class="nav nav-tabs">
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="3df3461a-b88c-4d7e-822c-45cbd197bdf8" class="tab" id="labelFirst"> <a href="javascript:void(0)" data-ref="#firsttab"><span>First Tab</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="191d8daf-1b26-468c-bd42-687c580a1b8a" class="tab js-active" id="someHeaderLabel"> <a href="javascript:void(0)" data-ref="#secondtablabel"><span>Second Tab Label</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="d96fc929-60e3-4b3c-b5d2-4dbb8e31dddc" class="tab" id="anotherHeader"> <a href="javascript:void(0)" data-ref="#thirdtab"><span>Third Tab</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>

							</ul>
						</div>
						<div class="tab-content-container">
							<div class="tabbedContent" id="firsttab" style="display: none;">
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
								<div class="image cq-analyzable parbase">
									<div id="cq-image-jsp-/content/spectrum/residential/fed/tabbedComponent/jcr:content/content/customwrapper_1027554266/wrapper-parsys/tabbedcomponent/parsys/tabbedrow_1662321883/tabbedContent/image"><img src="/content/spectrum/residential/fed/tabbedComponent/_jcr_content/content/customwrapper_1027554266/wrapper-parsys/tabbedcomponent/parsys/tabbedrow_1662321883/tabbedContent/image.img.jpg/1475517288595.jpg" alt="2up-price-conferences" title="2up-price-conferences" class="cq-dd-image">
									</div>
									<script type="text/javascript">
									</script>
								</div>
								<div class="richtext">
									<div id="6269a04c-a513-46fa-aed9-b7a80be97ebb">
										<p>Content for the <b>second tab</b>
										</p>
									</div>
									<script type="text/javascript">
									</script>
								</div>

							</div>
							<div class="tabbedContent" id="thirdtab" style="display: none;">
								<div class="parbase text">
									<p>Content for the <b>third tab</b>.&nbsp;Mauris sagittis porttitor arcu, eu maximus urna pharetra ac. Suspendisse id egestas nisi, et tincidunt lectus. Curabitur volutpat, sapien sit amet tincidunt volutpat, ligula dui mollis nibh, fermentum rhoncus ante tortor non quam. Duis semper, sapien quis facilisis blandit, orci velit mollis lorem, quis convallis massa quam sit amet eros.
										<br> </p>
								</div>

							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
	<div class="customWrapper">
		<div class="cw-tab-style-2 ">
			<div>
				<div class="tab-style-2 tabbedComponent section">
					<div id="ac2871d2-a145-41a1-ba8e-7c13c01b2c95">
						<div class="tab-row">
							<ul class="nav nav-tabs">
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="361ff72c-256d-497c-ab98-82af6508fdac" class="tab" id="labelFirst"> <a href="javascript:void(0)" data-ref="#international"><span>International</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="51b1b889-0778-455a-977c-d0c327964225" class="tab js-active" id="someHeaderLabel"> <a href="javascript:void(0)" data-ref="#lifestyle"><span>Lifestyle</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="72d29402-1584-47ed-a1de-6ba1b8fba9de" class="tab" id="anotherHeader"> <a href="javascript:void(0)" data-ref="#sports"><span>Sports</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="f4bc05e7-8170-4d4d-9e47-2dcc55038c55" class="tab"> <a href="javascript:void(0)" data-ref="#home&amp;food"><span>Home &amp; Food</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="10775ee4-eae6-43da-8c0f-d814509246a2" class="tab"> <a href="javascript:void(0)" data-ref="#kids"><span>Kids</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="7d19baaa-2bb7-447d-84dc-57d8b6594f66" class="tab"> <a href="javascript:void(0)" data-ref="#movies"><span>Movies</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="1d3eb9b3-a88d-44f9-9d2b-12b1e87fe4bc" class="tab"> <a href="javascript:void(0)" data-ref="#education"><span>Education</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>

							</ul>
						</div>
						<div class="tab-content-container">
							<div class="tabbedContent" id="international" style="display: none;">
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
							<div class="tabbedContent" id="lifestyle" style="display: block;">
								<div class="image cq-analyzable parbase">
									<div id="cq-image-jsp-/content/spectrum/residential/fed/tabbedComponent/jcr:content/content/customwrapper/wrapper-parsys/tabbedcomponent/parsys/tabbedrow_1662321883/tabbedContent/image"><img src="/content/spectrum/residential/fed/tabbedComponent/_jcr_content/content/customwrapper/wrapper-parsys/tabbedcomponent/parsys/tabbedrow_1662321883/tabbedContent/image.img.jpg/1475517288595.jpg" alt="2up-price-conferences" title="2up-price-conferences" class="cq-dd-image">
									</div>
									<script type="text/javascript">
									</script>
								</div>
								<div class="richtext">
									<div id="75963595-bc05-46d6-905d-b6ab4aa4176d">
										<p>Content for the <b>second tab</b>
										</p>
									</div>
									<script type="text/javascript">
									</script>
								</div>

							</div>
							<div class="tabbedContent" id="sports" style="display: none;">
								<div class="parbase text">
									<p>Content for the <b>third tab</b>.&nbsp;Mauris sagittis porttitor arcu, eu maximus urna pharetra ac. Suspendisse id egestas nisi, et tincidunt lectus. Curabitur volutpat, sapien sit amet tincidunt volutpat, ligula dui mollis nibh, fermentum rhoncus ante tortor non quam. Duis semper, sapien quis facilisis blandit, orci velit mollis lorem, quis convallis massa quam sit amet eros.
										<br> </p>
								</div>

							</div>
							<div class="tabbedContent" id="homefood" style="display: none;">
								<div class="richtext">
									<div id="f38c92cf-479d-4a4d-a8f5-63a4d5f1ec55">
										<p>Home and food content</p>
									</div>
									<script type="text/javascript">
									</script>
								</div>

							</div>
							<div class="tabbedContent" id="kids" style="display: none;">
								<div class="richtext">
									<div id="699e2478-52a6-4bfb-b3a4-61ca744195c1">
										<p><b>Kids content</b>
										</p>
										<p>&nbsp;fermentum rhoncus ante tortor non quam. Duis semper, sapien quis facilisis blandit, orci velit mollis lorem, quis convallis massa quam sit amet eros.</p>
										<ul>
											<li>one</li>
											<li>two&nbsp;</li>
											<li>three</li>
										</ul>
									</div>
									<script type="text/javascript">
									</script>
								</div>

							</div>
							<div class="tabbedContent" id="movies" style="display: none;">
								<div class="richtext">
									<div id="223aa753-4eeb-4973-bc41-075d7364b82d">
										<p><b>Movies&nbsp;&nbsp;</b>&nbsp;rhoncus ante tortor non quam. Duis semper, sapien quis facilisis blandit, orci velit mollis lorem, quis convallis massa quam sit amet eros.&nbsp;rhoncus ante tortor non quam. Duis semper, sapien quis facilisis blandit, orci velit mollis lorem, quis convallis massa quam sit amet eros.&nbsp;rhoncus ante tortor non quam. Duis semper, sapien quis facilisis blandit, orci velit mollis lorem, quis convallis massa quam sit amet eros.</p>
									</div>
									<script type="text/javascript">
									</script>
								</div>

							</div>
							<div class="tabbedContent" id="education" style="display: none;">
								<div class="richtext">
									<div id="cffc7e91-cce5-43ee-bb9b-e16525c6a2db">
										<p><b>Education </b>
										</p>
										<p>ante tortor non quam. Duis semper, sapien quis facilisis blandit, orci velit mollis lorem, quis convallis massa quam sit amet eros. rhoncus ante tortor non quam. Duis semper, sapien quis facilisis blandit, orci velit mollis lorem, quis convallis massa quam sit amet eros.</p>
									</div>
									<script type="text/javascript">
									</script>
								</div>

							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
	<div class="customWrapper">
		<div class="cw-tab-style-3 ">
			<div>
				<div class="tab-style-3 tabbedComponent section">
					<div id="2646e20d-2e5c-4729-ade6-ca3b12f014e8">
						<div class="tab-row">
							<ul class="nav nav-tabs">
								<li class="arrow arrow-prev"> <a href="#">‹</a> </li>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="8ada07a2-2167-4d34-beb9-2314b131aa9c" class="tab js-active" id="labelFirst"> <a href="javascript:void(0)" data-ref="#hbo"><span>HBO</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="7c6321f1-16ae-4ad9-871d-cb86a9a53783" class="tab" id="someHeaderLabel"> <a href="javascript:void(0)" data-ref="#showtime"><span>Showtime</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="03d128ab-9a3e-4b82-9baf-f4afc588e944" class="tab" id="anotherHeader"> <a href="javascript:void(0)" data-ref="#cinemax"><span>Cinemax</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="c450f49b-a05a-4287-bd61-126aec3ddb97" class="tab"> <a href="javascript:void(0)" data-ref="#starz"><span>Starz</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="d6b88095-507e-44e5-85eb-c2ea34d343f0" class="tab"> <a href="javascript:void(0)" data-ref="#themoviechannel"><span>The Movie Channel</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="a8b117fd-0254-48d3-b2bc-6001216b4f54" class="tab"> <a href="javascript:void(0)" data-ref="#starzencore"><span>StarzEncore</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="a3391b62-9f9f-4ad4-8b1e-c31966b90d72" class="tab"> <a href="javascript:void(0)" data-ref="#epix"><span>Epix</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>

								<li class="arrow arrow-next"> <a href="#">›</a> </li>
							</ul>
						</div>
						<div class="tab-content-container">
							<div class="tabbedContent" id="hbo" style="display: block;">
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
							<div class="tabbedContent" id="showtime" style="display: none;">
								<div class="image cq-analyzable parbase">
									<div id="cq-image-jsp-/content/spectrum/residential/fed/tabbedComponent/jcr:content/content/customwrapper_1040676551/wrapper-parsys/tabbedcomponent/parsys/tabbedrow_1662321883/tabbedContent/image"><img src="/content/spectrum/residential/fed/tabbedComponent/_jcr_content/content/customwrapper_1040676551/wrapper-parsys/tabbedcomponent/parsys/tabbedrow_1662321883/tabbedContent/image.img.jpg/1475517288595.jpg" alt="2up-price-conferences" title="2up-price-conferences" class="cq-dd-image">
									</div>
									<script type="text/javascript">
									</script>
								</div>
								<div class="richtext">
									<div id="7d701f01-83cc-4774-8445-feb58a4f87bd">
										<p>Content for the <b>second tab</b>
										</p>
									</div>
									<script type="text/javascript">
									</script>
								</div>

							</div>
							<div class="tabbedContent" id="cinemax" style="display: none;">
								<div class="parbase text">
									<p>Content for the <b>third tab</b>.&nbsp;Mauris sagittis porttitor arcu, eu maximus urna pharetra ac. Suspendisse id egestas nisi, et tincidunt lectus. Curabitur volutpat, sapien sit amet tincidunt volutpat, ligula dui mollis nibh, fermentum rhoncus ante tortor non quam. Duis semper, sapien quis facilisis blandit, orci velit mollis lorem, quis convallis massa quam sit amet eros.
										<br> </p>
								</div>

							</div>
							<div class="tabbedContent" id="starz" style="display: none;">
								<div class="richtext">
									<div id="d7d00625-256b-4bf2-963d-5fef0bebe8d0">
										<p>Content for the <b>fourth tab</b>
										</p>
									</div>
									<script type="text/javascript">
									</script>
								</div>

							</div>
							<div class="tabbedContent" id="themoviechannel" style="display: none;">
								<div class="richtext">
									<div id="a25acffd-657d-459a-acc6-20b524ea654f">
										<p>Content for the <b>fifth tab</b>
										</p>
									</div>
									<script type="text/javascript">
									</script>
								</div>

							</div>
							<div class="tabbedContent" id="starzencore" style="display: none;">
								<div class="richtext">
									<div id="44cea78a-aea7-4f1d-afd1-e90246131832">
										<p>Content for the <b>STARZ tab</b>
										</p>
									</div>
									<script type="text/javascript">
									</script>
								</div>

							</div>
							<div class="tabbedContent" id="epix" style="display: none;">
								<div class="richtext">
									<div id="857530d5-d29a-4b4c-8255-84c721c74329">
										<p>Content for the <b>epix&nbsp;tab</b>
										</p>
									</div>
									<script type="text/javascript">
									</script>
								</div>

							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
	<div class="customWrapper">
		<div class="cw-tab-style-4 ">
			<div>
				<div class="tab-style-4 side-tabs tabbedComponent section">
					<div id="80bb86c5-373f-4347-bc38-ba8694c6d8ef">
						<div class="tab-row">
							<ul class="nav nav-tabs">
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="188c0cd3-90bf-48be-b9fb-0ec7962e7418" class="tab js-active" id="labelFirst"> <a href="javascript:void(0)" data-ref="#firsttab"><span>First Tab</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="7a321e85-71fb-4f61-a0c1-0d64e29e7ef3" class="tab" id="someHeaderLabel"> <a href="javascript:void(0)" data-ref="#secondtablabel"><span>Second Tab Label</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>
								<div class="tabbedRow parsys">
									<div class="tabbedLabel">
										<li data-id="3fa9ba71-32c9-4993-9b48-6d008b73d86c" class="tab" id="anotherHeader"> <a href="javascript:void(0)" data-ref="#thirdtab"><span>Third Tab</span></a> <a href="javascript:void(0)" class="details-toggle">Details</a> </li>
									</div>
								</div>

							</ul>
						</div>
						<div class="tab-content-container">
							<div class="tabbedContent" id="firsttab" style="display: block;">
								<div class="parbase text">
									<p>Content for the <b>first tab</b>
									</p>
								</div>

							</div>
							<div class="tabbedContent" id="secondtablabel" style="display: none;">
								<div class="image cq-analyzable parbase">
									<div id="cq-image-jsp-/content/spectrum/residential/fed/tabbedComponent/jcr:content/content/customwrapper_1040676552/wrapper-parsys/tabbedcomponent/parsys/tabbedrow_1662321883/tabbedContent/image"><img src="/content/spectrum/residential/fed/tabbedComponent/_jcr_content/content/customwrapper_1040676552/wrapper-parsys/tabbedcomponent/parsys/tabbedrow_1662321883/tabbedContent/image.img.jpg/1475517288595.jpg" alt="2up-price-conferences" title="2up-price-conferences" class="cq-dd-image">
									</div>
									<script type="text/javascript">
									</script>
								</div>
								<div class="richtext">
									<div id="79f1c813-5ad1-41da-a684-5f8159b72661">
										<p>Content for the <b>second tab</b>
										</p>
										<ul>
											<li>alpha&nbsp;<a href="#">alpha</a>
											</li>
											<li>beta</li>
											<li>gamma</li>
										</ul>
										<ol>
											<li>alpha&nbsp;<a href="#">alpha</a>
											</li>
											<li>bravo</li>
											<li>charlie</li>
										</ol>
									</div>
									<script type="text/javascript">
									</script>
								</div>

							</div>
							<div class="tabbedContent" id="thirdtab" style="display: none;">
								<div class="parbase text">
									<p>Content for the <b>third tab</b>.&nbsp;Mauris sagittis porttitor arcu, eu maximus urna pharetra ac. Suspendisse id egestas nisi, et tincidunt lectus. Curabitur volutpat, sapien sit amet tincidunt volutpat, ligula dui mollis nibh, fermentum rhoncus ante tortor non quam. Duis semper, sapien quis facilisis blandit, orci velit mollis lorem, quis convallis massa quam sit amet eros.
										<br> </p>
								</div>

							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
	<div class="tabbedComponent">
		<div id="3bfe6037-5ad2-48b3-9946-7c67c2e0edfd">
			<div class="tab-row">
				<ul class="nav nav-tabs">
					<div class="tabbedWrapper">
						<div data-id="16b34ec4-0524-47ea-9c9a-7b6e21a8cb65" class="tab-component">
							<div class="respTabs">
								<ul>

								</ul>
							</div>
							<div class="tab-content-container"></div>
						</div>
						<script>
						</script>
					</div>
					<div class="tabbedRow parsys">
						<div class="cq-analyzable tabbedLabel tabbedlabel">
							<li data-id="fefc8d3a-3314-4b0a-a1f9-f594ce05fd2b" class="twc-icon-before " id=""><a href="javascript:void(0)" class="h5" data-ref="#"><span></span></a>
							</li>

						</div>
						<div class="parsys-tab-content parsys">

						</div>
					</div>

				</ul>
			</div>
			<div class="tab-content-container"></div>
		</div>

	</div>
	<script type="text/javascript">
	/* Tabs ==================================================================== */
	jQuery(document).ready(function() {
		jQuery('.tabbedComponent #67c25138-3388-49d0-b450-1635f0e37d3f').tabbedComponent();
	});
	jQuery(document).ready(function() {
		jQuery('.tabbedComponent #ac2871d2-a145-41a1-ba8e-7c13c01b2c95').tabbedComponent();
	});
	jQuery(document).ready(function() {
		jQuery('.tabbedComponent #2646e20d-2e5c-4729-ade6-ca3b12f014e8').tabbedComponent();
	});
	jQuery(document).ready(function() {
		jQuery('.tabbedComponent #80bb86c5-373f-4347-bc38-ba8694c6d8ef').tabbedComponent();
	});
	jQuery(document).ready(function() {
		jQuery('.tab-component[data-id="16b34ec4-0524-47ea-9c9a-7b6e21a8cb65"]').respTabComponent({
			disableScroll: ""
		});
	});
	jQuery(document).ready(function() {
		$('li[data-id="fefc8d3a-3314-4b0a-a1f9-f594ce05fd2b"] a').on('tap', function(event) {
			var tabName = '';
			var componentPath = 'responsive/common/components/content/tabbedComponent/tabbedLabel';
			if (window.s) {
				CQ_Analytics.record({
					event: ['tabClick'],
					values: {
						tabName: tabName.trim(),
						currentPage: s.pageName,
						currentGeoRegion: ClientContext.get('/twcprofile/region')
					},
					options: {
						obj: this,
						defaultLinkType: 'o'
					},
					componentPath: componentPath
				});
				s.eVar63 = s.prop63 = s.events = "";
			}
			event.preventDefault();
		});
	});
	jQuery(document).ready(function() {
		jQuery('.tabbedComponent #3bfe6037-5ad2-48b3-9946-7c67c2e0edfd').tabbedComponent();
	});
	/* RTEs ==================================================================== */
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#6269a04c-a513-46fa-aed9-b7a80be97ebb').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#6269a04c-a513-46fa-aed9-b7a80be97ebb').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#6269a04c-a513-46fa-aed9-b7a80be97ebb').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#6269a04c-a513-46fa-aed9-b7a80be97ebb').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#6269a04c-a513-46fa-aed9-b7a80be97ebb.hiddenRte');
			if ($richtext) {
				CQ_Analytics.ClientContextUtils.onStoreInitialized('spectrumprofile', function() {
					$richtext.each(function() {
						if (window.Spectrum && Spectrum.Util && typeof Spectrum.Util.replaceClientContextVarsInElement === 'function') {
							Spectrum.Util.replaceClientContextVarsInElement($(this));
							$(this).find("a").each(function() {
								var linkValue = $(this).data('href');
								$(this).attr('href', linkValue);
							});
						}
						$(this).removeClass('hiddenRte hidden');
					})
				}, 0);
			}
		});
	}
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#75963595-bc05-46d6-905d-b6ab4aa4176d').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#75963595-bc05-46d6-905d-b6ab4aa4176d').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#75963595-bc05-46d6-905d-b6ab4aa4176d').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#75963595-bc05-46d6-905d-b6ab4aa4176d').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#75963595-bc05-46d6-905d-b6ab4aa4176d.hiddenRte');
			if ($richtext) {
				CQ_Analytics.ClientContextUtils.onStoreInitialized('spectrumprofile', function() {
					$richtext.each(function() {
						if (window.Spectrum && Spectrum.Util && typeof Spectrum.Util.replaceClientContextVarsInElement === 'function') {
							Spectrum.Util.replaceClientContextVarsInElement($(this));
							$(this).find("a").each(function() {
								var linkValue = $(this).data('href');
								$(this).attr('href', linkValue);
							});
						}
						$(this).removeClass('hiddenRte hidden');
					})
				}, 0);
			}
		});
	}
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#f38c92cf-479d-4a4d-a8f5-63a4d5f1ec55').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#f38c92cf-479d-4a4d-a8f5-63a4d5f1ec55').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#f38c92cf-479d-4a4d-a8f5-63a4d5f1ec55').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#f38c92cf-479d-4a4d-a8f5-63a4d5f1ec55').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#f38c92cf-479d-4a4d-a8f5-63a4d5f1ec55.hiddenRte');
			if ($richtext) {
				CQ_Analytics.ClientContextUtils.onStoreInitialized('spectrumprofile', function() {
					$richtext.each(function() {
						if (window.Spectrum && Spectrum.Util && typeof Spectrum.Util.replaceClientContextVarsInElement === 'function') {
							Spectrum.Util.replaceClientContextVarsInElement($(this));
							$(this).find("a").each(function() {
								var linkValue = $(this).data('href');
								$(this).attr('href', linkValue);
							});
						}
						$(this).removeClass('hiddenRte hidden');
					})
				}, 0);
			}
		});
	}
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#699e2478-52a6-4bfb-b3a4-61ca744195c1').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#699e2478-52a6-4bfb-b3a4-61ca744195c1').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#699e2478-52a6-4bfb-b3a4-61ca744195c1').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#699e2478-52a6-4bfb-b3a4-61ca744195c1').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#699e2478-52a6-4bfb-b3a4-61ca744195c1.hiddenRte');
			if ($richtext) {
				CQ_Analytics.ClientContextUtils.onStoreInitialized('spectrumprofile', function() {
					$richtext.each(function() {
						if (window.Spectrum && Spectrum.Util && typeof Spectrum.Util.replaceClientContextVarsInElement === 'function') {
							Spectrum.Util.replaceClientContextVarsInElement($(this));
							$(this).find("a").each(function() {
								var linkValue = $(this).data('href');
								$(this).attr('href', linkValue);
							});
						}
						$(this).removeClass('hiddenRte hidden');
					})
				}, 0);
			}
		});
	}
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#223aa753-4eeb-4973-bc41-075d7364b82d').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#223aa753-4eeb-4973-bc41-075d7364b82d').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#223aa753-4eeb-4973-bc41-075d7364b82d').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#223aa753-4eeb-4973-bc41-075d7364b82d').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#223aa753-4eeb-4973-bc41-075d7364b82d.hiddenRte');
			if ($richtext) {
				CQ_Analytics.ClientContextUtils.onStoreInitialized('spectrumprofile', function() {
					$richtext.each(function() {
						if (window.Spectrum && Spectrum.Util && typeof Spectrum.Util.replaceClientContextVarsInElement === 'function') {
							Spectrum.Util.replaceClientContextVarsInElement($(this));
							$(this).find("a").each(function() {
								var linkValue = $(this).data('href');
								$(this).attr('href', linkValue);
							});
						}
						$(this).removeClass('hiddenRte hidden');
					})
				}, 0);
			}
		});
	}
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#cffc7e91-cce5-43ee-bb9b-e16525c6a2db').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#cffc7e91-cce5-43ee-bb9b-e16525c6a2db').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#cffc7e91-cce5-43ee-bb9b-e16525c6a2db').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#cffc7e91-cce5-43ee-bb9b-e16525c6a2db').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#cffc7e91-cce5-43ee-bb9b-e16525c6a2db.hiddenRte');
			if ($richtext) {
				CQ_Analytics.ClientContextUtils.onStoreInitialized('spectrumprofile', function() {
					$richtext.each(function() {
						if (window.Spectrum && Spectrum.Util && typeof Spectrum.Util.replaceClientContextVarsInElement === 'function') {
							Spectrum.Util.replaceClientContextVarsInElement($(this));
							$(this).find("a").each(function() {
								var linkValue = $(this).data('href');
								$(this).attr('href', linkValue);
							});
						}
						$(this).removeClass('hiddenRte hidden');
					})
				}, 0);
			}
		});
	}
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#7d701f01-83cc-4774-8445-feb58a4f87bd').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#7d701f01-83cc-4774-8445-feb58a4f87bd').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#7d701f01-83cc-4774-8445-feb58a4f87bd').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#7d701f01-83cc-4774-8445-feb58a4f87bd').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#7d701f01-83cc-4774-8445-feb58a4f87bd.hiddenRte');
			if ($richtext) {
				CQ_Analytics.ClientContextUtils.onStoreInitialized('spectrumprofile', function() {
					$richtext.each(function() {
						if (window.Spectrum && Spectrum.Util && typeof Spectrum.Util.replaceClientContextVarsInElement === 'function') {
							Spectrum.Util.replaceClientContextVarsInElement($(this));
							$(this).find("a").each(function() {
								var linkValue = $(this).data('href');
								$(this).attr('href', linkValue);
							});
						}
						$(this).removeClass('hiddenRte hidden');
					})
				}, 0);
			}
		});
	}
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#d7d00625-256b-4bf2-963d-5fef0bebe8d0').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#d7d00625-256b-4bf2-963d-5fef0bebe8d0').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#d7d00625-256b-4bf2-963d-5fef0bebe8d0').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#d7d00625-256b-4bf2-963d-5fef0bebe8d0').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#d7d00625-256b-4bf2-963d-5fef0bebe8d0.hiddenRte');
			if ($richtext) {
				CQ_Analytics.ClientContextUtils.onStoreInitialized('spectrumprofile', function() {
					$richtext.each(function() {
						if (window.Spectrum && Spectrum.Util && typeof Spectrum.Util.replaceClientContextVarsInElement === 'function') {
							Spectrum.Util.replaceClientContextVarsInElement($(this));
							$(this).find("a").each(function() {
								var linkValue = $(this).data('href');
								$(this).attr('href', linkValue);
							});
						}
						$(this).removeClass('hiddenRte hidden');
					})
				}, 0);
			}
		});
	}
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#a25acffd-657d-459a-acc6-20b524ea654f').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#a25acffd-657d-459a-acc6-20b524ea654f').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#a25acffd-657d-459a-acc6-20b524ea654f').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#a25acffd-657d-459a-acc6-20b524ea654f').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#a25acffd-657d-459a-acc6-20b524ea654f.hiddenRte');
			if ($richtext) {
				CQ_Analytics.ClientContextUtils.onStoreInitialized('spectrumprofile', function() {
					$richtext.each(function() {
						if (window.Spectrum && Spectrum.Util && typeof Spectrum.Util.replaceClientContextVarsInElement === 'function') {
							Spectrum.Util.replaceClientContextVarsInElement($(this));
							$(this).find("a").each(function() {
								var linkValue = $(this).data('href');
								$(this).attr('href', linkValue);
							});
						}
						$(this).removeClass('hiddenRte hidden');
					})
				}, 0);
			}
		});
	}
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#44cea78a-aea7-4f1d-afd1-e90246131832').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#44cea78a-aea7-4f1d-afd1-e90246131832').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#44cea78a-aea7-4f1d-afd1-e90246131832').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#44cea78a-aea7-4f1d-afd1-e90246131832').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#44cea78a-aea7-4f1d-afd1-e90246131832.hiddenRte');
			if ($richtext) {
				CQ_Analytics.ClientContextUtils.onStoreInitialized('spectrumprofile', function() {
					$richtext.each(function() {
						if (window.Spectrum && Spectrum.Util && typeof Spectrum.Util.replaceClientContextVarsInElement === 'function') {
							Spectrum.Util.replaceClientContextVarsInElement($(this));
							$(this).find("a").each(function() {
								var linkValue = $(this).data('href');
								$(this).attr('href', linkValue);
							});
						}
						$(this).removeClass('hiddenRte hidden');
					})
				}, 0);
			}
		});
	}
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#857530d5-d29a-4b4c-8255-84c721c74329').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#857530d5-d29a-4b4c-8255-84c721c74329').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#857530d5-d29a-4b4c-8255-84c721c74329').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#857530d5-d29a-4b4c-8255-84c721c74329').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#857530d5-d29a-4b4c-8255-84c721c74329.hiddenRte');
			if ($richtext) {
				CQ_Analytics.ClientContextUtils.onStoreInitialized('spectrumprofile', function() {
					$richtext.each(function() {
						if (window.Spectrum && Spectrum.Util && typeof Spectrum.Util.replaceClientContextVarsInElement === 'function') {
							Spectrum.Util.replaceClientContextVarsInElement($(this));
							$(this).find("a").each(function() {
								var linkValue = $(this).data('href');
								$(this).attr('href', linkValue);
							});
						}
						$(this).removeClass('hiddenRte hidden');
					})
				}, 0);
			}
		});
	}
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#79f1c813-5ad1-41da-a684-5f8159b72661').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#79f1c813-5ad1-41da-a684-5f8159b72661').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#79f1c813-5ad1-41da-a684-5f8159b72661').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#79f1c813-5ad1-41da-a684-5f8159b72661').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#79f1c813-5ad1-41da-a684-5f8159b72661.hiddenRte');
			if ($richtext) {
				CQ_Analytics.ClientContextUtils.onStoreInitialized('spectrumprofile', function() {
					$richtext.each(function() {
						if (window.Spectrum && Spectrum.Util && typeof Spectrum.Util.replaceClientContextVarsInElement === 'function') {
							Spectrum.Util.replaceClientContextVarsInElement($(this));
							$(this).find("a").each(function() {
								var linkValue = $(this).data('href');
								$(this).attr('href', linkValue);
							});
						}
						$(this).removeClass('hiddenRte hidden');
					})
				}, 0);
			}
		});
	}
	/* Images ==================================================================== */
	(function() {
		var imageDiv = document.getElementById("cq\-image\-jsp\-\/content\/spectrum\/residential\/fed\/tabbedComponent\/jcr:content\/content\/customwrapper_1027554266\/wrapper\-parsys\/tabbedcomponent\/parsys\/tabbedrow_1662321883\/tabbedContent\/image");
		var imageEvars = '{ imageLink: "", imageAsset: "/content/dam/residential/images/tv/premiums/sports/espn-full-court/2up with price/2up-price-conferences.jpg", imageTitle: "2up\-price\-conferences" }';
		var tagNodes = imageDiv.getElementsByTagName('A');
		for (var i = 0; i < tagNodes.length; i++) {
			var link = tagNodes.item(i);
			link.setAttribute('onclick', 'CQ_Analytics.record({event: "imageClick", values: ' + imageEvars + ', collect: false, options: { obj: this }, componentPath: "foundation/components/image"})');
		}
	})();
	(function() {
		var imageDiv = document.getElementById("cq\-image\-jsp\-\/content\/spectrum\/residential\/fed\/tabbedComponent\/jcr:content\/content\/customwrapper\/wrapper\-parsys\/tabbedcomponent\/parsys\/tabbedrow_1662321883\/tabbedContent\/image");
		var imageEvars = '{ imageLink: "", imageAsset: "/content/dam/residential/images/tv/premiums/sports/espn-full-court/2up with price/2up-price-conferences.jpg", imageTitle: "2up\-price\-conferences" }';
		var tagNodes = imageDiv.getElementsByTagName('A');
		for (var i = 0; i < tagNodes.length; i++) {
			var link = tagNodes.item(i);
			link.setAttribute('onclick', 'CQ_Analytics.record({event: "imageClick", values: ' + imageEvars + ', collect: false, options: { obj: this }, componentPath: "foundation/components/image"})');
		}
	})();
	(function() {
		var imageDiv = document.getElementById("cq\-image\-jsp\-\/content\/spectrum\/residential\/fed\/tabbedComponent\/jcr:content\/content\/customwrapper_1040676551\/wrapper\-parsys\/tabbedcomponent\/parsys\/tabbedrow_1662321883\/tabbedContent\/image");
		var imageEvars = '{ imageLink: "", imageAsset: "/content/dam/residential/images/tv/premiums/sports/espn-full-court/2up with price/2up-price-conferences.jpg", imageTitle: "2up\-price\-conferences" }';
		var tagNodes = imageDiv.getElementsByTagName('A');
		for (var i = 0; i < tagNodes.length; i++) {
			var link = tagNodes.item(i);
			link.setAttribute('onclick', 'CQ_Analytics.record({event: "imageClick", values: ' + imageEvars + ', collect: false, options: { obj: this }, componentPath: "foundation/components/image"})');
		}
	})();
	(function() {
		var imageDiv = document.getElementById("cq\-image\-jsp\-\/content\/spectrum\/residential\/fed\/tabbedComponent\/jcr:content\/content\/customwrapper_1040676552\/wrapper\-parsys\/tabbedcomponent\/parsys\/tabbedrow_1662321883\/tabbedContent\/image");
		var imageEvars = '{ imageLink: "", imageAsset: "/content/dam/residential/images/tv/premiums/sports/espn-full-court/2up with price/2up-price-conferences.jpg", imageTitle: "2up\-price\-conferences" }';
		var tagNodes = imageDiv.getElementsByTagName('A');
		for (var i = 0; i < tagNodes.length; i++) {
			var link = tagNodes.item(i);
			link.setAttribute('onclick', 'CQ_Analytics.record({event: "imageClick", values: ' + imageEvars + ', collect: false, options: { obj: this }, componentPath: "foundation/components/image"})');
		}
	})();
	</script>
</main>

<?php require($site['files']['site_footer']); //end base template ?>

