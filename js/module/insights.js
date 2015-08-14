(function ($, Spire, undefined) {

    Spire.insights_init = function () {

        $('.linkedinshare').click(function(e){
            e.preventDefault();
            $.popupWindow($(this).data('out'));
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
    };

}(jQuery, window.Spire = window.Spire || {}));
