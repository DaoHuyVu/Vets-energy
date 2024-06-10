jQuery(document).ready(function () {
    jQuery('#home .list-article.slide-1 .owl-carousel').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: [
            '<div class="button"><i class="far fa-chevron-left"></i></div>',
            '<div class="button"><i class="far fa-chevron-right"></i></div>'
        ],
        margin: 10,
        autoplay: true,
        autoplayTimeout: 6000,
        smartSpeed: 1000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            575: {
                items: 2,
            },
            991: {
                items: 3,
            }
        }
    });

    jQuery('#home .list-article.slide-2 .owl-carousel').owlCarousel({
        loop: true,
        dots: true,
        nav: false,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 6000,
        smartSpeed: 1000,
        items: 1
    });

    jQuery('#header .btn-open-search').click(function (e) {
        e.preventDefault();
        jQuery('.header-main-right').addClass('action-search');
    });
    jQuery('#header .btn-close-search').click(function (e) {
        e.preventDefault();
        jQuery('.header-main-right').removeClass('action-search');
    });

    jQuery('#header .btn-open-menu').click(function (e) {
        e.preventDefault();

        jQuery('body').addClass('show-overlay');
        jQuery('#menu-mobile').addClass('show');
    });

    jQuery('.overlay', jQuery('#menu-mobile')).click(function () {
        jQuery('#menu-mobile .btn-close-menu').trigger('click');
    });

    jQuery('#menu-mobile .btn-close-menu').click(function (e) {
        e.preventDefault();

        jQuery('body').removeClass('show-overlay');
        jQuery('#menu-mobile').removeClass('show');
        setTimeout(function () {
            jQuery('#menu-mobile .menu').removeClass('show-child');
        }, 500);
    });

    // setTimeout(function () {
    //     jQuery('#header .btn-open-menu').trigger('click');
    // }, 1500);

    jQuery('#menu-mobile .btn-open-menu-child').click(function (e) {
        e.preventDefault();

        let url = jQuery(this).attr('href');
        if (url != '#') {
            window.location.href = url;
            return;
        }
        
        jQuery('#menu-mobile .menu').addClass('show-child');

        let hasChild = jQuery(this).closest('.has-child');
        hasChild.addClass('show');
    });

    jQuery('#menu-mobile .btn-close-menu-child').click(function (e) {
        e.preventDefault();
        
        jQuery('#menu-mobile .menu').removeClass('show-child');
        jQuery('.has-child').removeClass('show');
    });
    jQuery('.hotline-phone-ring-wrapper').click(function (e){

        jQuery('.hotline-modal-wrapper').css({
            'width' : '220',
            'height' : '141'
        });

    })
    jQuery('.hotline-modal-wrapper__btn-close').click(function(e){
        jQuery('.hotline-modal-wrapper').css({
            'width' : '0',
            'height' : '0'
        });
    })
}); 
