// @codekit-prepend "bx-slider.js", "fitvids.js", "lightbox.js" quiet;

/*global jQuery*/
(function ($) {
    "use strict";
    $(document).ready(function () {

        // Menu icon
        $('.js-menu-open').click(function() {
            $(this).toggleClass('open');
            $('.js-nav-toggle').toggleClass('open-mobile-menu');
            $('body').toggleClass('mobile-menu-open');
        });

        // Menu icon close
        $('.js-menu-close').click(function() {
            $(this).toggleClass('open');
            $('.js-nav-toggle').toggleClass('open-mobile-menu');
            $('body').toggleClass('mobile-menu-open');
        });

        // MOBILE MENU //
        $('.menu a').click(function() {
            $('.menu a').removeClass('active');
            $('.menu ul').removeClass('active-trail');
            $(this).addClass('active');
        });

        // Sub menu trigger
        $('.menu ul').parent('li').append('<span class="menu-trigger" aria-label="Åben undermenu"></span>');

        // Sub menu toggle
        $('.current_page_ancestor > .menu-trigger').addClass('active-trigger');
        $('.menu-trigger').click(function() {
            $(this).siblings('ul').slideToggle().toggleClass('mobile-sibling-open');
            $(this).toggleClass('active-trigger');
        });

        $('.sub-menu li:has(ul)').addClass('has-sub');

        // Video
        $('.video, .wp-block-embed__wrapper').fitVids();

        // Lightbox
        $('.lightbox-link').attr('data-lightbox', 'content-image');

        // Slider
        $(function(){
            $('.fader').bxSlider({
                mode: 'fade',
                auto: true,
                controls: false,
                pager: false,
                speed: 1200

            });
        });

        $(function(){
            $('.banner').bxSlider({
                mode: 'fade',
                auto: true,
                controls: false,
                pager: false,
                speed: 2000,
                touchEnabled: false

            });
        });

        
        $('.carousel').bxSlider({
            auto: true,
            autoHover: true,
            pager: false,
            shrinkItems: true,
            minSlides: 1,
            maxSlides: 9,
            slideWidth: 269,
            slideMargin: 20,
            moveSlides: 4,
            mode: 'horizontal',
            nextText: ' > ',
            prevText: ' < '
        });

});

}(jQuery));