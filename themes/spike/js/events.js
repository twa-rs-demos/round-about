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
        $(this).parents(".filter-form").attr("class", "filter-form hide");

    });



    $('.news-list-btn').click(function(){
       $('#news-event').attr('class','news');
       $('.calender').attr('class','calender hide');
       $('.calender-btn').removeClass('choosed');
       $('.news-list-btn').addClass('choosed');

    });

    $('.calender-btn').click(function(){
        $('#news-event').attr('class','hide');
        $('.calender').attr('class','calender');
        $('.calender-btn').addClass('choosed');
        $('.news-list-btn').removeClass('choosed');

    });
});