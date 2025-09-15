'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    //Canvas Menu
    $(".canvas___open").on('click', function () {
        $(".offcanvas___menu___wrapper").addClass("show___offcanvas___menu");
        $(".offcanvas___menu___overlay").addClass("active");
    });

    $(".canvas___close, .offcanvas___menu___overlay").on('click', function () {
        $(".offcanvas___menu___wrapper").removeClass("show___offcanvas___menu");
        $(".offcanvas___menu___overlay").removeClass("active");
    });

    /*------------------
        Accordin Active
    --------------------*/
    $('.collapse').on('shown.bs.collapse', function () {
        $(this).prev().addClass('active');
    });

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).prev().removeClass('active');
    });

    /*------------------
        Navigation
    --------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*------------------
        Carousel Slider
    --------------------*/
    var hero_s = $(".hero___slider");
    hero_s.owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true
    });

    /*------------------
        Testimonial Slider
    --------------------*/
    $(".testimonial___slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 3,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            320: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            }
        }
    });

    /*------------------
        Brand Slider
    --------------------*/
    $(".brand___slider").owlCarousel({
        loop: true,
        margin: 20,
        items: 6,
        dots: true,
        smartSpeed: 1000,
        autoHeight: false,
        autoplay: true,
        responsive: {
            320: {
                items: 2,
            },
            768: {
                items: 4,
            },
            992: {
                items: 6,
            }
        }
    });

    /*------------------
        Radio btn
    --------------------*/
    $(".pricing___swipe-btn label").on('click', function (e) {
        $(".pricing___swipe-btn label").removeClass("active");
        $(this).addClass("active");

        if (e.target.htmlFor == 'month') {
            $(".yearly___plans").removeClass('active');
            $(".monthly___plans").addClass('active');
        } else if (e.target.htmlFor == 'yearly') {
            $(".monthly___plans").removeClass('active');
            $(".yearly___plans").addClass('active');
        }
    });
    /*------------------
        Achieve Counter
    --------------------*/
    $('.achieve-counter').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

})(jQuery);