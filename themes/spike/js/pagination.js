$(function () {
    $('body').ready(function () {
        $('.navigation').find("ul li:first-child ").find('a')[0].innerText = '<';
        $('.navigation').find("ul li:last-child ").find('a')[0].innerText = '>';
    })
});
