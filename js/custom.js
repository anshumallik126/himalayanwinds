
$(window).scroll(function () {
    if ($(this).scrollTop() >= 300) {
        $('.scroll-to-top').addClass('top-arrow');
        $('.nav-section').addClass('onscroll');

    } else {
        $('.scroll-to-top').removeClass('top-arrow');
        $('.nav-section').removeClass('onscroll');
    }
});

$('.scroll-to-top').on('click', function () {
    $('body,html').animate({
        scrollTop: 0
    }, 2000, 'easeInOutQuint');
});

$('.home-slider .owl-carousel').owlCarousel({
    loop: true,
    autowidth: true,
    margin: 0,
    autoplay: true,
    mouseDrag: false,
    touchDrag: true,
    animateOut: 'fadeOut',
    items: 1,
    navText: ["<span class='fa fa-chevron-left'></span>", "<span class='fa fa-chevron-right'></span>"],
    onChanged: changed,
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots: true,
        },
        600: {
            items: 1,
            nav: false,
            dots: true,
        },
        1000: {
            items: 1,
            nav: false,
            dots: true,
        }
    }
});


function changed(event) {
    new WOW().init();
}

new WOW().init();


$('#menu-bar').click(function () {
    $('.nav-wrapper').addClass('toggle');
})

$('.nav-wrapper .close').click(function () {
    $('.nav-wrapper').removeClass('toggle');
})


$('.img-slider .owl-carousel').owlCarousel({
    loop: true,
    autoHeight: true,
    margin: 20,
    autoplay: true,
    autoplaySpeed: 3000,
    mouseDrag: true,
    touchDrag: true,
    items: 1,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1,
            dots: false,
        },
        600: {
            items: 2,
            dots: false,
        },
        1000: {
            items: 4,
            nav: false,
        }
    }
});

$('.testi_s.owl-carousel').owlCarousel({
    items: 1,
    autoplay: true,
    margin: 10,
    loop: true,
    dots: true,
    nav: true,
    navText: ["<span class='fas fa-long-arrow-alt-left'></span>", "<span class='fas fa-long-arrow-alt-right'></span>"],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
            nav: false,
        },
        768: {
            items: 1,
            nav: false,
        },
        1000: {
            items: 1,
        }
    }
});
