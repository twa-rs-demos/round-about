$(function () {
    $('.caldera_forms_form [value=Cancel]').attr('data-dismiss', 'modal');

    $('.caldera_forms_form').submit(function (e) {
        e.preventDefault();
        function explode() {
            $('.form-success-info').toggleClass('hide');
        }

        explode();
        setTimeout(explode, 3000);
        function submit() {
            $('#volunteers-application-form').toggleClass('hide');
        }

        setTimeout(submit, 8000);
        this.submit();
    });
});
