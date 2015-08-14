(function($, Spire, undefined) {

	Spire.slideshowMain_init = function() {

        var support = { animations : Modernizr.cssanimations },
            animEndEventNames = {
                'WebkitAnimation' : 'webkitAnimationEnd',
                'OAnimation' : 'oAnimationEnd',
                'msAnimation' : 'MSAnimationEnd',
                'animation' : 'animationend'
            },
            // animation end event name
            animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ],
            items = $('.itemwrap')[0].children,
            current = 0,
            itemsCount = items.length,
            nav = $( 'nav' ),
            navNext = $( '.next' ),
            navPrev = $( '.prev' ),
            isAnimating = false;


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
            isAnimating = true;
            var cntAnims = 0,
                prev = items[ current ];

            var currentItem = items[ current ];

            if( dir === 'next' ) {
                current = current < itemsCount - 1 ? current + 1 : 0;
            }
            else if( dir === 'prev' ) {
                current = current > 0 ? current - 1 : itemsCount - 1;
            }

            var nextItem = items[ current],
                next = items[ current < itemsCount - 1 ? current + 1 : 0 ];

            var onEndAnimationCurrentItem = function(fromNoAniSupport) {
                if(fromNoAniSupport == 'yes') {
                    $(currentItem).removeClass( 'current' );
                    $(currentItem).removeClass( dir === 'next' ? 'navOutNext' : 'navOutPrev' );
                } else {
                    this.removeEventListener( animEndEventName, onEndAnimationCurrentItem );
                    $(this).removeClass( 'current' );
                    $(this).removeClass( dir === 'next' ? 'navOutNext' : 'navOutPrev' );
                }

                ++cntAnims;
                if( cntAnims === 2 ) {
                    isAnimating = false;
                }
            };

            var onEndAnimationNextItem = function(fromNoAniSupport) {
                if(fromNoAniSupport == 'yes') {
                    $(nextItem).addClass( 'current' );
                    $(nextItem).removeClass( dir === 'next' ? 'navInNext' : 'navInPrev' );
                } else {
                    this.removeEventListener( animEndEventName, onEndAnimationNextItem );
                    $(this).addClass( 'current' );
                    $(this).removeClass( dir === 'next' ? 'navInNext' : 'navInPrev' );
                }

                ++cntAnims;
                if( cntAnims === 2 ) {
                    isAnimating = false;
                }
            };

            if( support.animations ) {
                currentItem.addEventListener( animEndEventName, onEndAnimationCurrentItem );
                nextItem.addEventListener( animEndEventName, onEndAnimationNextItem );
            }
            else {
                onEndAnimationCurrentItem('yes');
                onEndAnimationNextItem('yes');
            }

            $(currentItem).addClass( dir === 'next' ? 'navOutNext' : 'navOutPrev' );
            $(nextItem).addClass( dir === 'next' ? 'navInNext' : 'navInPrev' );

            $('.next h3').text($(next).data('title'));
            $('.prev h3').text($(prev).data('title'));
        }
	};

}(jQuery, window.Spire = window.Spire || {}));