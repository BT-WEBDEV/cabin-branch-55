(function ($) {
    $(document).ready(function () {

        // new WOW().init();

        $('.third-button').on('click dblclick', function () {
            $('.animated-icon3').toggleClass('open');
            $('.custom-navbar').toggleClass('nav-black');
        });

        // Add Class When Scrolls
        var nav = $('.custom-navbar');
        var top = 20;
        
        $(window).scroll(function () {
            if ($(window).scrollTop() >= top) {
                nav.addClass('shrink');
            } else {
                nav.removeClass('shrink');
            }
        });
        if ($(window).scrollTop() >= 10) {
            nav.addClass('shrink');
        }

        // Swiper
        var gkaThemeSlider = new Swiper('.gka-theme-swiper-container', {
            autoplay: {
                delay: 7000,
            },
            loop: true,
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1200: {
                    allowTouchMove: false,
                }
            }
        });

    }); /* Document Ready End */
})(jQuery);










