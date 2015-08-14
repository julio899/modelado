(function ($, Spire, undefined) {

    Spire.company_init = function () {

        var officeHeight = $('.office-selection').height(),
            support = { animations : Modernizr.cssanimations },
            animEndEventNames = {
                'WebkitAnimation' : 'webkitAnimationEnd',
                'OAnimation' : 'oAnimationEnd',
                'msAnimation' : 'MSAnimationEnd',
                'animation' : 'animationend'
            },
            // animation end event name
            animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' )],
            items = $('.locations'),
            current = 0,
            itemsCount = items.length,
            navNext = $( '.nextLocation' ),
            navPrev = $( '.prevLocation' );

        // Our Company
        if(Spire.browser_width >= 768) {
            $('.company-offices').css("height", officeHeight);
        }

        $('#team .prev').click(function (e) {
            e.preventDefault();
            if(Spire.browser_width < 768){
                $('#team .team-wrapper').animate({
                    scrollLeft: '+=' + (-Spire.browser_width) / 1.25
                }, 400);
            } else {
                $('#team .team-wrapper').animate({
                    scrollLeft: '+=' + (-Spire.browser_width) / 2
                }, 400);
            }
        });

        $('#team .next').click(function (e) {
            e.preventDefault();
            if(Spire.browser_width < 768){
                $('#team .team-wrapper').animate({
                    scrollLeft: '+=' + (Spire.browser_width) / 1.25
                }, 400);
            } else {
                $('#team .team-wrapper').animate({
                    scrollLeft: '+=' + (Spire.browser_width) / 2
                }, 400);
            }
        });

        $(document).on('windowResize', function () {
            officeHeight = $('.office-selection').height();
            $('.company-offices').css("height", officeHeight);
        });

        $(document).on("companyOfficeChange" , function(evt, target, section) {

            //$('.offices > div').removeClass('active');
            //$('.office-'+section).addClass('active');

            if( isAnimating ) return false;
            isAnimating = true;
            var cntAnims = 0;
            var currentOffice = $('.company-offices > div.current')[0];
            var nextOffice = $('.office-'+section)[0];

            if ( isAnimating ) {
                $(target).siblings().removeClass('active');
                $(target).addClass('active');
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
                    $(this).parent().parent().parent().parent().parent().addClass( 'current' );
                    $(this).parent().parent().parent().parent().parent().removeClass( 'navInNext' );
                }

                ++cntAnims;
                if( cntAnims === 2 ) {
                    isAnimating = false;
                }
            };

            if( support.animations ) {
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

        $('.locations').click(function (e) {
            e.preventDefault();
            var target = $(this).data('target');
            var section = $(this).data('section');
            var event = $(this).data('event');
            $(document).trigger(event, [$(this), section]);
        });

        navNext.click( function(ev) {
            ev.preventDefault();
            navigate('next');
        });
        navPrev.click( function(ev) {
            ev.preventDefault();
            navigate('prev');
        });

        function navigate(dir) {
            if( isAnimating ) return false;


            if( dir === 'next' ) {
                current = current < itemsCount - 1 ? current + 1 : 0;
            }
            else if( dir === 'prev' ) {
                current = current > 0 ? current - 1 : itemsCount - 1;
            }

            var currentItem = items[ current ];

            $(currentItem).siblings().removeClass('active');
            $(currentItem).addClass('active');

            var section = $(currentItem).data('section');
            var event = $(currentItem).data('event');
            $(document).trigger(event, [$(currentItem), section]);
        }

        $(document).on('teamMemberChange', function(evt, target, section) {
            $(target).siblings().removeClass('active');
            $(target).addClass('active');
        });

        $('.team-member').click(function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            var section = $(this).data('section');
            var event = $(this).data('event');
            $(document).trigger(event, [$(this), section]);
        });

        // Team Members scroller
        var width = 0;
        $('.team-wrapper-scroll > *').each(function() {
            width += $(this).outerWidth(true);

            $('.team-wrapper-scroll').css('width', width);
        });

    };

}(jQuery, window.Spire = window.Spire || {}));