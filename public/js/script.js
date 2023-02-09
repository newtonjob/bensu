(function($) {
    
    "use strict";
    function preloaderLoad() {
        if($('.preloader').length){
            $('.preloader').delay(200).fadeOut(300);
        }
        $(".preloader_disabler").on('click', function() {
            $("#preloader").hide();
        });
    }

    /* ----- Navbar Scroll To Fixed ----- */
    function navbarScrollfixed() {
        $('.navbar-scrolltofixed').scrollToFixed();
        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];
            summary.scrollToFixed({
                marginTop: $('.navbar-scrolltofixed').outerHeight(true) + 10,
                limit: function() {
                    var limit = 0;
                    if (next) {
                        limit = $(next).offset().top - $(this).outerHeight(true) - 10;
                    } else {
                        limit = $('.footer').offset().top - $(this).outerHeight(true) - 10;
                    }
                    return limit;
                },
                zIndex: 999
            });
        });
    }

    /** Main Menu Custom Script Start **/
    $(document).on('ready', function() {
        $("#respMenu").aceResponsiveMenu({
            resizeWidth: '768', // Set the same in Media query
            animationSpeed: 'fast', //slow, medium, fast
            accoridonExpAll: false //Expands all the accordion menu on click
        });
    });    

    function mobileNavToggle() {
        if ($('#main-nav-bar .navbar-nav .sub-menu').length) {
            var subMenu = $('#main-nav-bar .navbar-nav .sub-menu');
            subMenu.parent('li').children('a').append(function () {
                return '<button class="sub-nav-toggler"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>';
            });
            var subNavToggler = $('#main-nav-bar .navbar-nav .sub-nav-toggler');
            subNavToggler.on('click', function () {
                var Self = $(this);
                Self.parent().parent().children('.sub-menu').slideToggle();
                return false;
            });

        };
    }

    /* ----- This code for menu ----- */
    $(window).on('scroll', function() {
        if ($('.scroll-to-top').length) {
            var strickyScrollPos = 100;
            if ($(window).scrollTop() > strickyScrollPos) {
                $('.scroll-to-top').fadeIn(500);
            } else if ($(this).scrollTop() <= strickyScrollPos) {
                $('.scroll-to-top').fadeOut(500);
            }
        };
        if ($('.stricky').length) {
            var headerScrollPos = $('.header-navigation').next().offset().top;
            var stricky = $('.stricky');
            if ($(window).scrollTop() > headerScrollPos) {
                stricky.removeClass('slideIn animated');
                stricky.addClass('stricky-fixed slideInDown animated');
            } else if ($(this).scrollTop() <= headerScrollPos) {
                stricky.removeClass('stricky-fixed slideInDown animated');
                stricky.addClass('slideIn animated');
            }
        };
    });
    
    $(".mouse_scroll").on('click', function() {
        $('html, body').animate({
            scrollTop: $("#feature-property, #property-city").offset().top
        }, 1000);
    });
    /** Main Menu Custom Script End **/


    function makeTimer() {
    //  var endTime = new Date("20 Dec 2021 9:56:00 GMT+01:00");  
        var endTime = new Date("20 Jun 2023 9:56:00 GMT+01:00");      
        endTime = (Date.parse(endTime) / 1000);
        var now = new Date();
        now = (Date.parse(now) / 1000);
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400); 
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));  
        if (hours < "10") { hours = "0" + hours; }
        if (minutes < "10") { minutes = "0" + minutes; }
        if (seconds < "10") { seconds = "0" + seconds; }
        $(".days").html(days + "<span>Days</span>");
        $(".hours").html(hours + "<span>Hours</span>");
        $(".minutes").html(minutes + "<span>Minutes</span>");
        $(".seconds").html(seconds + "<span>Seconds</span>");
    }
    setInterval(function() { makeTimer(); }, 1000);
    
    /* ----- Blog innerpage sidebar according ----- */
    $(document).on('ready', function() {
        $('.collapse').on('show.bs.collapse', function () {
            $(this).siblings('.card-header').addClass('active');
        });
        $('.collapse').on('hide.bs.collapse', function () {
            $(this).siblings('.card-header').removeClass('active');
        });
        
    });
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    /* ----- Menu Cart Button Dropdown ----- */
    $(document).on('ready', function() {
        // Loop through each nav item
        $('.cart_btn').children('ul.cart').children('li').each(function(indexCount){
            // loop through each dropdown, count children and apply a animation delay based on their index value
            $(this).children('ul.dropdown_content').children('li').each(function(index){
                // Turn the index value into a reasonable animation delay
                var delay = 0.1 + index*0.03;
                // Apply the animation delay
                $(this).css("animation-delay", delay + "s")
            });
        });
    });

    /* ----- Mobile Nav ----- */
    $(function() {
        $('nav#menu').mmenu();
    });
    
    /* ----- Candidate SIngle Page Price Slider ----- */
    $(function() {
        $("#slider-range").slider({
            range: true,
            min: 50,
            max: 150,
            values: [ 50, 120 ],
            slide: function( event, ui ) {
                $("#amount").val("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1) );
    });

    /* ----- Employee List v1 page range slider widget ----- */
    $(document).on('ready', function() {
        $(".slider-range").slider({
            range: true,
            min: 0,
            max: 100000,
            values: [ 20, 70987 ],
            slide: function( event, ui ) {
                $( ".amount" ).val( ui.values[ 0 ] );
                $( ".amount2" ).val( ui.values[ 1 ] );
            }
        });
        $(".amount").change(function() {
            $(".slider-range").slider('values',0,$(this).val());
        });
        $(".amount2").change(function() {
            $(".slider-range").slider('values',1,$(this).val());
        });
    });

    /* ----- Pricing Range Slider ----- */
    $(document).on("ready", function() {
        $(".range-example-km").asRange({
          limit: false,
          min: 0,
          max: 150,
          range: false,
          step: 1,
          value: 50,
          format: function(value) {
              return value + '';
          }
        });
        $(".range-uilayouts").asRange({
            limit: false,
            max: 1000,
            min: 0,
            range: true,
            step: 1,
              format: function(value) {
                return '$' + value;
              }
        });
    });


    /* ----- Progress Bar ----- */
    if($('.progress-levels .progress-box .bar-fill').length){
        $(".progress-box .bar-fill").each(function() {
            var progressWidth = $(this).attr('data-percent');
            $(this).css('width',progressWidth+'%');
            $(this).children('.percent').html(progressWidth+'%');
        });
    }

    /* ----- MagnificPopup ----- */
    if (($(".popup-img").length > 0) || ($(".popup-iframe").length > 0) || ($(".popup-img-single").length > 0)) {
        $(".popup-img").magnificPopup({
            type:"image",
            gallery: {
                enabled: true,
            }
        });
        $(".popup-img-single").magnificPopup({
            type:"image",
            gallery: {
                enabled: false,
            }
        });
        $('.popup-iframe').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            preloader: false,
            fixedContentPos: false
        });
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,
          fixedContentPos: false
        });
    };

    /*** ====  Right Side Hidden Sidebar Start ==== ***/
    //Side Content Toggle
    if($('.signin-filter-btn').length){
      //Show Form
      $('.signin-filter-btn').on('click', function(e) {
        e.preventDefault();
        $('body').addClass('signin-hidden-sidebar-content');
      });
      //Hide Form
      $('.sidebar-close-icon,.hiddenbar-body-ovelay').on('click', function(e) {
        e.preventDefault();
        $('body').removeClass('signin-hidden-sidebar-content');
      });
    } 

    if($('.signup-filter-btn').length){
      //Show Form
      $('.signup-filter-btn').on('click', function(e) {
        e.preventDefault();
        $('body').addClass('singup-hidden-sidebar-content');
      });
      //Hide Form
      $('.sidebar-close-icon,.hiddenbar-body-ovelay').on('click', function(e) {
        e.preventDefault();
        $('body').removeClass('singup-hidden-sidebar-content');
      });
    }

    if($('.cart-filter-btn').length){
      //Show Form
      $('.cart-filter-btn').on('click', function(e) {
        e.preventDefault();
        $('body').addClass('cart-hidden-sidebar-content');
      });
      //Hide Form
      $('.sidebar-close-icon,.hiddenbar-body-ovelay').on('click', function(e) {
        e.preventDefault();
        $('body').removeClass('cart-hidden-sidebar-content');
      });
    }

    if($('.descrip-filter-btn').length){
      //Show Form
      $('.descrip-filter-btn').on('click', function(e) {
        e.preventDefault();
        $('body').addClass('descrip-hidden-sidebar-content');
      });
      //Hide Form
      $('.sidebar-close-icon,.hiddenbar-body-ovelay').on('click', function(e) {
        e.preventDefault();
        $('body').removeClass('descrip-hidden-sidebar-content');
      });
    }

    if($('.spece-filter-btn').length){
      //Show Form
      $('.spece-filter-btn').on('click', function(e) {
        e.preventDefault();
        $('body').addClass('spcfictn-hidden-sidebar-content');
      });
      //Hide Form
      $('.sidebar-close-icon,.hiddenbar-body-ovelay').on('click', function(e) {
        e.preventDefault();
        $('body').removeClass('spcfictn-hidden-sidebar-content');
      });
    } 

    if($('.repc-filter-btn').length){
      //Show Form
      $('.repc-filter-btn').on('click', function(e) {
        e.preventDefault();
        $('body').addClass('retrnplc-hidden-sidebar-content');
      });
      //Hide Form
      $('.sidebar-close-icon,.hiddenbar-body-ovelay').on('click', function(e) {
        e.preventDefault();
        $('body').removeClass('retrnplc-hidden-sidebar-content');
      });
    }

    if($('.comqstn-filter-btn').length){
      //Show Form
      $('.comqstn-filter-btn').on('click', function(e) {
        e.preventDefault();
        $('body').addClass('faq-hidden-sidebar-content');
      });
      //Hide Form
      $('.sidebar-close-icon,.hiddenbar-body-ovelay').on('click', function(e) {
        e.preventDefault();
        $('body').removeClass('faq-hidden-sidebar-content');
      });
    }

    if($('.review-filter-btn, .department-filter-btn').length){
      //Show Form
      $('.review-filter-btn, .department-filter-btn').on('click', function(e) {
        e.preventDefault();
        $('body').addClass('review-hidden-sidebar-content');
      });
      //Hide Form
      $('.sidebar-close-icon,.hiddenbar-body-ovelay').on('click', function(e) {
        e.preventDefault();
        $('body').removeClass('review-hidden-sidebar-content');
      });
    }

    if($('.menu-filter-btn, .department-filter-btn').length){
      //Show Form
      $('.menu-filter-btn, .department-filter-btn').on('click', function(e) {
        e.preventDefault();
        $('body').addClass('menu-hidden-sidebar-content');
      });
      //Hide Form
      $('.sidebar-close-icon,.hiddenbar-body-ovelay').on('click', function(e) {
        e.preventDefault();
        $('body').removeClass('menu-hidden-sidebar-content');
      });
    }

    if($('.department-filter-btn').length){
      //Show Form
      $('.department-filter-btn').on('click', function(e) {
        e.preventDefault();
        $('body').addClass('department-hidden-sidebar-content');
      });
      //Hide Form
      $('.sidebar-close-icon,.hiddenbar-body-ovelay').on('click', function(e) {
        e.preventDefault();
        $('body').removeClass('department-hidden-sidebar-content');
      });
    }

    if($('.all-filter-btn').length){
      //Show Form
      $('.all-filter-btn').on('click', function(e) {
        e.preventDefault();
        $('body').addClass('allfilter-hidden-sidebar-content');
      });
      //Hide Form
      $('.sidebar-close-icon,.hiddenbar-body-ovelay').on('click', function(e) {
        e.preventDefault();
        $('body').removeClass('allfilter-hidden-sidebar-content');
      });
    }
    /*** ====  Right Side Hidden Sidebar END ==== ***/

    /*** ====  Perspective Hover Animation Code Start ==== ***/
    var perspectiveHover = function() {
      var $animate_content               = $('.animate_content'),
          $animate_thumb          = $('.animate_thumb'),
          xAngle              = 0,
          yAngle              = 0,
          zValue              = 0,
          xSensitivity        = 15,
          ySensitivity        = 25,
          restAnimSpeed       = 300,
          perspective         = 500;

      $animate_content.on('mousemove', function(element) {
          var $item = $(this),
              // Get cursor coordinates
              XRel = element.pageX - $item.offset().left,
              YRel = element.pageY - $item.offset().top,
              width = $item.width();

          // Build angle val from container width and cursor value
          xAngle = (0.5 - (YRel / width)) * xSensitivity;
          yAngle = -(0.5 - (XRel / width)) * ySensitivity;

          // Container isn't manipulated, only child elements within
          updateElement($item.children($animate_thumb));
      }); 
      // Move element around
      function updateElement(modifyLayer) {
          modifyLayer.css({
              'transform': 'perspective('+ perspective + 'px) translateZ(' + zValue + 'px) rotateX(' + xAngle + 'deg) rotateY(' + yAngle + 'deg)',
              'transition': 'none'
          });
      }
      // Reset element to default state
      $animate_content.on('mouseleave', function() {
          modifyLayer = $(this).children($animate_thumb);
          modifyLayer.css({
              'transform': 'perspective(' + perspective + 'px) translateZ(0) rotateX(0) rotateY(0)',
              'transition': 'transform ' + restAnimSpeed + 'ms linear'
          });
      });
    };
    perspectiveHover();
    /*** ====  Perspective Hover Animation Code End ==== ***/


    // Custom Search Dropdown Script Start
    var showSuggestions = function() {
      $( ".top-search form.form-search .box-search" ).each(function() {
          $( "form.form-search .box-search input" ).on('focus', (function() {
              $(this).closest('.boxed').children('.overlay').css({
                  opacity: '1',
                  display: 'block'
              });
              $(this).parent('.box-search').children('.search-suggestions').css({
                  opacity: '1',
                  visibility: 'visible',
                  top: '50px'
              });
          }));
          $( "form.form-search .box-search input" ).on('blur', (function() {
              $(this).closest('.boxed').children('.overlay').css({
                  opacity: '0',
                  display: 'block'
              });
              $(this).parent('.box-search').children('.search-suggestions').css({
                  opacity: '0',
                  visibility: 'hidden',
                  top: '100px'
              });
          }));
      });

      $( ".top-search.style1 form.form-search .box-search" ).each(function() {
          $( "form.form-search .box-search input" ).on('focus', (function() {
              $(this).closest('.boxed').children('.overlay').css({
                  opacity: '1',
                  display: 'block'
              });
              $(this).parent('.box-search').children('.search-suggestions').css({
                  opacity: '1',
                  visibility: 'visible',
                  top: '100px'
              });
          }));
      });
    }; // Toggle Location
    $(function() {
      showSuggestions();
    });
    // Custom Search Dropdown Script Start

    // Custom Shop item add Option increase decrease home 3
    $(function() {
      (function quantityProducts() {
        var $quantityArrowMinus = $(".quantity-arrow-minus");
        var $quantityArrowPlus = $(".quantity-arrow-plus");
        var $quantityNum = $(".quantity-num");
        $quantityArrowMinus.click(quantityMinus);
        $quantityArrowPlus.click(quantityPlus);
        function quantityMinus() {
          if ($quantityNum.val() > 1) {
            $quantityNum.val(+$quantityNum.val() - 1);
          }
        }
        function quantityPlus() {
          $quantityNum.val(+$quantityNum.val() + 1);
        }
      })();
    });
    $(function() {
      (function quantityProducts() {
        var $quantityArrowMinus = $(".quantity-arrow-minus2");
        var $quantityArrowPlus = $(".quantity-arrow-plus2");
        var $quantityNum = $(".quantity-num2");
        $quantityArrowMinus.click(quantityMinus);
        $quantityArrowPlus.click(quantityPlus);
        function quantityMinus() {
          if ($quantityNum.val() > 1) {
            $quantityNum.val(+$quantityNum.val() - 1);
          }
        }
        function quantityPlus() {
          $quantityNum.val(+$quantityNum.val() + 1);
        }
      })();
    });
    $(function() {
      (function quantityProducts() {
        var $quantityArrowMinus = $(".quantity-arrow-minus3");
        var $quantityArrowPlus = $(".quantity-arrow-plus3");
        var $quantityNum = $(".quantity-num3");
        $quantityArrowMinus.click(quantityMinus);
        $quantityArrowPlus.click(quantityPlus);
        function quantityMinus() {
          if ($quantityNum.val() > 1) {
            $quantityNum.val(+$quantityNum.val() - 1);
          }
        }
        function quantityPlus() {
          $quantityNum.val(+$quantityNum.val() + 1);
        }
      })();
    });

    /* ----- Swiper Slider For Testimonial ----- */
    $(document).on("ready",function(){
      var mySwiper = new Swiper('.mySwiper', {
        loop: true,
        updateOnWindowResize: true,
        pagination: {
          el: '.swiper-pagination',
          type: 'progressbar',
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
          loop: true,
        },

      });

      mySwiper.on('slideChange', function () {
        console.log('slider moved');
        var activeslide = mySwiper.realIndex;
        var totalslide = mySwiper.slides.length;
        console.log(activeslide);
        $(".slideactive").html(activeslide + 1);
        $(".slidetotal").html(totalslide - 2);
      });
    });

    /*  Team-Slider-Owl-carousel  */
    if($('.instagram_slider').length){
        $('.instagram_slider').owlCarousel({
            loop:true,
            margin:30,
            dots:false,
            nav:false,
            rtl:false,
            autoplayHoverPause:false,
            autoplay: false,
            singleItem: true,
            smartSpeed: 1200,
            navText: [
              '<i class="far fa-arrow-left-long"></i>',
              '<i class="far fa-arrow-right-long"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                320:{
                    items:1,
                    center: false
                },
                375:{
                    items:2,
                    center: false
                },
                520:{
                    items:2,
                    center: false
                },
                600: {
                    items: 2,
                    center: false
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                },
                1366: {
                    items: 5
                },
                1400: {
                    items: 5
                }
            }
        })
    }

    /*  Shop-Item-3-Grid-Slider-Owl-carousel  */
    if($('.shop_item_1grid_slider').length){
        $('.shop_item_1grid_slider').owlCarousel({
            loop:true,
            margin:30,
            center:false,
            dots:true,
            nav:true,
            rtl:false,
            autoplayHoverPause:false,
            autoplay: false,
            singleItem: true,
            smartSpeed: 1200,
            navText: [
              '<i class="far fa-arrow-left-long"></i>',
              '<i class="far fa-arrow-right-long"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        })
    }

    /*  Shop-Item-2-Grid-Slider-Owl-carousel  */
    if($('.shop_item_2grid_slider').length){
        $('.shop_item_2grid_slider').owlCarousel({
            loop:true,
            margin:30,
            center:false,
            dots:true,
            nav:true,
            rtl:false,
            autoplayHoverPause:false,
            autoplay: false,
            singleItem: true,
            smartSpeed: 1200,
            navText: [
              '<i class="far fa-arrow-left-long"></i>',
              '<i class="far fa-arrow-right-long"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                768: {
                    items: 2
                },
                992: {
                    items: 2
                },
                1200: {
                    items: 2
                }
            }
        })
    }

    /*  Shop-Item-3-Grid-Slider-Owl-carousel  */
    if($('.shop_item_3grid_slider').length){
        $('.shop_item_3grid_slider').owlCarousel({
            loop:true,
            margin:30,
            center:true,
            dots:true,
            nav:true,
            rtl:false,
            autoplayHoverPause:false,
            autoplay: false,
            singleItem: true,
            smartSpeed: 1200,
            navText: [
              '<i class="far fa-arrow-left-long"></i>',
              '<i class="far fa-arrow-right-long"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                768: {
                    items: 2
                },
                992: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        })
    }

    /*  Shop-Item-4-Grid-Slider-Owl-carousel  */
    if($('.shop_item_4grid_slider').length){
        $('.shop_item_4grid_slider').owlCarousel({
            loop:true,
            margin:0,
            center:false,
            dots:true,
            nav:true,
            rtl:false,
            autoplayHoverPause:false,
            autoplay: false,
            singleItem: true,
            smartSpeed: 1200,
            navText: [
              '<i class="far fa-arrow-left-long"></i>',
              '<i class="far fa-arrow-right-long"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                768: {
                    items: 2
                },
                992: {
                    items: 2
                },
                1024: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        })
    }

    /*  Shop-Item-4-Grid-Slider-Owl-carousel  */
    if($('.shop_item_4grid_slider2').length){
        $('.shop_item_4grid_slider2').owlCarousel({
            loop:true,
            margin:0,
            center:false,
            dots:true,
            nav:true,
            rtl:false,
            autoplayHoverPause:false,
            autoplay: false,
            singleItem: true,
            smartSpeed: 1200,
            navText: [
              '<i class="far fa-chevron-left"></i>',
              '<i class="far fa-chevron-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                768: {
                    items: 2
                },
                992: {
                    items: 2
                },
                1024: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        })
    }

    /*  Shop-Item-5-Grid-Slider-Owl-carousel  */
    if($('.shop_item_5grid_slider').length){
        $('.shop_item_5grid_slider').owlCarousel({
            loop:true,
            margin:0,
            dots:true,
            nav:true,
            rtl:false,
            autoplayHoverPause:false,
            autoplay: false,
            singleItem: true,
            smartSpeed: 1200,
            navText: [
              '<i class="far fa-arrow-left-long"></i>',
              '<i class="far fa-arrow-right-long"></i>'
            ],
            responsive: {
                0: {
                    items: 2,
                    center: false
                },
                480:{
                    items:2,
                    center: false
                },
                520:{
                    items:2,
                    center: false
                },
                767: {
                    items: 2,
                    center: false
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 3
                },
                1366: {
                    items: 4
                },
                1400: {
                    items: 5
                }
            }
        })
    }

    /*  Shop-Item-6-Grid-Slider-Owl-carousel  */
    if($('.shop_item_6grid_slider').length){
        $('.shop_item_6grid_slider').owlCarousel({
            loop:true,
            margin:0,
            center:false,
            dots:true,
            nav:true,
            rtl:false,
            autoplayHoverPause:false,
            autoplay: false,
            singleItem: true,
            smartSpeed: 1200,
            navText: [
              '<i class="far fa-arrow-left-long"></i>',
              '<i class="far fa-arrow-right-long"></i>'
            ],
            responsive: {
                0: {
                    items: 2,
                    center: false
                },
                480:{
                    items:2,
                    center: false
                },
                630: {
                    items: 2,
                    center: false
                },
                768: {
                    items: 3
                },
                992: {
                    items: 3
                },
                1024: {
                    items: 3
                },
                1200: {
                    items: 4
                },
                1400: {
                    items: 6
                }
            }
        })
    }

    /*  Shop-Item-7-Grid-Slider-Owl-carousel  */
    if($('.shop_item_7grid_slider').length){
        $('.shop_item_7grid_slider').owlCarousel({
            loop:true,
            margin:5,
            center:false,
            dots:true,
            nav:true,
            rtl:false,
            autoplayHoverPause:false,
            autoplay: false,
            singleItem: true,
            smartSpeed: 1200,
            navText: [
              '<i class="far fa-arrow-left-long"></i>',
              '<i class="far fa-arrow-right-long"></i>'
            ],
            responsive: {
                0: {
                    items: 2,
                    center: false
                },
                480:{
                    items:2,
                    center: false
                },
                520: {
                    items: 2,
                    center: false
                },
                767: {
                    items: 2,
                    center: false
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1024: {
                    items: 4
                },
                1200: {
                    items: 5
                },
                1400: {
                    items: 5
                },
                1500: {
                    items: 7
                }
            }
        })
    }

    /*  Shop-Item-7-Grid-Slider-Owl-carousel  */
    if($('.shop_item_8grid_slider').length){
        $('.shop_item_8grid_slider').owlCarousel({
            loop:true,
            margin:0,
            center:false,
            dots:true,
            nav:true,
            rtl:false,
            autoplayHoverPause:false,
            autoplay: false,
            singleItem: true,
            smartSpeed: 1200,
            navText: [
              '<i class="far fa-arrow-left-long"></i>',
              '<i class="far fa-arrow-right-long"></i>'
            ],
            responsive: {
                0: {
                    items: 2,
                    center: false
                },
                480:{
                    items:2,
                    center: false
                },
                520: {
                    items: 2,
                    center: false
                },
                767: {
                    items: 2,
                    center: false
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1024: {
                    items: 4
                },
                1200: {
                    items: 5
                },
                1400: {
                    items: 7
                },
                1500: {
                    items: 8
                }
            }
        })
    }

    /*  Shop-Item-10-Grid-Slider-Owl-carousel  */
    if($('.shop_item_10grid_slider').length){
        $('.shop_item_10grid_slider').owlCarousel({
            loop:true,
            margin:0,
            center:false,
            dots:true,
            nav:true,
            rtl:false,
            autoplayHoverPause:false,
            autoplay: false,
            singleItem: true,
            smartSpeed: 1200,
            navText: [
              '<i class="far fa-arrow-left-long"></i>',
              '<i class="far fa-arrow-right-long"></i>'
            ],
            responsive: {
                0: {
                    items: 2,
                    center: false
                },
                480:{
                    items:2,
                    center: false
                },
                520: {
                    items: 2,
                    center: false
                },
                767: {
                    items: 2,
                    center: false
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1024: {
                    items: 4
                },
                1200: {
                    items: 5
                },
                1400: {
                    items: 7
                },
                1500: {
                    items: 10
                }
            }
        })
    }

    /*  Team-Slider-Owl-carousel  */
    if($('.bestseller_sidebar_slider').length){
        $('.bestseller_sidebar_slider').owlCarousel({
            loop:true,
            margin:30,
            dots:true,
            nav:true,
            rtl:false,
            autoplayHoverPause:false,
            autoplay: false,
            singleItem: true,
            smartSpeed: 1200,
            navText: [
              '<i class="far fa-arrow-left-long"></i>',
              '<i class="far fa-arrow-right-long"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                520:{
                    items:1,
                    center: false
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        })
    }

    /*  Expert-Freelancer-Owl-carousel  */
    if ($('.banner-style-one').length) {
        $('.banner-style-one').owlCarousel({
            loop: true,
            items: 1,
            margin: 0,
            dots: true,
            nav: true,
            animateOut: 'slideOutDown',
            animateIn: 'fadeIn',
            active: true,
            smartSpeed: 1000,
            autoplay: false
        });
        $('.banner-carousel-btn .left-btn').on('click', function() {
            $('.banner-style-one').trigger('next.owl.carousel');
            return false;
        });
        $('.banner-carousel-btn .right-btn').on('click', function() {
            $('.banner-style-one').trigger('prev.owl.carousel');
            return false;
        });
    }

    /* ----- Scroll To top ----- */
    function scrollToTop() {
        var btn = $('.scrollToHome');
        $(window).on('scroll', function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });
        btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });
    }
    
    /* ----- Mega Dropdown Content ----- */
    $(document).on('ready', function(){
        $(".drop_btn").on('click',function(){
            $(".drop_content").toggle();
        });
        $(".drop_btn2").on('click',function(){
            $(".drop_content2").toggle();
        });
        $(".drop_btn3").on('click',function(){
            $(".drop_content3").toggle();
        });        
    });
    
    //  Fixed sidebar Custom Script For That 
    $(function() {
      var cols = $('.wrap .column');
      var enabled = true;
      var scrollbalance = new ScrollBalance(cols, {
        minwidth: 1199
      });
      // bind to scroll and resize events
      scrollbalance.bind();
    });


/* ======
   When document is ready, do
   ====== */
    $(document).on('ready', function() {
        // add your functions
        navbarScrollfixed();
        scrollToTop();
        mobileNavToggle();
    });
    
/* ======
   When document is loading, do
   ====== */
    // window on Load function
    $(window).on('load', function() {
        // add your functions
        preloaderLoad();
    });
    // window on Scroll function
    $(window).on('scroll', function() {
        // add your functions
    });


})(window.jQuery);