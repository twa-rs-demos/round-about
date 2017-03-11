$(document).ready(function () {
    $(".circle").hover(function () {
        document.querySelector('div.select-events').setAttribute("class", 'select-events');
    }, function () {
        document.querySelector('div.select-events').setAttribute("class", 'select-events hidden');
    });
});