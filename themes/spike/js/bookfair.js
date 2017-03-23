$(function () {
    var length,
        currentIndex = 0,
        interval,
        hasStarted = false, //是否已经开始轮播
        t = 5000; //轮播时间间隔
    length = $('.slider-panel').length;
    //将除了第一张图片隐藏
    $('.slider-panel:not(:first)').hide();
    //将第一个slider-item设为激活状态
    $('.slider-item:first').addClass('slider-item-selected');

    //鼠标上悬时显示向前、向后翻按钮,停止滑动，鼠标离开时隐藏向前、向后翻按钮，开始滑动
    $('.slider-panel, .slider-pre, .slider-next').hover(function () {
        stop();
    }, function () {
        start();
    });
    $('.slider-item').hover(function (e) {
        stop();
        var preIndex = $(".slider-item").filter(".slider-item-selected").index();
        currentIndex = $(this).index();
        play(preIndex, currentIndex);
    }, function () {
        start();
    });

    function pre() {
        var preIndex = currentIndex;
        currentIndex = (--currentIndex + length) % length;
        play(preIndex, currentIndex);
    }

    function next() {
        var preIndex = currentIndex;
        currentIndex = ++currentIndex % length;
        play(preIndex, currentIndex);
    }

    function play(preIndex, currentIndex) {
        $('.slider-panel').eq(preIndex).fadeOut(500)
            .parent().children().eq(currentIndex).fadeIn(1000);
        $('.slider-item').removeClass('slider-item-selected');
        $('.slider-item').eq(currentIndex).addClass('slider-item-selected');
    }

    function start() {
        if (!hasStarted) {
            hasStarted = true;
            interval = setInterval(next, t);
        }
    }

    function stop() {
        clearInterval(interval);
        hasStarted = false;
    }

    start();
});
