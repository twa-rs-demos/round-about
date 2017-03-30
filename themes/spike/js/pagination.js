$(function () {
    $('body').ready(function () {
        $('.dots').toggleClass('page-numbers');
        if ($('.next')[0]) {
            $('.next')[0].innerText = '>';
        }
        if ($('.prev')[0]) {
            $('.prev')[0].innerText = '<';
        }

    })
});
