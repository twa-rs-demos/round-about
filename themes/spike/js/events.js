$(function () {
    $('.become-volunteer').click(function () {
        $(this).next().attr('class', 'volunteer-form');
    });

    $(".close").click(function () {
        $('.volunteer-form').attr("class", "volunteer-form hide");
    });

    $('.news-list-btn').click(function () {
        $('#news-event').attr('class', 'news');
        $('.calendar').attr('class', 'calendar hide');
        $('.calendar-btn').removeClass('choosed');
        $('.news-list-btn').addClass('choosed');

    });

    $('.calendar-btn').click(function () {
        $('#news-event').attr('class', 'hide');
        $('.calendar').attr('class', 'calendar');
        $('.calendar-btn').addClass('choosed');
        $('.news-list-btn').removeClass('choosed');

    });
});