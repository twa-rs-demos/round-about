$(function () {
    $('.become-volunteer').click(function () {
        // console.log($(this).next());
        $(this).next().attr('class','volunteer-form');
    })



    // $(".become-volunteer").hover(function () {
    //     $('.donate-rules').attr("class", "donate-rules");
    // });
    $(".close").click(function () {
        $('.volunteer-form').attr("class", "volunteer-form hide");
    });
});