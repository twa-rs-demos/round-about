$(function(){

    console.log('--------------zhuru-------------');
    var datas = __injectedDemoVars.datas;
    // console.log(datas);
    // datas = _.chunk(datas,2);

    console.log(datas);

    <!--      php获取数据-->
    // var num=0;
    adddata();


    // function getTweets() {
    //     $.ajax("http://api.twitter.com/statuses/user_timeline/danwellman.json", {
    //         success: function(data) {
    //             var arr = [];
    //
    //             for (var x = 0; x < 5; x++) {
    //                 var dataItem = {};
    //                 dataItem["tweetlink"] = data[x].id_str;
    //                 dataItem["timestamp"] = convertDate(data, x);
    //                 dataItem["text"] = breakTweet(data, x);
    //                 arr.push(dataItem);
    //             }
    //
    //             tweetData = arr;
    //         }
    //     });
    // }

    // $("#demo-ul li").click(function() {
    //     num= $(this).index(); // get id of clicked li
    //     $('#yoyo').children().remove();
    //     adddata();
    // });

    function adddata() {
        $('#donateTemplate').tmpl(datas).appendTo('#donate-template');
    }

});