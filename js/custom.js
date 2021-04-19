"use strict";

$(document).ready(function() {
    $(".sv-slider").lightSlider({
        item: 1,
        autoWidth: false,
        slideMove: 1,
        slideMargin: 10,
        loop: true,
        auto: true,
        controls: false,
        onSliderLoad: function() {
            $(".sv-slider").removeClass('cs-hidden');
            
        },
    });

    $(".sv-brand-slider").lightSlider({
        item: 5,
        autoWidth: false,
        slideMove: 1,
        slideMargin: 10,
        loop: true, 
        auto: true,
        pager: false,
        controls: false, 

        responsive : [
            {
                breakpoint: 960,
                settings: {
                    item:3,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint: 480,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:6,
                  }
            }
        ]       
    });

    $('.sv-cat-slider-holder').each(function(){
       
        var slideCount = 4;
       
        var Lslider = $(this).lightSlider({
            item:slideCount,
            pager:false,
            loop: true,
            speed:600,
            auto: true,
            controls:false,
            onSliderLoad: function() {
            },
            responsive : [
                {
                    breakpoint:1024,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:768,
                    settings: {
                        item:2,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:1,
                        slideMove:1,
                      }
                }
            ]
        });

        $('.sv-prev').on('click', function(){
            Lslider.goToPrevSlide(); 
        });
        $('.sv-next').on('click', function(){
            Lslider.goToNextSlide(); 
        });

    });

    $(".sv-product-slider").lightSlider({
        item: 3,
        autoWidth: false,
        slideMove: 1,
        slideMargin: 1,
        loop: true, 
        auto: true,
        pager: false,
        controls: true,
        speed: 600,
        controls: false, 

        responsive : [

            {
                breakpoint: 1200,
                    settings: {
                    item:3,
                    slideMove:1
                  }
            },
            {
                breakpoint: 990,
                    settings: {
                    item:1,
                    slideMove:1
                  }
            },
            {
                breakpoint: 768,
                    settings: {
                    item:2,
                    slideMove:1
                  }
            },
            {
                breakpoint: 560,
                    settings: {
                    item:1,
                    slideMove:1
                  }
            },
        ]       
    });

    jQuery('ul.nav').superfish({
        delay: 100,
    });

    /* tab js */

    $(".nav-tabs a").on('click', function(){
        $(this).tab('show');
    });
 
    /* header toggle js */

    $(".h-toggle").on('click', function(){
        $("#header-wrap > .sv-top-left ").slideToggle();
    });
    $('.sv-image-gallery').lightSlider({
        gallery:true,
        item:1,
        loop:true,
        thumbItem:3,
        slideMargin:10,
        enableDrag: true,
        currentPagerPosition:'left',
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '.sv-image-gallery .lslide'
            });
        }   
    });
 });