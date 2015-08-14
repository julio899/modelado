(function ($, Spire, undefined) {

    Spire.careers_init = function () {

        // Careers
        $('.hover-caption figure').hover(function () {
            var captionHeight = $(this).find('figcaption').height() + 40;
            $(this).find('img').css({
                'transform': 'translateY(-'+ captionHeight + 'px)',
                '-webkit-transform': 'translateY(-'+ captionHeight + 'px)'
            });
        }, function() {
            $(this).find('img').css({
                'transform': 'translateY(0)',
                '-webkit-transform': 'translateY(0)'
            });
        });

        $('#getHiredButton').click(function () {
            var scrollPos = $('.career-map').offset().top;
            $('html, body').animate({
                scrollTop: scrollPos - 100
            }, 500);
            return false;
        });

        var width = 0;
        $('#careers-scroller .hover-caption > *').each(function() {
            width += $(this).outerWidth(true);

            $('.wrapper-scroll').css('width', width);
        });

        $('#careers-scroller .prev').click(function () {
            if(Spire.browser_width < 768){
                $('#careers-scroller .scroller-wrapper').animate({
                    scrollLeft: '+=' + (-Spire.browser_width) / 1.25
                }, 400);
            } else {
                $('#careers-scroller .scroller-wrapper').animate({
                    scrollLeft: '+=' + (-Spire.browser_width) / 2
                }, 400);
            }
        });

        $('#careers-scroller .next').click(function () {
            if(Spire.browser_width < 768){
                $('#careers-scroller .scroller-wrapper').animate({
                    scrollLeft: '+=' + (Spire.browser_width) / 1.25
                }, 400);
            } else {
                $('#careers-scroller .scroller-wrapper').animate({
                    scrollLeft: '+=' + (Spire.browser_width) / 2
                }, 400);
            }
        });

        this.nameSatelliteVal = function() {
            var x = $("#name-input");
            $("#name-output").text('lemur2-' + x.val());
            $("#name-output-2").text('lemur2-' + x.val());
        };
    };

}(jQuery, window.Spire = window.Spire || {}));