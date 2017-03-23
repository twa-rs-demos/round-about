$(function () {
    /*
     * 用于记录日期，显示的时候，根据dateObj中的日期的年月显示
     */
    var dateObj = (function () {
        var _date = new Date();    // 默认为当前系统时间
        return {
            getDate: function () {
                return _date;
            },
            setDate: function (date) {
                _date = date;
            }
        };
    })();


    // 表格中显示日期
    showCalendarData();
    // 绑定事件
    bindEvent();


    /**
     * 表格中显示数据，并设置类名
     */
    function showCalendarData() {

        var _year = dateObj.getDate().getFullYear();
        var _month = dateObj.getDate().getMonth() + 1;
        var _dateStr = getDateStr(dateObj.getDate());

        // 设置顶部标题栏中的 年、月信息
        var calendarTitle = $("#calendarTitle");
        var titleStr = _dateStr.substr(0, 4) + "年" + _dateStr.substr(4, 2) + "月";
        calendarTitle.html(titleStr);

        // 设置表格中的日期数据
        var _tds = $("div[name='calendar-day']");
        var _firstDay = new Date(_year, _month - 1, 1);  // 当前月第一天
        for (var i = 0; i < _tds.length; i++) {
            var _thisDay = new Date(_year, _month, i + 1 - _firstDay.getDay());
            var _thisDayStr = getDateStr(_thisDay);
            _tds[i].innerText = _thisDay.getDate();
            _tds[i].setAttribute('data', _thisDayStr);

            var curr_date = _thisDay.getDate();
            var curr_month = _thisDay.getMonth();
            var curr_year = _thisDay.getFullYear();


            var formatDate = curr_year + '-' + format(curr_month) + '-' + format(curr_date);


            _newsEvents.find((event) => {

                if (event.time.split(" ")[0] == formatDate) {
                    _tds[i].className += ' new-events-Day';
                    var eventDay = event.time.split(" ")[0].split("-");
                    var eventDateText = eventDay[1] + "月"　+ eventDay[2]+"日";
                    if(_tds[i].innerHTML.length<3){
                        _tds[i].innerHTML +=   "<div class='event-region'><i class='fa fa-caret-up fa-lg' aria-hidden='true'></i></div>";

                        _tds[i].innerHTML += "" +
                            "<div id='eventDay' class='news-pop '> " +
                                        "<div class='row  '> " +
                                                    "<div class='col-xs-5 new-events-img'> " +
                                                      `<img src=${event.img}` +　" class='new-events-img'  alt='img'/>" +
                                                    "</div> " +
                                                    "<div class='col-xs-9　event-date'> " +
                                                           "<div class='event-date'> " +
                                                               "<p class='date'>"+eventDateText +"</p>" +
                                                               "<p class='time'>" + event.activityTime +"</p> " +
                                                               "<p class='content'>"+ event.content+"</p> " +
                                                            "</div> " +
                                                    "</div> " +
                                        "</div> " +
                                "</div>" ;
                    }
                    return true;
                } else {
                    var classNameArr = _tds[i].className.split(" ");
                    var index = classNameArr.indexOf('new-events-Day');
                    if (index > 0) {
                        classNameArr.splice(index, 1);
                    }
                    _tds[i].className = classNameArr.join(" ");
                }
            })


            if (_thisDayStr == getDateStr(new Date())) {    // 当前天
                _tds[i].className += ' current-day';
            }
        }
    }


    function format(m) {
        return m < 10 ? '0' + m : m
    }

    $(".new-events-Day").hover(function () {
        $(this).find('.news-pop').css('display', 'block');
        $(this).find('.event-region').css('display', 'block');
    }, function () {
        $(this).find('.news-pop').css("display", "none");
        $(this).find('.event-region').css("display", "none");
    });

    /**
     * 绑定上个月下个月事件
     */
    function bindEvent() {
        var prevMonth = document.getElementById("prevMonth");
        var nextMonth = document.getElementById("nextMonth");
        addEvent(prevMonth, 'click', toPrevMonth);
        addEvent(nextMonth, 'click', toNextMonth);
    }

    /**
     * 绑定事件
     */
    function addEvent(dom, eType, func) {
        if (dom.addEventListener) {  // DOM 2.0
            dom.addEventListener(eType, function (e) {
                func(e);
            });
        } else if (dom.attachEvent) {  // IE5+
            dom.attachEvent('on' + eType, function (e) {
                func(e);
            });
        } else {  // DOM 0
            dom['on' + eType] = function (e) {
                func(e);
            }
        }
    }

    /**
     * 点击上个月图标触发
     */
    function toPrevMonth() {
        var date = dateObj.getDate();
        dateObj.setDate(new Date(date.getFullYear(), date.getMonth() - 1, 1));
        showCalendarData();
    }

    /**
     * 点击下个月图标触发
     */
    function toNextMonth() {
        var date = dateObj.getDate();
        dateObj.setDate(new Date(date.getFullYear(), date.getMonth() + 1, 1));
        showCalendarData();
    }

    /**
     * 日期转化为字符串， 4位年+2位月+2位日
     */
    function getDateStr(date) {
        var _year = date.getFullYear();
        var _month = date.getMonth() + 1;    // 月从0开始计数
        var _d = date.getDate();

        _month = (_month > 9) ? ("" + _month) : ("0" + _month);
        _d = (_d > 9) ? ("" + _d) : ("0" + _d);
        return _year + _month + _d;
    }
});