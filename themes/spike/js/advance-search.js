$(function () {
    $('.submit-search-icon').click(function () {
        $('.wpas-submit').click();
    });

    $('.filter-button').click(function () {
        $('#search_query').val($(this).text());
        $('.wpas-submit').click();
    });
});