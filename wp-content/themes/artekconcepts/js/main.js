(function (jQuery) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if (jQuery('#spinner').length > 0) {
                jQuery('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 300) {
            jQuery('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            jQuery('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 300) {
            jQuery('.back-to-top').fadeIn('slow');
        } else {
            jQuery('.back-to-top').fadeOut('slow');
        }
    });
    jQuery('.back-to-top').click(function () {
        jQuery('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    jQuery('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Date and time picker
    // jQuery('.date').datetimepicker({
    //     format: 'L'
    // });
    // jQuery('.time').datetimepicker({
    //     format: 'LT'
    // });


    // Header carousel
    jQuery(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        loop: true,
        nav: false,
        dots: true,
        items: 1,
        dotsData: true,
    });


    // Testimonials carousel
    jQuery('.testimonial-carousel').owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        loop: true,
        nav: false,
        dots: true,
        items: 1,
        dotsData: true,
    });

    
})(jQuery);

