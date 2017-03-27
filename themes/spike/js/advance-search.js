$(function () {
    $('.submit-search-icon').click(function () {
        $('.wpas-submit').click();
    });

    $('.filter-button').click(function (e) {
        $(this).addClass('active');
        $('#search_query').val($(this).text());
        $('.wpas-submit').click();
    });

    $(".advanced-search").click(function () {
        $(this).parent().next().toggleClass('hide');
        $('#filter-form').focus();
    });

    $('#filter-form').blur(function () {
        $('#filter-form').toggleClass('hide');
    });
});