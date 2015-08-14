(function ($, Spire, undefined) {

    $('.lwt-success-message').fadeOut(0);
    $('.lwt-error-message').fadeOut(0);

    Spire.isNameValid = function () {
        return ($('#form-name').val().length > 3);
    };

    Spire.isValidEmail = function (emailAddress) {
        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
        return pattern.test(emailAddress);
    };

    Spire.resetFields = function () {
        $('#form-name').val('');
        $('#form-email').val('');
        $('#form-phone').val('');
        $('#form-comments').val('');
    };

    $('#form-name').blur(function () {
        if (!Spire.isNameValid()) {
            $('#form-name').addClass('required');
        } else {
            $('#form-name').removeClass('required');
        }
    });

    $('#form-email').blur(function () {
        if (!Spire.isValidEmail($('#form-email').val())) {
            $('#form-email').addClass('required');
        } else {
            $('#form-email').removeClass('required');
        }
    });

    Spire.showSuccessMsg = function () {
        $('.lwt-success-message').fadeIn().delay(2500).queue(function(){
            Spire.resetFields();
            $('#lwt-send-btn').removeAttr('disabled');
            $('#lets-work-together .close').click();
            $(this).dequeue();
        }).fadeOut('slow');
    };

    Spire.showErrorMsg = function () {
        $('.lwt-error-message').fadeIn().delay(2500).fadeOut();
        $('#lwt-send-btn').removeAttr('disabled');
    };

    $('#lwt-send-btn').click(function (event) {
        event.preventDefault();

        var valid = true;

        if (!Spire.isNameValid()) {
            valid = false;
            $('#form-name').addClass('required');
        } else {
            $('#form-name').removeClass('required');
        }

        if (!Spire.isValidEmail($('#form-email').val())) {
            valid = false;
            $('#form-email').addClass('required');
        } else {
            $('#form-email').removeClass('required');
        }

        if (valid === true) {

            $('#lwt-send-btn').attr('disabled', 'disabled');

            $.ajax({
                type: $('#wtform').attr('method'),
                url: $('#wtform').attr('action'),
                data: $('#wtform').serialize(),
                success: function (data) {
                    if (data === "200") {
                        Spire.showSuccessMsg();
                    } else {
                        Spire.showErrorMsg();
                    }
                },
                error: function (data) {
                    Spire.showErrorMsg();
                }
            });
        }
    });

}(jQuery, window.Spire = window.Spire || {}));