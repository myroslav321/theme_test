// ########## general.js ###########

(function($) {
    'use strict';

    // document load event
    $(document).ready(function() {

        // Image Lightbox
        // initialize simpleLightbox when document ready
        // https://github.com/andreknieriem/simplelightbox
        $('.lightbox').simpleLightbox({
            captionType: 'data',
            captionsData: 'caption',
            captionPosition: 'outside',
            heightRatio: 0.6
        });

        $('.js__icon-text-color__dotdotdot').dotdotdot({
            ellipsis:"...",
            wrap:"word",
            height: 120
        });
    });

})(jQuery);

// ^^^^^^^^^^ general.js ^^^^^^^^^^^
