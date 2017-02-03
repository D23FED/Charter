<!-- Custom page footer -->
<?php // script_tag('example.js'); ?>

<script type="text/javascript">
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#061d0fa8-2521-4287-953a-23e14b1c75ff').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#061d0fa8-2521-4287-953a-23e14b1c75ff').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#061d0fa8-2521-4287-953a-23e14b1c75ff').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#061d0fa8-2521-4287-953a-23e14b1c75ff').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#061d0fa8-2521-4287-953a-23e14b1c75ff.hiddenRte');
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
<script>
	jQuery(document).ready(function() {
		jQuery('#2ebd07c6-2b5a-46bd-9bae-cb2162c92577').accordionComponent({
			"isClickable": false
		});
	});
</script>
<script type="text/javascript">
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#567b3961-84ab-4f56-b699-6da654d9ec29').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#567b3961-84ab-4f56-b699-6da654d9ec29').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#567b3961-84ab-4f56-b699-6da654d9ec29').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#567b3961-84ab-4f56-b699-6da654d9ec29').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#567b3961-84ab-4f56-b699-6da654d9ec29.hiddenRte');
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
<script type="text/javascript">
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#1fdc2459-a423-45c4-b123-e167807b771b').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#1fdc2459-a423-45c4-b123-e167807b771b').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#1fdc2459-a423-45c4-b123-e167807b771b').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#1fdc2459-a423-45c4-b123-e167807b771b').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#1fdc2459-a423-45c4-b123-e167807b771b.hiddenRte');
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
<script type="text/javascript">
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#03f3e5cc-a047-42d4-bd4d-130632d5a0a0').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#03f3e5cc-a047-42d4-bd4d-130632d5a0a0').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#03f3e5cc-a047-42d4-bd4d-130632d5a0a0').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#03f3e5cc-a047-42d4-bd4d-130632d5a0a0').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#03f3e5cc-a047-42d4-bd4d-130632d5a0a0.hiddenRte');
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
<script type="text/javascript">
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#26349908-2d4f-4d6b-9630-113cfd3761f0').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#26349908-2d4f-4d6b-9630-113cfd3761f0').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#26349908-2d4f-4d6b-9630-113cfd3761f0').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#26349908-2d4f-4d6b-9630-113cfd3761f0').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#26349908-2d4f-4d6b-9630-113cfd3761f0.hiddenRte');
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
<script type="text/javascript">
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#78c2b9d4-dc7b-498d-b2d2-c183fba03267').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#78c2b9d4-dc7b-498d-b2d2-c183fba03267').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#78c2b9d4-dc7b-498d-b2d2-c183fba03267').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#78c2b9d4-dc7b-498d-b2d2-c183fba03267').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#78c2b9d4-dc7b-498d-b2d2-c183fba03267.hiddenRte');
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
<script type="text/javascript">
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#567b3961-84ab-4f56-b699-6da654d9ec29').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#567b3961-84ab-4f56-b699-6da654d9ec29').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#567b3961-84ab-4f56-b699-6da654d9ec29').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#567b3961-84ab-4f56-b699-6da654d9ec29').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#567b3961-84ab-4f56-b699-6da654d9ec29.hiddenRte');
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
<script type="text/javascript">
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#99396d1e-a3a0-46cb-b9a6-7a9fcad0a6fe').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#99396d1e-a3a0-46cb-b9a6-7a9fcad0a6fe').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#99396d1e-a3a0-46cb-b9a6-7a9fcad0a6fe').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#99396d1e-a3a0-46cb-b9a6-7a9fcad0a6fe').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#99396d1e-a3a0-46cb-b9a6-7a9fcad0a6fe.hiddenRte');
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
<script>
	jQuery(document).ready(function() {
		jQuery('#289020af-0e61-42bf-8697-142221fdf94c').accordionComponent({
			"isClickable": false
		});
	});
</script>
<script type="text/javascript">
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#8e994467-3ea3-46e4-95c5-2cbe6563518f').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#8e994467-3ea3-46e4-95c5-2cbe6563518f').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#8e994467-3ea3-46e4-95c5-2cbe6563518f').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#8e994467-3ea3-46e4-95c5-2cbe6563518f').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#8e994467-3ea3-46e4-95c5-2cbe6563518f.hiddenRte');
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
<script type="text/javascript">
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#c2685add-1854-4f2f-98c1-5d654e86a596').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#c2685add-1854-4f2f-98c1-5d654e86a596').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#c2685add-1854-4f2f-98c1-5d654e86a596').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#c2685add-1854-4f2f-98c1-5d654e86a596').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#c2685add-1854-4f2f-98c1-5d654e86a596.hiddenRte');
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
<script type="text/javascript">
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#e4761e66-8658-41b1-9121-74882f49814f').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#e4761e66-8658-41b1-9121-74882f49814f').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#e4761e66-8658-41b1-9121-74882f49814f').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#e4761e66-8658-41b1-9121-74882f49814f').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#e4761e66-8658-41b1-9121-74882f49814f.hiddenRte');
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
<script type="text/javascript">
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#d503886a-4cb0-4119-842f-b043f75fa7fa').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#d503886a-4cb0-4119-842f-b043f75fa7fa').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#d503886a-4cb0-4119-842f-b043f75fa7fa').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#d503886a-4cb0-4119-842f-b043f75fa7fa').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#d503886a-4cb0-4119-842f-b043f75fa7fa.hiddenRte');
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
<script>
	jQuery(document).ready(function() {
		jQuery('#a8453ce4-4d90-4a1a-b016-f9dbcc418db5').accordionComponent({
			"isClickable": false
		});
	});
</script>
<script type="text/javascript">
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#adf65f30-1d90-451d-a9c4-193475c48aeb').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#adf65f30-1d90-451d-a9c4-193475c48aeb').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#adf65f30-1d90-451d-a9c4-193475c48aeb').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#adf65f30-1d90-451d-a9c4-193475c48aeb').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#adf65f30-1d90-451d-a9c4-193475c48aeb.hiddenRte');
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
<script type="text/javascript">
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#cfde09fa-ec4e-4f9a-9115-4ba6fdb9a02b').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#cfde09fa-ec4e-4f9a-9115-4ba6fdb9a02b').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#cfde09fa-ec4e-4f9a-9115-4ba6fdb9a02b').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#cfde09fa-ec4e-4f9a-9115-4ba6fdb9a02b').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#cfde09fa-ec4e-4f9a-9115-4ba6fdb9a02b.hiddenRte');
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
<script type="text/javascript">
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#2d46a9d0-6726-45d1-b08a-7f874906c592').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#2d46a9d0-6726-45d1-b08a-7f874906c592').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#2d46a9d0-6726-45d1-b08a-7f874906c592').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#2d46a9d0-6726-45d1-b08a-7f874906c592').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#2d46a9d0-6726-45d1-b08a-7f874906c592.hiddenRte');
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
<script type="text/javascript">
	var ieVersion = "";
	if (typeof getIEVersion === 'function') {
		ieVersion = getIEVersion();
	}
	//Prevent this from running, when included in CIC tiles and Browser is IE 8 and IE 11
	//IE handler for RTE in CIC tiles would be in expandable-tile.js
	if (!(jQuery('#9fab386a-b38a-4d15-a8d5-45ba3514501e').parents('.expandable_tile').length > 0 && (ieVersion >= 8 && ieVersion <= 11))) {
		jQuery(document).ready(function() {
			//Don't use the RTE initialization for Tooltips if the RTE is used in CIC Tiles
			if (!jQuery('#9fab386a-b38a-4d15-a8d5-45ba3514501e').parents('.expandable_tile').length > 0) {
				if (window.Spectrum && Spectrum.Tooltip && typeof Spectrum.Tooltip.init === 'function') {
					jQuery('#9fab386a-b38a-4d15-a8d5-45ba3514501e').find('a.spectrum-tooltip').each(function() {
						Spectrum.Tooltip.init($(this))
					});
				}
			}
			var $aLink = jQuery('#9fab386a-b38a-4d15-a8d5-45ba3514501e').find('a[target="_blank"]');
			if ($aLink && $aLink.length > 0 && typeof $aLink.newWindowLink === 'function') {
				$aLink.newWindowLink();
			}
			var $richtext = jQuery('#9fab386a-b38a-4d15-a8d5-45ba3514501e.hiddenRte');
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
