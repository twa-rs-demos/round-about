$(function(){

    // console.log('--------------zhuru-------------');
    var datas = __injectedDemoVars.datas;
    // console.log(datas);
    // datas = _.chunk(datas,2);
    <!--      php获取数据-->
    // var num=0;
    adddata();
    function adddata() {
        $('#donateTemplate').tmpl(datas).appendTo('#donate-template');
    }





    function getTweets() {
        $.ajax("http://demo:8080/", {
            success: function(data) {
                var arr = [];

                for (var x = 0; x < 5; x++) {
                    var dataItem = {};
                    dataItem["tweetlink"] = data[x].id_str;
                    dataItem["timestamp"] = convertDate(data, x);
                    dataItem["text"] = breakTweet(data, x);
                    arr.push(dataItem);
                }

                tweetData = arr;
            }
        });
    }

    // $("#demo-ul li").click(function() {
    //     num= $(this).index(); // get id of clicked li
    //     $('#yoyo').children().remove();
    //     adddata();
    // });



});