window.$ = window.jQuery = require('jquery');

(function() {
    "use strict";

    /**
     * Track outbound links in Google Analytics
     * Adapted from: https://www.sitepoint.com/track-outbound-links-google-analytics/
     */
    $('a').on('click', function(e) {
        var link = $(this);

        // Link already aborted?
        if (e.isDefaultPrevented() || typeof ga !== "function") return;
        if (link.length != 1 || window.location.host == link[0].host) return;

        // Record outbound link
        e.preventDefault();
        var href = link[0].href;
        ga('send', 'event', 'outbound', 'link', href, {
            'hitCallback': loadPage
        });

        // Redirect after one millisecond
        setTimeout(loadPage, 100);

        // Redirect to outbound page
        function loadPage() {
            document.location = href;
        }

    });
})(jQuery);
