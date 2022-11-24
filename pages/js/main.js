var mySwiper = new Swiper ('.swiper-container',
    {
        speed:1000,
        direction: 'horizontal',
        navigation:
            {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        pagination:
            {
                el: '.swiper-pagination',
                dynamicBullets: true,
            },
        zoom: false,

        autoplay:
            {
                delay: 5000,
            },
        loop: true,
    });
$(document).ready(function () {
    $('.slider1').slick({
        arrows: false,
        rtl: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        autoplay: true,
        responsive: [
            {
                breakpoint: 568,
                settings: {
                    dots: true,
                    autoplay: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            },
            {
                breakpoint: 992,
                settings: {
                    dots: true,
                    autoplay: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            },
            {
                breakpoint: 1920,
                settings: {
                    dots: true,
                    autoplay: true,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
        ]
    });
    $('.slider_azadari').slick({
        arrows: false,
        rtl: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        autoplay: true,
        responsive: [
            {
                breakpoint: 568,
                settings: {
                    dots: true,
                    autoplay: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            },
            {
                breakpoint: 992,
                settings: {
                    dots: true,
                    autoplay: true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false
                }
            },
            {
                breakpoint: 1920,
                settings: {
                    dots: true,
                    autoplay: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
        ]
    });

    $('.slider22').slick({
        nextArrow:'.nex4st',
        prevArrow:'.prev4st',
        dots: false,
        rtl:true,
        arrow:true,
        autoplay:true,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 568,
                settings: {
                    dots: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrow:true,
                    autoplay:true,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrow:true,
                    dots: false,
                }
            },
            {
                breakpoint: 1920,
                settings: {
                    dots: false,
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    arrow:true,
                    autoplay:true,
                }
            }
        ]
    });

    $('.slider66').slick({
        rtl: true,
        arrows: true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true
    });
    $('.slider2').slick({
        arrows: false,
        rtl: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        autoplay: true,
        responsive: [
            {
                breakpoint: 568,
                settings: {
                    dots: true,
                    autoplay: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            },
            {
                breakpoint: 992,
                settings: {
                    dots: true,
                    autoplay: true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false
                }
            },
            {
                breakpoint: 1920,
                settings: {
                    dots: true,
                    autoplay: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
        ]
    });
    $('[data-toggle="tooltip"]').tooltip();
});
