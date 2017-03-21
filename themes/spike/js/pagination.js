$(function () {
    $('body').ready(function () {
        $('.dots').toggleClass('page-numbers');
        $('.next')[0].innerText = '>';
        if ($('.prev')[0]) {
            $('.prev')[0].innerText = '<';
        }

    })
});
