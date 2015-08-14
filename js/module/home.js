(function ($, Spire, undefined) {

    Spire.home_init = function () {

        //var hitImage = false;

        var support = { animations : Modernizr.cssanimations,
                        transitions: Modernizr.csstransitions },
            animEndEventNames = {
                'WebkitAnimation' : 'webkitAnimationEnd',
                'OAnimation' : 'oAnimationEnd',
                'msAnimation' : 'MSAnimationEnd',
                'animation' : 'animationend'
            },
            // animation end event name
            animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' )],

            transEndEventNames = {
                'WebkitTransition' : 'webkitTransitionEnd',// Saf 6, Android Browser
                'MozTransition'    : 'transitionend',      // only for FF < 15
                'transition'       : 'transitionend'       // IE10, Opera, Chrome, FF 15+, Saf 7+
            },
            transEndEventName = transEndEventNames[ Modernizr.prefixed('transition')],

            senseImgOffset = null,

            videoPlayer = [];


        // Home
        $(window).load(function() {
            var totalHeight = 0;
            $("#product-slideshow .current > div").each(function(){
                totalHeight += $(this).outerHeight();
            });

            $('#component').css('height', totalHeight);

            senseImgOffset = $('.videoWrapper').offset().top
        });

        if (Modernizr.video.webm) {
            $('.videoWrapper').append('<div class="video"> <img class="img-responsive" src='+Spire.home_shipVideoImg+' /> <video> <source src='+Spire.home_shipVideo+' type="video/webm"></video> </div>');
            videoPlayer = $(".videoWrapper video");
        } else {
            $('.videoWrapper').append('<img class="img-responsive margin-bottom25" src='+Spire.home_shipImg+' />');
        }

        $(window).scroll(function() {
            var currentPosition = $(this).scrollTop();
            var vidTop = senseImgOffset - currentPosition;
            var vidBottom = senseImgOffset + $('.videoWrapper').height() - currentPosition;
            var bounds = { top: 100, bottom: window.innerHeight - 50 };

            if(videoPlayer.length !== 0 && vidTop >= bounds.top && vidBottom <= bounds.bottom) {
                if (videoPlayer.get(0).paused) {
                    videoPlayer.get(0).play();
                } else if(videoPlayer.get(0).ended) {
                    videoPlayer.get(0).play();
                }
            } else if (videoPlayer.length !== 0) {
                videoPlayer.get(0).pause();
            }
        });

        $(window).resize(function() {
            var totalHeight = 0;
            $("#product-slideshow .current > div").each(function(){
                totalHeight += $(this).outerHeight();
            });
            $('#component').css('height', totalHeight);
        });

        $('.bxslider').bxSlider({
            easing: 'cubic-bezier(0.7, 0, 0.3, 1)',
            speed: 1000,
            mode: 'vertical',
            responsive: true,
            touchEnabled: false,
            controls: false,
            pager: true,
            auto: true,
            pause: 9000,
            adaptiveHeight: true
        });

        $('.productLavaLamp').lavalamp({
            easing: 'easeInOutQuint',
            duration: 500,
            enableHover: true,
            setOnClick: true
        });

        $('.officeLava').lavalamp({
            easing: 'easeInOutQuint',
            duration: 500,
            enableHover: true,
            setOnClick: true
        });

        $('#happenings .prev').click(function (e) {
            e.preventDefault();
            if(Spire.browser_width < 768){
                $('#happenings .happenings-wrapper').animate({
                    scrollLeft: '+=' + (-Spire.browser_width) / 1.25
                }, 400);
            } else {
                $('#happenings .happenings-wrapper').animate({
                    scrollLeft: '+=' + (-Spire.browser_width) / 2
                }, 400);
            }
        });

        $('#happenings .next').click(function (e) {
            e.preventDefault();
            if(Spire.browser_width < 768){
                $('#happenings .happenings-wrapper').animate({
                    scrollLeft: '+=' + (Spire.browser_width) / 1.25
                }, 400);
            } else {
                $('#happenings .happenings-wrapper').animate({
                    scrollLeft: '+=' + (Spire.browser_width) / 2
                }, 400);
            }
        });

        $(document).on("homeOfficeChange", function(evt, target, section) {

            if( isAnimating ) return false;
            isAnimating = true;
            var cntAnims = 0;
            var currentOffice = $('.office-members > div.current')[0];
            var nextOffice = $('.office-'+section)[0];

            if ( isAnimating ) {
            }

            var onEndAnimationCurrentItem = function(fromNoAniSupport) {
                if(fromNoAniSupport == 'yes') {
                    $(currentOffice).removeClass( 'current' );
                    $(currentOffice).removeClass( 'navOutPrev' );
                } else {
                    this.removeEventListener( animEndEventName, onEndAnimationCurrentItem );
                    $(this).removeClass( 'current' );
                    $(this).removeClass( 'navOutPrev' );
                }

                ++cntAnims;
                if( cntAnims === 2 ) {
                    isAnimating = false;
                }
            };

            var onEndAnimationNextItem = function(fromNoAniSupport) {
                if(fromNoAniSupport == 'yes') {
                    $(nextOffice).addClass( 'current' );
                    $(nextOffice).removeClass( 'navInNext' );
                } else {
                    this.removeEventListener( animEndEventName, onEndAnimationNextItem );
                    $(this).parent().parent().parent().parent().addClass( 'current' );
                    $(this).parent().parent().parent().parent().removeClass( 'navInNext' );
                }

                ++cntAnims;
                if( cntAnims === 2 ) {
                    isAnimating = false;
                }
            };

            var onEndAnimationCurrentItemMobile = function() {
                this.removeEventListener( transEndEventName, onEndAnimationCurrentItem );
                $(this).removeClass( 'current' );
                $(this).removeClass( 'navOutPrev' );
                ++cntAnims;
                if( cntAnims === 2 ) {
                    isAnimating = false;
                }
            };

            var onEndAnimationNextItemMobile = function() {
                this.removeEventListener( transEndEventName, onEndAnimationNextItem );
                $(nextOffice).addClass( 'current' );
                $(nextOffice).removeClass( 'navInNext' );
                ++cntAnims;
                if( cntAnims === 2 ) {
                    isAnimating = false;
                }
            };

            if(Spire.browser_width < 768) {
                currentOffice.addEventListener( transEndEventName, onEndAnimationCurrentItemMobile );
                nextOffice.addEventListener( transEndEventName, onEndAnimationNextItemMobile );
            }
            else if( support.animations ) {
                currentOffice.addEventListener( animEndEventName, onEndAnimationCurrentItem );
                $(nextOffice).find('img.last-img')[0].addEventListener( animEndEventName, onEndAnimationNextItem );
            }
            else {
                onEndAnimationCurrentItem('yes');
                onEndAnimationNextItem('yes');
            }

            $(currentOffice).addClass('navOutPrev');
            $(nextOffice).addClass('navInNext');

        });

        $('.pill-nav-cta').click(function (e) {
            e.preventDefault();
            var target = $(this).data('target');
            var section = $(this).data('section');
            var event = $(this).data('event');
            $(document).trigger(event, [$(this), section]);
        });

        $(document).on("productSliderChange", function(evt, target, section) {

            if( isAnimating ) return false;
            isAnimating = true;
            var cntAnims = 0;
            var currentProduct = $('#product-slideshow li.current')[0];
            var nextProduct = $('.product-'+section)[0];

            if ( isAnimating ) {
                //$(target).siblings().removeClass('active');
                //$(target).addClass('active');
            }

            var onEndAnimationCurrentItem = function() {
                this.removeEventListener( animEndEventName, onEndAnimationCurrentItem );
                $(this).removeClass( 'current' );
                $(this).removeClass( 'navOutPrev' );
                ++cntAnims;
                if( cntAnims === 2 ) {
                    isAnimating = false;
                }
            };

            var onEndAnimationNextItem = function() {
                this.removeEventListener( animEndEventName, onEndAnimationNextItem );
                $(this).addClass( 'current' );
                $(this).removeClass( 'navInNext' );
                ++cntAnims;
                if( cntAnims === 2 ) {
                    isAnimating = false;
                }
            };

            if( support.animations ) {
                currentProduct.addEventListener( animEndEventName, onEndAnimationCurrentItem );
                nextProduct.addEventListener( animEndEventName, onEndAnimationNextItem );

            }
            else {
                onEndAnimationCurrentItem();
                onEndAnimationNextItem();
            }

            $(currentProduct).addClass('navOutPrev');
            $(nextProduct).addClass('navInNext');

        });

        $('#product-slider li').click(function (e) {
            e.preventDefault();
            var target = $(this).data('target');
            var section = $(this).data('section');
            var event = $(this).data('event');
            $(document).trigger(event, [$(this), section]);
        });
    };

}(jQuery, window.Spire = window.Spire || {}));