// Breakpoints
var smallBreakPoint = 768;
var mediumBreakPoint = 992;
var largeBreakPoint = 1200;

var Spectrum = Spectrum || {};
Spectrum.Util = Spectrum.Util || (function() {
    return {
        /* WCM Mode */
        isEditMode : function() {
            var classicUI = CQ.WCM && CQ.WCM.isEditMode(),
                touchUI = Granite && Granite.author && document.cookie && document.cookie.indexOf('wcmmode=edit') > -1;
            return classicUI || touchUI;
        },
        isDesignMode : function() {
            var classicUI = CQ.WCM && CQ.WCM.isDesignMode(),
                touchUI = Granite && Granite.author && document.cookie && document.cookie.indexOf('wcmmode=design') > -1;
            return classicUI || touchUI;
        },
        isEditOrDesignMode : function() {
            return this.isEditMode() || this.isDesignMode();
        },

        /* Breakpoints: Based on Booktstrap breakpoints */
        getCurrentBreakpoint : function() {
            var width = window.innerWidth;
            if (width < smallBreakPoint)
                return "small";

            if (width >= smallBreakPoint && width < mediumBreakPoint)
                return "medium";

            if (width >= mediumBreakPoint && width < largeBreakPoint)
                return "large"; // Medium Desktop

            return 'extra large'; // Large Desktop
        },
        isPageOnSmallView : function() {
           return window.innerWidth < smallBreakPoint;
        },
        isPageOnMediumView : function() {
           return window.innerWidth >= smallBreakPoint && window.innerWidth < mediumBreakPoint;
        },
        isPageOnLargeView : function() {
           return window.innerWidth >= mediumBreakPoint;
        },

        /* Cookie helpers */
        hasCookie : function(cookieName) {
            return new RegExp("(^|;\\s*)" + cookieName + "=").test(document.cookie);
        },
        getCookieValue : function(cookieName) {
            // based on https://developer.mozilla.org/en-US/docs/Web/API/Document/cookie
            if (!cookieName) {
                return null;
            }
            var encodedName = encodeURIComponent(cookieName).replace(/[\-\.\+\*]/g, "\\$&");
            var value = decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodedName + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
            // version 1 cookies may embed the value in quotes so strip them
            if (/^["']/.test(value) && value.length > 1) {
                value = value.substring(1, value.length - 1);
            }

            return value;
        },

        /* Query parameter helpers */
        getURLParameter : function(name) {
            // https://stackoverflow.com/questions/11582512/how-to-get-url-parameters-with-javascript/11582513
            return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) ||
                [null, ''])[1].replace(/\+/g, '%20')) || null;
        }
    };
}());
