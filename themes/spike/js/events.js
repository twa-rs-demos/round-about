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
        console.log("lllll")
       $('#news-event').attr('class','news');
       $('.calendar').attr('class','calendar hide');
       $('.calendar-btn').removeClass('choosed');
       $('.news-list-btn').addClass('choosed');

    });

    $('.calendar-btn').click(function(){
        console.log("nnnnnn")

        $('#news-event').attr('class','hide');
        $('.calendar').attr('class','calendar');
        $('.calendar-btn').addClass('choosed');
        $('.news-list-btn').removeClass('choosed');

    });
});