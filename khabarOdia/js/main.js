(function($) {
    "use strict";
    
    /*--
    Magnific Popup
    ------------------------*/
    $('.video-popup').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        zoom: {
            enabled: true,
        }
    });
    
    $("div.clickableDiv").on('click',function(){
        var containerElement = $(this).closest("div.clickableDiv").find("p").text();
       // var newsId=containerElement.querySelector('.news_id');
        //var newsId = $(this).find('.news_id').text();
       // console.log('id is'+toString(containerElement));
        alert("success :"+containerElement);
    });
    var date1 = new Date().toString();       
        var newDate="";
        var day = date1.substring(0,3);
        var month = date1.substring(4,7);
        var dateYear = date1.substring(8,15);
        switch(day)
        {
            case "Mon" :
            {
                day= "Mon,";
                break;
            }
            case "Tue" :
            {
                day= "Tuesday,";
                break;
            }
            case "Wed" :
            {
                day= "Wednesday,";
                break;
            }
            case "Thu" :
            {
                day= "Thursday,";
                break;
            }
            case "Fri" :
            {
                day= "Friday,";
                break;
            }
            case "Sat" :
            {
                day= "Saturday,";
                break;
            }
            case "Sun" :
            {
                day= "Sunday,";
                break;
            }
        }
        
        
        switch(month)
        {
            case "Jan" :
            {
                month= "January,";
                break;
            }
            case "Feb" :
            {
                month= "February,";
                break;
            }
            case "Mar" :
            {
                month= "March,";
                break;
            }
            case "Apr" :
            {
                month= "April,";
                break;
            }
            case "May" :
            {
                month= "May,";
                break;
            }
            case "Jun" :
            {
                month= "June,";
                break;
            }
            case "Jul" :
            {
                month= "July,";
                break;
            }
             case "Aug" :
            {
                month= "August,";
                break;
            }
            case "Sep" :
            {
                month= "September,";
                break;
            }
            case "Oct" :
            {
                month= "October,";
                break;
            }
            case "Nov" :
            {
                month= "November,";
                break;
            }
            case "Dec" :
            {
                month= "December,";
                break;
            }
        }
        
        newDate = day+month+dateYear;
    window.onload = function(){        
        document.getElementById("currentDate").innerHTML = newDate;
    }
    
    /*--
    slick slider
    ------------------------*/
    $('.screenshot-slider').slick({
        centerMode: true,
        dots: true,
        focusOnSelect: true,
        swipeToSlide: true,
        touchMove: false,
        centerPadding: '0',
        slidesToShow: 4,
        arrows: false,
        responsive: [{
                breakpoint: 1100,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 970,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                }
            }
        ]
    });
    
    
    /*--
    slick slider
    ------------------------*/
    $('.slider-2').slick({
        centerMode: true,
        dots: false,
        centerPadding: '0',
        slidesToShow: 1,
        arrows: false,
        slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 970,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /*--------------------------
    counterUp
    ---------------------------- */
    $('.counter').counterUp({
        delay: 10,
        time: 5000
    });
    
    
    /*----------------------------
    owl active brand-logo
    ------------------------------ */
    $('.item_all').owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        pagination: false,
        navigation: false,
        items: 6,
        /* transitionStyle : "fade", */
        /* [This code for animation ] */
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [980, 4],
        itemsTablet: [767, 2],
        itemsMobile: [479, 2],
    });
    
    
    /*--
    Menu Stick
    -----------------------------------*/
    var header = $('.sticker');
    var win = $(window);
    
    win.on('scroll', function() {
        var scroll = win.scrollTop();
        if (scroll < 1) {
            header.removeClass('stick');
        } else {
            header.addClass('stick');
        }
    });
    
    
    /*--
    One Page Nav
    -----------------------------------*/
    var top_offset = $('.header-area').height() - -60;
    $('.main-menu nav ul').onePageNav({
        currentClass: 'active',
        scrollOffset: top_offset,
    });
    
    
    /*--
     Bootstrap Menu Fix For Mobile
    -----------------------------------*/
    $(document).on('click', '.navbar-collapse.in', function(e) {
        if ($(e.target).is('a')) {
            $(this).collapse('hide');
        }
    });
    
    
    /*--
    Smooth Scroll
    -----------------------------------*/
    $('.scroll-down, .mean-nav ul li a').on('click', function(e) {
        e.preventDefault();
        var link = this;
        $.smoothScroll({
            offset: -100,
            scrollTarget: link.hash
        });
    });
    
    
    /*--------------------------
    scrollUp
    ---------------------------- */
    var totop = $('#toTop');
    
    win.on('scroll', function() {
        if (win.scrollTop() > 200) {
            totop.fadeIn();
        } else {
            totop.fadeOut();
        }
    });
    totop.on('click', function() {
        $("html,body").animate({
            scrollTop: 0
        }, 500)
    });
    
    
    
    /*----------------------------
    slider-active
    ------------------------------ */
    $('.slider-active').owlCarousel({
        autoPlay: 800000000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 1,
        slideSpeed: 500,
        pagination: true,
        navigation: false,
        loop: true,
        mouseDrag: true,
        singleItem: true,
        transitionStyle: "fade",
        transitionStyle: "fade",
        addClassActive: true,
    });
    
    
    //venbox start
    $('.venobox').venobox({
        numeratio: true,
        titleattr: 'data-title'
    })
    //venbox end
    
    
    /*----------------------------
    youtube
    ------------------------------ */
    $('.youtube-bg').YTPlayer({
        containment: '.youtube-bg',
        autoPlay: true,
        loop: true,
    });




})(jQuery);