(function ($, Spire, undefined) {

    //var foo,
    //    someOtherFoo;
    Spire.milestones = null;

    Spire.milestones_init = function () {

        var support = { animations : Modernizr.cssanimations },
            animEndEventNames = {
                'WebkitAnimation' : 'webkitAnimationEnd',
                'OAnimation' : 'oAnimationEnd',
                'msAnimation' : 'MSAnimationEnd',
                'animation' : 'animationend'
            },
            // animation end event name
            animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' )];
            this.current_milestone = 1;

        Spire.milestones = $('.date-tick');
        Spire.milestoneImages = $('.spire-milestone-img');

        setTimeout(function(){
            Spire.milestone_position();
        }, 1000);

        var milestoneIsAnimating = false;
        $(document).on("milestoneChange" , function(evt, target, section) {

            if( milestoneIsAnimating ) return false;

            Spire.current_milestone = section;
            milestoneIsAnimating = true;
            var cntAnims = 0;
            //var currentTick = $('.date-tick.active');
            var currentMilestone = $('.milestones.current')[0];
            var nextMilestone = $('.milestone-'+section)[0];

            var onEndAnimationCurrentItem = function(fromNoAniSupport) {
                if(fromNoAniSupport == 'yes') {
                    $(currentMilestone).removeClass( 'current' );
                    $(currentMilestone).removeClass( 'navOutPrev' );
                } else {
                    this.removeEventListener( animEndEventName, onEndAnimationCurrentItem );
                    $(this).removeClass( 'current' );
                    $(this).removeClass( 'navOutPrev' );
                }

                ++cntAnims;
                if (cntAnims === 2) {
                    milestoneIsAnimating = false;
                }
            };

            var onEndAnimationNextItem = function(fromNoAniSupport) {
                if(fromNoAniSupport == 'yes') {
                    $(nextMilestone).addClass( 'current' );
                    $(nextMilestone).removeClass( 'navInNext' );
                } else {
                    this.removeEventListener( animEndEventName, onEndAnimationNextItem );
                    $(this).addClass( 'current' );
                    $(this).removeClass( 'navInNext' );
                }

                ++cntAnims;
                if( cntAnims === 2 ) {
                    milestoneIsAnimating = false;
                }
            };

            if( support.animations ) {
                currentMilestone.addEventListener( animEndEventName, onEndAnimationCurrentItem );
                nextMilestone.addEventListener( animEndEventName, onEndAnimationNextItem );

            }
            else {
                onEndAnimationCurrentItem('yes');
                onEndAnimationNextItem('yes');
            }

            $(currentMilestone).addClass('navOutPrev');
            $(nextMilestone).addClass('navInNext');

            $(target).siblings().removeClass('active');
            $(target).addClass('active');

            Spire.milestone_position();
        });

        Spire.milestoneImages.click(function(e){
            if( milestoneIsAnimating ) return false;

            var shouldMove = false;
            var mid = Spire.browser_width / 2;
            var mouseX = e.clientX + document.body.scrollLeft;

            if(mouseX <= mid) {
                if(Spire.current_milestone > 1) {
                    Spire.current_milestone -= 1;
                    shouldMove = true;
                }
            } else if (mouseX > mid) {
                if(Spire.current_milestone < Spire.milestones.length) {
                    Spire.current_milestone += 1;
                    shouldMove = true;
                }
            }
            if(shouldMove) {
                var target = Spire.milestones[Spire.current_milestone - 1];
                $(document).trigger('milestoneChange', [$(target), Spire.current_milestone]);
            }
        });


        $(document).on('windowResize', function() {
            Spire.milestone_position();
        });

        Spire.milestones.click(function (e) {
            e.preventDefault();
            var target = $(this).data('target');
            var section = $(this).data('section');
            var event = $(this).data('event');

            if(Spire.current_milestone != section) {
                $(document).trigger(event, [$(this), section]);
            }
        });
    };

    Spire.milestone_position = function() {
        //console.log(this.browser_width);
        //console.log(this.current_milestone);

        // -------------------------------------------------
        // MILESTONE SPACING
        // -------------------------------------------------
        var support = { animations : Modernizr.cssanimations };
        var mid = this.browser_width / 2;
        var iOffset;
        var ii;
        var leftVal;
        var gap = 175;
        var offsetLeft = 290;
        var offsetRight = 365;
        var imgW = parseInt($('.img-top').css('width'));

        var aniTime = 350;
        var aniDelayBetweenDots = 50;
        if(!support.animations) {
            aniTime = 0;
            aniDelayBetweenDots = 0;
        }

        if(this.browser_width < 768) {
            offsetLeft = imgW/2 - 75;
            offsetRight = imgW/2;
        } else if(this.browser_width >= 768 && this.browser_width < 900) {
            offsetLeft = imgW/2 - 65;
            offsetRight = imgW/2 + 15;
        }

        for(var i = 0; i <= this.milestones.length; i++) {
            iOffset = i + 1;
            if(iOffset == this.current_milestone) {  // current selection

                leftVal = mid - parseInt($(this.milestones[i]).css('width'))/2;
                $(this.milestones[i]).animate({
                    left: leftVal
                }, aniTime).css('z-index', 10);

            } else if(iOffset < this.current_milestone) {  // left side

                ii = this.current_milestone - iOffset;
                leftVal = (mid -  (ii * gap) - offsetLeft);
                $(this.milestones[i]).delay(ii * aniDelayBetweenDots).animate({
                    left: leftVal
                }, aniTime, function(){
                    $(this).css('z-index', 2666);
                });

            } else {  // right side

                ii = iOffset - (this.current_milestone + 1);
                leftVal = (mid + (ii * gap) + offsetRight);

                $(this.milestones[i]).delay(ii * aniDelayBetweenDots).animate({
                    left: leftVal
                }, aniTime, function(){
                    $(this).css('z-index', 2666);
                });

            }
        }
    }

}(jQuery, window.Spire = window.Spire || {}));
