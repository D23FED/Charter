<?php require($_SERVER['DOCUMENT_ROOT'].'/template/inc/header.php'); //begin base template ?>
<main class="container single-column-template">
	<div class="richtext">
		<div id="add-offers">
			<h2>Additional Offers</h2> </div>
		<script type="text/javascript">
			var ieVersion = "";
			if (typeof getIEVersion === 'function') {
				ieVersion = getIEVersion();
			}
			//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
			//IE handler for RTE in CIC tiles would be in expandable-tile.js
			if (!(jQuery('#add-offers').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
				jQuery(document).ready(function() {
					//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
					if (!jQuery('#add-offers').parents('.expandable_tile').length > 0) {
						if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
							jQuery('#add-offers').find('a.spectrum-tooltip').each(function() {
								Spectrum.Tooltip.init($(this))
							});
						}
					}
					var $aLink = jQuery('#add-offers').find('a[target="_blank"]');
					if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
						$aLink.newWindowLink();
					}
					var $richtext = jQuery('#add-offers.hiddenRte');
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
		</script>
	</div>
	<div class="accordionTableRow">
		<div data-id="cd31cf72-2874-4958-82cc-e05e660d45e5" class="accordion-table-row">
			<div class="row-header">
				<ul class="at-table 5-column">
					<li class="at-column expand-details">
						<div>
							<div class="image cq-analyzable parbase">
								<div id="cq-image-jsp-/content/twc/en/topgun-resi-single-column/jcr:content/content/accordiontablerow/column-1/column-parsys/image"><img src="/content/twc/en/topgun-resi-single-column/_jcr_content/content/accordiontablerow/column-1/column-parsys/image.img.png/1476368312940.png" alt="file" title="" class="cq-dd-image"> </div>
								<script type="text/javascript">
									(function() {
										var imageDiv = document.getElementById("cq\-image\-jsp\-\/content\/twc\/en\/topgun\-resi\-single\-column\/jcr:content\/content\/accordiontablerow\/column\-1\/column\-parsys\/image");
										var imageEvars = '{ imageLink: "", imageAsset: "", imageTitle: "" }';
										var tagNodes = imageDiv.getElementsByTagName('A');
										for (var i = 0; i < tagNodes.length; i++) {
											var link = tagNodes.item(i);
											link.setAttribute('onclick', 'CQ_Analytics.record({event: "imageClick", values: ' + imageEvars + ', collect: false, options: { obj: this }, componentPath: "foundation/components/image"})');
										}
									})();
								</script>
							</div>
						</div>
					</li>
					<li class="at-column ">
						<div>
							<div class="richtext">
								<div id="984d705a-a88b-4cde-b0c0-f60f90bef483">
									<h3><a href="#">TV Select + Internet</a></h3> </div>
								<script type="text/javascript">
									var ieVersion = "";
									if (typeof getIEVersion === 'function') {
										ieVersion = getIEVersion();
									}
									//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
									//IE handler for RTE in CIC tiles would be in expandable-tile.js
									if (!(jQuery('#984d705a-a88b-4cde-b0c0-f60f90bef483').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
										jQuery(document).ready(function() {
											//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
											if (!jQuery('#984d705a-a88b-4cde-b0c0-f60f90bef483').parents('.expandable_tile').length > 0) {
												if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
													jQuery('#984d705a-a88b-4cde-b0c0-f60f90bef483').find('a.spectrum-tooltip').each(function() {
														Spectrum.Tooltip.init($(this))
													});
												}
											}
											var $aLink = jQuery('#984d705a-a88b-4cde-b0c0-f60f90bef483').find('a[target="_blank"]');
											if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
												$aLink.newWindowLink();
											}
											var $richtext = jQuery('#984d705a-a88b-4cde-b0c0-f60f90bef483.hiddenRte');
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
								</script>
							</div>
						</div>
					</li>
					<li class="at-column expand-details">
						<div>
							<div class="richtext">
								<div id="36342dc9-a385-4b4a-8355-82f6159e7ddb">
									<!-- empty -->
								</div>
								<script type="text/javascript">
									var ieVersion = "";
									if (typeof getIEVersion === 'function') {
										ieVersion = getIEVersion();
									}
									//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
									//IE handler for RTE in CIC tiles would be in expandable-tile.js
									if (!(jQuery('#36342dc9-a385-4b4a-8355-82f6159e7ddb').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
										jQuery(document).ready(function() {
											//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
											if (!jQuery('#36342dc9-a385-4b4a-8355-82f6159e7ddb').parents('.expandable_tile').length > 0) {
												if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
													jQuery('#36342dc9-a385-4b4a-8355-82f6159e7ddb').find('a.spectrum-tooltip').each(function() {
														Spectrum.Tooltip.init($(this))
													});
												}
											}
											var $aLink = jQuery('#36342dc9-a385-4b4a-8355-82f6159e7ddb').find('a[target="_blank"]');
											if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
												$aLink.newWindowLink();
											}
											var $richtext = jQuery('#36342dc9-a385-4b4a-8355-82f6159e7ddb.hiddenRte');
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
								</script>
							</div>
						</div>
					</li>
					<li class="at-column ">
						<div>
							<div class="richtext">
								<div id="9e3d827c-6507-4e38-8e60-1d365f7c5fac">
									<p style="text-align: center;">from $59.99/mo for 12 mos.*
										<br> </p>
								</div>
								<script type="text/javascript">
									var ieVersion = "";
									if (typeof getIEVersion === 'function') {
										ieVersion = getIEVersion();
									}
									//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
									//IE handler for RTE in CIC tiles would be in expandable-tile.js
									if (!(jQuery('#9e3d827c-6507-4e38-8e60-1d365f7c5fac').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
										jQuery(document).ready(function() {
											//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
											if (!jQuery('#9e3d827c-6507-4e38-8e60-1d365f7c5fac').parents('.expandable_tile').length > 0) {
												if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
													jQuery('#9e3d827c-6507-4e38-8e60-1d365f7c5fac').find('a.spectrum-tooltip').each(function() {
														Spectrum.Tooltip.init($(this))
													});
												}
											}
											var $aLink = jQuery('#9e3d827c-6507-4e38-8e60-1d365f7c5fac').find('a[target="_blank"]');
											if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
												$aLink.newWindowLink();
											}
											var $richtext = jQuery('#9e3d827c-6507-4e38-8e60-1d365f7c5fac.hiddenRte');
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
								</script>
							</div>
						</div>
					</li>
					<li class="at-column ">
						<div>
							<div class="accordionTableExpander linkComponent">
								<div data-id="90c1d99a-a872-47ed-beb7-fcfc537f9f69" class="accordion-table-expander expand-details text-center ">
									<a target="_self" class="btn btn-default btn-lg">
										<div class="linkLabel ">See Details</div>
									</a>
								</div>
								<script>
									jQuery(document).ready(function() {
										jQuery('.accordion-table-expander[data-id="90c1d99a\-a872\-47ed\-beb7\-fcfc537f9f69"]').accordionTableExpander({
											expansionText: 'See Details',
											collapseText: 'Less Details'
										});
									});
								</script>
							</div>
							<div class="linkComponent">
								<div class="text-center ">
									<a href="https://www.charter.com/buyflow/buyflow-localization?adp=true&amp;offerType=select&amp;tvServiceFlag=true&amp;voiceServiceFlag=false&amp;dataServiceFlag=true&amp;" target="_blank" class="btn btn-primary " rel="noopener noreferrer">
										<div class="linkLabel "> Choose </div>
									</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="row-details" style="display: none;">
				<ul class="at-table">
					<li>
						<div class="aem-Grid aem-Grid--12">
							<div class="aem-GridColumn richtext">
								<div id="9328115d-a6be-460e-8ac0-cb47374d05e7">
									<h4>Spectrum TV Select</h4>
									<ul>
										<li><a href="#">125+&nbsp;channels</a>&nbsp;<b>Including FREE HD</b> </li>
										<li>Access 10,000+ On Demand choices - including HD and movies in 3D</li>
										<li>Stream live TV and On Demand content with the Spectrum TV App</li>
										<li>Access your favorite network TV apps</li>
										<li>Optional DVR service can be added on up to 4 TVs in your home – up to 780 hours of storage
											<br> </li>
									</ul>
								</div>
								<script type="text/javascript">
									var ieVersion = "";
									if (typeof getIEVersion === 'function') {
										ieVersion = getIEVersion();
									}
									//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
									//IE handler for RTE in CIC tiles would be in expandable-tile.js
									if (!(jQuery('#9328115d-a6be-460e-8ac0-cb47374d05e7').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
										jQuery(document).ready(function() {
											//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
											if (!jQuery('#9328115d-a6be-460e-8ac0-cb47374d05e7').parents('.expandable_tile').length > 0) {
												if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
													jQuery('#9328115d-a6be-460e-8ac0-cb47374d05e7').find('a.spectrum-tooltip').each(function() {
														Spectrum.Tooltip.init($(this))
													});
												}
											}
											var $aLink = jQuery('#9328115d-a6be-460e-8ac0-cb47374d05e7').find('a[target="_blank"]');
											if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
												$aLink.newWindowLink();
											}
											var $richtext = jQuery('#9328115d-a6be-460e-8ac0-cb47374d05e7.hiddenRte');
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
								</script>
							</div>
							<div class="new section aem-Grid-newComponent"> </div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<script>
			jQuery(document).ready(function() {
				jQuery('.accordion-table-row[data-id="cd31cf72\-2874\-4958\-82cc\-e05e660d45e5"]').accordionTableRow({
					detailsDisabled: false
				});
			});
		</script>
	</div>
	<div class="accordionTableRow">
		<div data-id="67cccc71-c7ac-4a0c-9642-d607b77fcc98" class="accordion-table-row">
			<div class="row-header">
				<ul class="at-table 5-column">
					<li class="at-column expand-details">
						<div>
							<div class="adaptiveimage image parbase">
								<script type="text/javascript" src="/libs/foundation/components/adaptiveimage/clientlibs.min.b1e1268b736660c3e0cebc4e59f29da4.js"></script>
								<div data-picture="" data-alt="">
									<div data-src="/content/twc/en/topgun-resi-single-column/jcr:content/content/Copy of accordiontablerow/column-1/column-parsys/adaptiveimage.img.320.low.png" data-media="(min-width: 1px)"></div>
									<div data-src="/content/twc/en/topgun-resi-single-column/jcr:content/content/Copy of accordiontablerow/column-1/column-parsys/adaptiveimage.img.320.medium.png" data-media="(min-width: 320px)"></div>
									<div data-src="/content/twc/en/topgun-resi-single-column/jcr:content/content/Copy of accordiontablerow/column-1/column-parsys/adaptiveimage.img.480.medium.png" data-media="(min-width: 321px)"></div>
									<div data-src="/content/twc/en/topgun-resi-single-column/jcr:content/content/Copy of accordiontablerow/column-1/column-parsys/adaptiveimage.img.476.high.png" data-media="(min-width: 481px)"></div>
									<div data-src="/content/twc/en/topgun-resi-single-column/jcr:content/content/Copy of accordiontablerow/column-1/column-parsys/adaptiveimage.img.620.high.png" data-media="(min-width: 769px)"></div>
									<div data-src="/content/twc/en/topgun-resi-single-column/jcr:content/content/Copy of accordiontablerow/column-1/column-parsys/adaptiveimage.img.full.high.png" data-media="(min-width: 1025px)"></div>
									<noscript> &lt;img src='/content/twc/en/topgun-resi-single-column/_jcr_content/content/Copy of accordiontablerow/column-1/column-parsys/adaptiveimage.img.320.low.png' alt=''&gt; </noscript> <img alt="" src="/content/twc/en/topgun-resi-single-column/jcr:content/content/Copy of accordiontablerow/column-1/column-parsys/adaptiveimage.img.full.high.png"> </div>
							</div>
						</div>
					</li>
					<li class="at-column ">
						<div>
							<div class="richtext">
								<div id="8a75dc55-0782-498c-97a2-008bf9454902">
									<h3><a href="#">Internet + Voice</a><a></a></h3>
									<a> </a>
								</div>
								<a>
									<script type="text/javascript">
										var ieVersion = "";
										if (typeof getIEVersion === 'function') {
											ieVersion = getIEVersion();
										}
										//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
										//IE handler for RTE in CIC tiles would be in expandable-tile.js
										if (!(jQuery('#8a75dc55-0782-498c-97a2-008bf9454902').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
											jQuery(document).ready(function() {
												//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
												if (!jQuery('#8a75dc55-0782-498c-97a2-008bf9454902').parents('.expandable_tile').length > 0) {
													if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
														jQuery('#8a75dc55-0782-498c-97a2-008bf9454902').find('a.spectrum-tooltip').each(function() {
															Spectrum.Tooltip.init($(this))
														});
													}
												}
												var $aLink = jQuery('#8a75dc55-0782-498c-97a2-008bf9454902').find('a[target="_blank"]');
												if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
													$aLink.newWindowLink();
												}
												var $richtext = jQuery('#8a75dc55-0782-498c-97a2-008bf9454902.hiddenRte');
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
									</script>
								</a>
							</div>
							<a> </a>
						</div>
						<a> </a>
					</li>
					<a>
						<li class="at-column expand-details">
							<div>
								<div class="richtext">
									<div id="f15e65d7-a830-459e-9ee9-b7644ebe9626">
										<p>Column 3</p>
									</div>
									<script type="text/javascript">
										var ieVersion = "";
										if (typeof getIEVersion === 'function') {
											ieVersion = getIEVersion();
										}
										//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
										//IE handler for RTE in CIC tiles would be in expandable-tile.js
										if (!(jQuery('#f15e65d7-a830-459e-9ee9-b7644ebe9626').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
											jQuery(document).ready(function() {
												//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
												if (!jQuery('#f15e65d7-a830-459e-9ee9-b7644ebe9626').parents('.expandable_tile').length > 0) {
													if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
														jQuery('#f15e65d7-a830-459e-9ee9-b7644ebe9626').find('a.spectrum-tooltip').each(function() {
															Spectrum.Tooltip.init($(this))
														});
													}
												}
												var $aLink = jQuery('#f15e65d7-a830-459e-9ee9-b7644ebe9626').find('a[target="_blank"]');
												if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
													$aLink.newWindowLink();
												}
												var $richtext = jQuery('#f15e65d7-a830-459e-9ee9-b7644ebe9626.hiddenRte');
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
									</script>
								</div>
							</div>
						</li>
						<li class="at-column ">
							<div>
								<div class="richtext">
									<div id="2ca5ceea-df0b-40bf-8d3c-20dab5638f8e">
										<p style="text-align: center;">from <b>$59.99</b>/mo <i>for 12 mos.*</i> </p>
									</div>
									<script type="text/javascript">
										var ieVersion = "";
										if (typeof getIEVersion === 'function') {
											ieVersion = getIEVersion();
										}
										//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
										//IE handler for RTE in CIC tiles would be in expandable-tile.js
										if (!(jQuery('#2ca5ceea-df0b-40bf-8d3c-20dab5638f8e').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
											jQuery(document).ready(function() {
												//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
												if (!jQuery('#2ca5ceea-df0b-40bf-8d3c-20dab5638f8e').parents('.expandable_tile').length > 0) {
													if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
														jQuery('#2ca5ceea-df0b-40bf-8d3c-20dab5638f8e').find('a.spectrum-tooltip').each(function() {
															Spectrum.Tooltip.init($(this))
														});
													}
												}
												var $aLink = jQuery('#2ca5ceea-df0b-40bf-8d3c-20dab5638f8e').find('a[target="_blank"]');
												if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
													$aLink.newWindowLink();
												}
												var $richtext = jQuery('#2ca5ceea-df0b-40bf-8d3c-20dab5638f8e.hiddenRte');
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
									</script>
								</div>
							</div>
						</li>
					</a>
					<li class="at-column ">
						<a> </a>
						<div>
							<a> </a>
							<div class="accordionTableExpander linkComponent">
								<a> </a>
								<div data-id="10041e2d-e194-4ee4-8e06-09e2ee7e2efb" class="accordion-table-expander expand-details text-center ">
									<a> </a>
									<a target="_self" class="btn btn-default btn-lg">
										<div class="linkLabel ">See Details</div>
									</a>
								</div>
								<script>
									jQuery(document).ready(function() {
										jQuery('.accordion-table-expander[data-id="10041e2d\-e194\-4ee4\-8e06\-09e2ee7e2efb"]').accordionTableExpander({
											expansionText: 'See Details',
											collapseText: 'Less Details'
										});
									});
								</script>
							</div>
							<div class="linkComponent">
								<div class="text-center ">
									<a href="https://www.charter.com/buyflow/buyflow-localization?adp=true&amp;offerType=select&amp;tvServiceFlag=true&amp;voiceServiceFlag=false&amp;dataServiceFlag=true&amp;" target="_blank" class="btn btn-primary " rel="noopener noreferrer">
										<div class="linkLabel "> Choose </div>
									</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="row-details" style="display: none;">
				<ul class="at-table">
					<li>
						<div class="aem-Grid aem-Grid--12">
							<div class="aem-GridColumn richtext">
								<div id="f42399b7-531e-4985-9e50-95cde8169b01">
									<p>DETAILS:&nbsp;</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam malesuada odio in turpis sodales viverra. Donec justo dui, porta maximus urna eget, tempor ornare mauris. Mauris ante turpis, pulvinar eget mauris non, tristique mattis ex. Nulla non lobortis diam, vel rhoncus turpis. Sed sed nisi feugiat leo euismod consequat a et erat. Aenean metus dolor, ultricies et egestas cursus, vestibulum a lacus. Etiam dignissim purus vitae nisl laoreet pellentesque. Morbi lacinia elementum magna, vel faucibus nisi aliquam nec. Praesent lobortis nulla ut ex aliquam, commodo finibus ligula ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum suscipit justo nec ornare. Donec maximus neque nulla, nec efficitur dui imperdiet a. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc dictum felis vitae laoreet convallis. Nulla id consectetur nunc.</p>
									<p>&nbsp;</p>
								</div>
								<script type="text/javascript">
									var ieVersion = "";
									if (typeof getIEVersion === 'function') {
										ieVersion = getIEVersion();
									}
									//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
									//IE handler for RTE in CIC tiles would be in expandable-tile.js
									if (!(jQuery('#f42399b7-531e-4985-9e50-95cde8169b01').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
										jQuery(document).ready(function() {
											//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
											if (!jQuery('#f42399b7-531e-4985-9e50-95cde8169b01').parents('.expandable_tile').length > 0) {
												if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
													jQuery('#f42399b7-531e-4985-9e50-95cde8169b01').find('a.spectrum-tooltip').each(function() {
														Spectrum.Tooltip.init($(this))
													});
												}
											}
											var $aLink = jQuery('#f42399b7-531e-4985-9e50-95cde8169b01').find('a[target="_blank"]');
											if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
												$aLink.newWindowLink();
											}
											var $richtext = jQuery('#f42399b7-531e-4985-9e50-95cde8169b01.hiddenRte');
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
								</script>
							</div>
							<div class="image cq-analyzable parbase aem-GridColumn">
								<div id="cq-image-jsp-/content/twc/en/topgun-resi-single-column/jcr:content/content/Copy of accordiontablerow/details-grid/image_copy"><img src="/content/twc/en/topgun-resi-single-column/_jcr_content/content/Copy%20of%20accordiontablerow/details-grid/image_copy.img.png/1476368312940.png" alt="file" title="" class="cq-dd-image"> </div>
								<script type="text/javascript">
									(function() {
										var imageDiv = document.getElementById("cq\-image\-jsp\-\/content\/twc\/en\/topgun\-resi\-single\-column\/jcr:content\/content\/Copy of accordiontablerow\/details\-grid\/image_copy");
										var imageEvars = '{ imageLink: "", imageAsset: "", imageTitle: "" }';
										var tagNodes = imageDiv.getElementsByTagName('A');
										for (var i = 0; i < tagNodes.length; i++) {
											var link = tagNodes.item(i);
											link.setAttribute('onclick', 'CQ_Analytics.record({event: "imageClick", values: ' + imageEvars + ', collect: false, options: { obj: this }, componentPath: "foundation/components/image"})');
										}
									})();
								</script>
							</div>
							<div class="image cq-analyzable parbase aem-GridColumn">
								<div id="cq-image-jsp-/content/twc/en/topgun-resi-single-column/jcr:content/content/Copy of accordiontablerow/details-grid/image_copy_1956878817"><img src="/content/twc/en/topgun-resi-single-column/_jcr_content/content/Copy%20of%20accordiontablerow/details-grid/image_copy_1956878817.img.png/1476368312940.png" alt="file" title="" class="cq-dd-image"> </div>
								<script type="text/javascript">
									(function() {
										var imageDiv = document.getElementById("cq\-image\-jsp\-\/content\/twc\/en\/topgun\-resi\-single\-column\/jcr:content\/content\/Copy of accordiontablerow\/details\-grid\/image_copy_1956878817");
										var imageEvars = '{ imageLink: "", imageAsset: "", imageTitle: "" }';
										var tagNodes = imageDiv.getElementsByTagName('A');
										for (var i = 0; i < tagNodes.length; i++) {
											var link = tagNodes.item(i);
											link.setAttribute('onclick', 'CQ_Analytics.record({event: "imageClick", values: ' + imageEvars + ', collect: false, options: { obj: this }, componentPath: "foundation/components/image"})');
										}
									})();
								</script>
							</div>
							<div class="new section aem-Grid-newComponent"> </div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<script>
			jQuery(document).ready(function() {
				jQuery('.accordion-table-row[data-id="67cccc71\-c7ac\-4a0c\-9642\-d607b77fcc98"]').accordionTableRow({
					detailsDisabled: false
				});
			});
		</script>
	</div>
	<div class="injectionContainer">
		<div class="htmlWrapper "> </div>
		<style type="text/css">
			.accordionTableRow:first-child {
				margin-top: 75px;
			}
			.accordionTableRow .row-header {
				background-size: 100% 40px;
				background-repeat: no-repeat;
				background-position: 0 -20px;
				border-top: 1px solid #c4c4c4;
				background-image: -webkit-radial-gradient(center, ellipse cover, rgba(0, 0, 0, .15) 0, rgba(0, 0, 0, 0) 70%);
				background-image: -ms-radial-gradient(center, ellipse cover, rgba(0, 0, 0, .15) 0, rgba(0, 0, 0, 0) 70%);
				background-image: radial-gradient(ellipse at center, rgba(0, 0, 0, .15) 0, rgba(0, 0, 0, 0) 70%);
			}
			.add-offers {
				font-size: 30px;
				font-family: open_sanslight, open_sansregular, "Helvetica Neue", Helvetica, Arial, sans-serif;
			}
			.accordionTableExpander {
				margin-bottom: 20px;
			}
		</style>
		<script type="text/javascript">
		</script>
	</div>
</main>
<?php require($site[ 'files'][ 'site_footer']); //end base template ?>
