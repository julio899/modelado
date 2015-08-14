(function ($, Spire, undefined) {

    Spire.sense_init = function () {

        var support = { animations : Modernizr.cssanimations },
            animEndEventNames = {
                'WebkitAnimation' : 'webkitAnimationEnd',
                'OAnimation' : 'oAnimationEnd',
                'msAnimation' : 'MSAnimationEnd',
                'animation' : 'animationend'
            },
            // animation end event name
            animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' )];

        $('.boat-hover').hover(function (e) {
            e.preventDefault();
            var target = $(this).data('target');

            $('#' + target).addClass('active');
            $(this).parent().parent().css('opacity', 0.1);
        }, function () {
            var target = $(this).data('target');

            $('#' + target).removeClass('active');
            $(this).parent().parent().css('opacity', 1);
        });


        $(document).on("caseStudiesChange" , function(evt, clicked, target) {

            if( isAnimating ) return false;
            isAnimating = true;
            var cntAnims = 0;
            var currentCaseImg = $('.case-content > div.current .image-1')[0];
            var nextCaseImg = $(target + ' .image-1')[0];
            var currentCase = $('.case-content > div.current')[0];
            var nextCase = $(target)[0];
            var curtain = $('.curtain-1')[0];

            if ( isAnimating ) {
                $(clicked).siblings().removeClass('active');
                $(clicked).addClass('active');
            }

            var onEndAnimationCurrentItem = function() {
                currentCaseImg.removeEventListener( animEndEventName, onEndAnimationCurrentItem );
                $(currentCase).removeClass( 'current' );
                $(currentCase).removeClass( 'navOutPrev' );
                ++cntAnims;
                if( cntAnims === 2 ) {
                    isAnimating = false;
                }
            };

            var onEndAnimationNextItem = function() {
                nextCaseImg.removeEventListener( animEndEventName, onEndAnimationNextItem );
                $(nextCase).addClass( 'current' );
                $(nextCase).removeClass( 'navInNext' );
                ++cntAnims;
                if( cntAnims === 2 ) {
                    isAnimating = false;
                }
            };

            var onEndAnimationCurtains = function() {
                curtain.removeEventListener( animEndEventName, onEndAnimationCurtains );
                $('.curtains').removeClass( 'active' );
                ++cntAnims;
                if( cntAnims === 2) {
                    isAnimating = false;
                }
            };

            if( support.animations ) {
                currentCaseImg.addEventListener( animEndEventName, onEndAnimationCurrentItem );
                nextCaseImg.addEventListener( animEndEventName, onEndAnimationNextItem );
                curtain.addEventListener( animEndEventName, onEndAnimationCurtains );
            }
            else {
                onEndAnimationCurrentItem();
                onEndAnimationNextItem();
                onEndAnimationCurtains();
            }

            if(Spire.browser_width < 768){
                var copyHeight = $('.current .copy').outerHeight();
                $(curtain).css('height', copyHeight);
            }

            $(currentCase).addClass('navOutPrev');
            $(nextCase).addClass('navInNext');
            $('.curtains').addClass('active');
        });

        $('.cases > div').click(function (e) {
            e.preventDefault();
            var target = $(this).data('target');
            var section = $(this).data('section');
            var event = $(this).data('event');
            $(document).trigger(event, [$(this), target]);
        });

    };

}(jQuery, window.Spire = window.Spire || {}));