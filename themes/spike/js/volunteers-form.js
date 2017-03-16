$(function () {
    $('.become-volunteer').click(function () {
        $(this).next().attr('class', 'volunteer-form');
    });

    $(".close").click(function () {
        $('.volunteer-form').attr("class", "volunteer-form hide");
    });

    $(".advanced-search").click(function () {
        $(this).parent().next().attr('class', 'filter-form');
    });

    $(".close").click(function () {
        console.log("kkkk");
        $(this).parents(".filter-form").attr("class", "filter-form hide");
        // $('.filter-form').attr("class", "vvv hide");

    });
});