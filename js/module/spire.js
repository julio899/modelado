//Needed to override LavaLamp click :(
var isAnimating = false;

(function ($, Spire, undefined) {

    var privateNumber = 1,
        dontScroll = false;

    Spire.browser_width = 0;

    Spire.init = function () {
        this.mobileWebkit = navigator.userAgent.match(/iPad/i) !== null || navigator.userAgent.match(/iPhone/i) !== null;
        //this.ie = !$.support.cssFloat;
        this.useHistoryState = ("pushState" in history);
        this.touchDevice = $('html').hasClass('touch');
        this.clickEvent = 'click';
        this.url = window.location.pathname;

        this.browser_width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

        this.init_bind();
        this.init_global();
        this.find_zoom_img();
        this.find_zoom_div();
        //somePrivateFunc();
    };

    //var somePrivateFunc = function () {
    //    console.log('somePrivateFunc');
    //    console.log('privateNumber = ' + ++privateNumber);
    //};

    Spire.init_bind = function () {

        // Facebook share
        $('.facebook').click(function () {
            var _link = $(this).data("link");
            var _picture = $(this).data("picture");
            var _name = $(this).data("name");
            var _description = $(this).data("description");

            var facebook_share = {
                method: 'feed',
                link: _link,
                picture: _picture,
                name: _name,
                caption: "spire.com",
                description: _description
            };

            function callback(response) {
                console.log(response);
                // what happens when it goes.
            }

            FB.ui(facebook_share, callback);

            return false;
        });

        $('.main-footer li a').on('click', function(){
            $('html, body').stop().animate({
                scrollTop: $(this).offset().top - 125
            }, 250);

            setTimeout(function() {
                var hash = window.location.hash.substr(1);
                var halfHash = hash.split('/')[0];
                var scrollPos = eval($('#' + halfHash).offset().top - 125);

                $("html, body").animate({
                    scrollTop: scrollPos
                }, 500);
            }, 0);
        });

        // Placeholder fix for browsers that don't support HTML5 placeholder
        $('input, textarea').placeholder();
    };

    Spire.scrollToSection = function() {
        console.log('scrollToSection');

        setTimeout(function () {
             $('body').addClass('scrolled');
        }, 0);

        setTimeout(function () {
            var hash = window.location.hash.substr(1);
            var halfHash = hash.split('/')[0];
            var scrollPos = eval($('#' + halfHash).offset().top - 125);

            $("html, body").animate({
                scrollTop: scrollPos
            }, 500);
        }, 410);
    };

    Spire.init_global = function () {

        Spire.browser_width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

        //Window Resize
        var doResize;
        $(window).resize(function() {
            //$(document).trigger('windowResize');

            Spire.browser_width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            clearTimeout(doResize);
            doResize = setTimeout(function(){$(document).trigger('windowResize');}, 125);

            if(Spire.browser_width > 991) {
                $('body').removeClass('hamburgerShow');
                $('.hamburger-cta a').removeClass('open');
            }
        });

        // Header Navigation
        if ($('#page-slider').length > 0) {
            var initialPos =  $('#page-slider').offset().top;

            $(window).scroll(function () {


                var scrolled = $(window).scrollTop() + 75;

                if (scrolled >= initialPos) {
                    $('#page-slider').css({
                        position: "fixed",
                        top: '75px'
                    });
                } else {

                    $('#page-slider').css({
                        position: "absolute",
                        top: initialPos + "px"
                    });
                }
            });
        }


        $(window).scroll(function () {
            if ($(window).scrollTop() >= 10 ) {
                $('body').addClass('scrolled');
            } else {
                $('body').removeClass('scrolled');
            }
        });

        $('.products-nav, .products-subnav').hover(function () {
            $('.products-subnav').addClass('hover');
            $('body').addClass('navHover');
        }, function() {
            $( '.products-subnav' ).removeClass('hover');
            $('body').removeClass('navHover');
        });

        $('.hamburger-cta a').click(function (event) {
            event.preventDefault();
            $(this).toggleClass('open');
            $('body').toggleClass('hamburgerShow');
        });

        //Footer
        if (window.location.hash) {
            setTimeout(Spire.scrollToSection, 100);
        }

        // Page Slider
        $('.lavaLamp').lavalamp({
            easing: 'easeInOutQuint',
            duration: 500,
            enableHover: true,
            setOnClick: true
        });

        $(document).on('pageSliderChange', function(evt, target, clicked) {

            //var scrolled = $('.parallax-container');

            $(clicked).siblings().removeClass('current');
            $(clicked).addClass('current');
            dontScroll = true;

            $('html, body').animate({
                scrollTop: eval($('#' + target).offset().top - 125)
            }, 1000, "easeInOutExpo", function() {
                dontScroll = false;
            });

        });

        var $lavaLamp_Li = $('.lavaLamp li');
        $lavaLamp_Li.click(function (e) {
            e.preventDefault();
            var target = $(this).data('target');
            var event = $(this).data('event');
            $(document).trigger(event, [target, $(this)]);
        });

        var sections = $('.sliderUpdate'),
            links = $lavaLamp_Li;

        $(window).scroll(function () {
            if(!dontScroll) {

                var currentPosition = $(this).scrollTop();

                sections.each(function() {

                    var $main_nav = $('.main-nav');
                    var $page_slider = $('#page-slider');
                    var top = $(this).offset().top - $main_nav.height() - $page_slider.height() - 25;
                    var bottom = $(this).offset().top - $main_nav.height() - $page_slider.height() + 200;

                    if (currentPosition >= top && currentPosition <= bottom) {

                        links.removeClass('active');
                        links.removeClass('current');

                        var li = $('li[data-target="' + this.id + '"]');
                        $('.lavaLamp').data('active',li).lavalamp('update');
                    }
                });
            }
        });

        //Happenings
        var width = 0;
        $('.happenings-wrapper-scroll > *').each(function() {
            width += $(this).outerWidth(true);

            $('.happenings-wrapper-scroll').css('width', width);
        });

        var mobileWidth = 0;
        $('.happenings-wrapper-scroll-mobile > *').each(function() {
            mobileWidth += $(this).outerWidth(true);

            $('.happenings-wrapper-scroll-mobile').css('width', mobileWidth);
        });

        $('#prev-horz-slide-arrow').fadeOut();

        var happScroll;
        $('.horz-slide-wrapper').scroll(function(e) {
            clearTimeout(happScroll);
            happScroll = setTimeout(function(){
                $('#prev-horz-slide-arrow').fadeIn('slow');
                $('#next-horz-slide-arrow').fadeIn('slow');

                if($('.horz-slide-wrapper').scrollLeft() <= 150) {
                    $('#prev-horz-slide-arrow').stop().fadeOut('fast');
                }
                else if($('.horz-slide-wrapper').scrollLeft() > $('.horz-slide-wrapper-scroll').width() - Spire.browser_width - 150) {
                    $('#next-horz-slide-arrow').stop().fadeOut('fast');
                }
            }, 125);
        });

        //  Let's work together bubble
        var lwt = $('#lets-work-together');
        var overlay = $('#lwtOverlay');

        $('.lets-work-together').find('.expand').click(function(e){
            e.preventDefault();
            $(window).off('click');

            lwt.addClass('open');
            overlay.addClass('open');

            $(window).click(function (event) {
                var overlayID = $(event.target).attr('id');
                if (overlayID === 'lwtOverlay') {
                    $('#lets-work-together .close').click();
                }
            });

        });

        $('#lets-work-together .close').click(function(e){
            e.preventDefault();
            lwt.removeClass('open');
            overlay.removeClass('open');

            $(window).off('click');
        });

        if(Spire.browser_width < 992 && Spire.touchDevice) {

            $('.horz-slide-wrapper .nav-roundslide').hide();
        }

    };

    Spire.find_zoom_img = function(){
        $('.img_add_zoom').wrap("<div class='zoom_me_img'></div>");
    };
    Spire.find_zoom_div = function(){
        $('.div_add_zoom').wrap("<div class='zoom_me_div'></div>");
    };




}(jQuery, window.Spire = window.Spire || {}));