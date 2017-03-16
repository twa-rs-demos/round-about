$(function () {
    $('.become-volunteer').click(function () {
        $(this).next().attr('class', 'volunteer-form');
    });

    $(".close").click(function () {
        $('.volunteer-form').attr("class", "volunteer-form hide");
    });

    $(".advanced-search").click(function () {
        $(this).parent().next().attr('class', 'modal-content');
    });

});