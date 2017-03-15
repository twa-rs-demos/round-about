$(function () {
    $('.become-volunteer').click(function () {
        console.log($(this).next());
        $(this).next().attr('class','');
    })
});