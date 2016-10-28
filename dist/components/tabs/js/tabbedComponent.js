;(function($){
    "use strict";

    $.fn.tabbedComponent = function(opts) {
        return this.each(function() {
            var $tabbedComponent = $(this),
                $tabbedRow = $tabbedComponent.find('.tab-row'),
                $tabbedArrows = $tabbedRow.find('> ul > li'),
                $tabbedLabels = $tabbedRow.find('.tabbedLabel'),
                $tabbedContainer = $tabbedComponent.find('.tab-content-container'),
                hash = $.trim(window.location.hash),
                isSideTabbed = $tabbedComponent.parent().hasClass('side-tabs');

            function init() {
                $tabbedLabels.find('li').each(function(){
                    var $tabbedLabel = $(this),
                        $tabbedContent = $tabbedLabel.closest('.tabbedRow').find('.tabbedContent'),
                        id = $tabbedLabel.find('a').attr('data-ref').replace(/[#&<>"']+/g,'');

                    // Add the reference id from tab label as id attribute on tab content.
                    $tabbedContent.attr('id', id);

                    // Detach tab content from tabbedRow and append it to the tab content container, but do not
                    // detach content from tabbedRow in Side Tab + Mobile View to allow accordion behavior.
                    if (isSideTabSmallMediumView() === false) {
                        $tabbedContent.appendTo($tabbedContainer).show();
                    }
                });

                // Hide all tabbed content containers.
                $tabbedComponent.find('.tabbedContent').hide();

                // For linking to a specific tab via anchors, ex. example.com#TabIdValue
                if (hash != '' && $tabbedLabels.find('li' + hash).length > 0) {
                    $tabbedLabels.find('li' + hash).trigger('tap');
                } else {
                    $tabbedLabels.filter(':first').find('li:first').trigger('tap');
                }

                // Adjust tab component content between different breakpoints
                $(window).resize(resize);
            }

            function isSideTabSmallMediumView() {
                return isSideTabbed && (Spectrum.Util.isPageOnSmallView() || Spectrum.Util.isPageOnMediumView());
            }

            function clickTab() {
                var $tabLabel = $(this);

                if (isSideTabSmallMediumView()) {
                    if ($tabLabel.hasClass('js-active')) {
                        $tabbedRow.find('ul li.js-active').removeClass('js-active').parent().next().hide();
                    } else {
                        $tabbedRow.find('ul li.js-active').removeClass('js-active').parent().next().hide();
                        $tabLabel.closest('.tab-row ul li').addClass('js-active').parent().next('div').show();
                    }
                } else {
                    var tabReference = $tabLabel.closest('.tab-row ul li').find('a').attr('data-ref').replace(/[#&<>"']+/g,'');
                    $tabbedContainer.find('.tabbedContent').hide();
                    $tabbedContainer.find('#'+tabReference).show();
                    $tabbedRow.find('ul li').removeClass('js-active');
                    $tabLabel.closest('.tab-row ul li').addClass('js-active');
                }
                return false;
            }

            // Left carousel arrow
            function arrowLeft() {
                var $activeTab = $tabbedLabels.find('li.js-active').parent(),
                    activeIndex = $tabbedLabels.index($activeTab);
                if (activeIndex == 0) {
                    // First tab is already selected. Cycle around to last tab.
                    $tabbedLabels.last().find('li').trigger('tap');
                } else {
                    var $prevTab = $tabbedLabels.eq(activeIndex - 1);
                    $prevTab.find('li').trigger('tap');
                }
                return false;
            }

            // Right carousel arrow
            function arrowRight() {
                var $activeTab = $tabbedLabels.find('li.js-active').parent(),
                    activeIndex = $tabbedLabels.index($activeTab);
                if (activeIndex == ($tabbedLabels.length-1)) {
                    // Last tab is already selected. Cycle around to first tab.
                    $tabbedLabels.first().find('li').trigger('tap');
                } else {
                    var $nextTab = $tabbedLabels.eq(activeIndex + 1);
                    $nextTab.find('li').trigger('tap');
                }
                return false;
            }

            function resize() {
                if (isSideTabSmallMediumView()) {
                    // Move tab content divs out of container and insert each immediately after corresponding label.
                    $tabbedContainer.children().each(function(index){
                        var $tabbedContent = $(this);
                        $tabbedContent.insertAfter($tabbedLabels.find('li').eq(index).parent());
                    });
                    $tabbedLabels.find('li.js-active').parent().next('div').show();
                    $tabbedContainer.find('.tabbedContent').hide();
                } else {
                    // Detach tab content divs and append them to the content container.
                    $tabbedLabels.find('li').each(function(){
                        var $tabbedLabel = $(this),
                            $tabbedContent = $tabbedLabel.closest('.tabbedRow').find('.tabbedContent');
                        $tabbedContent.appendTo($tabbedContainer).show();
                    });

                    // If accordion tabs were collapsed, no tab will be select. Select first tab.
                    if ($tabbedLabels.find('li.js-active').length === 0) {
                        $tabbedLabels.filter(':first').find('li:first').addClass('js-active');
                    }

                    var tabReference = $tabbedLabels.find('li.js-active a').attr('data-ref').replace(/[#&<>"']+/g,'');
                    $tabbedLabels.find('li.js-active').parent().next('div').hide();
                    $tabbedContainer.find('.tabbedContent').hide();
                    $tabbedContainer.find('#'+tabReference).show();
                }
            }

            // Setup tap listeners
            $tabbedLabels.on('tap', 'li', clickTab);
            $tabbedArrows.first().on('tap', arrowLeft);
            $tabbedArrows.last().on('tap', arrowRight);

            // Initialize tabs (if wcmmode is not edit or design)
            if (!Spectrum.Util.isEditOrDesignMode()) {
                init();
            }
        });
    }
})(jQuery);
