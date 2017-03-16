<?php get_header()?>

<div id="news-and-event">
    <div class="picture-max"
         style="background-repeat: no-repeat; background-size: cover; background-image: url(<?php bloginfo('template_url'); ?>/images/newsAndEvent/hero_news&events.png); background-position: center center;"></div>
    <div class="container news-event-title"><h2 class="middle-title">众爱新闻</h2>
        <div class="news_event_category row">
            <div class="col-md-offset-1 col-md-10">
                <div class="col-md-3 col-md-offset-1 margin-bottom col-xs-12"><input placeholder="搜索新闻"></div>
                <div class="col-md-2 col-xs-4">
                    <button>募款</button>
                </div>
                <div class="col-md-2 col-xs-4">
                    <button>书市</button>
                </div>
                <div class="col-md-2 col-xs-4">
                    <button>活动</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12 col-sm-12">
                <div class="row news-event-switch text-right">
                    <div><span class="choosed">列表</span><span class="">&nbsp; |&nbsp;日历</span></div>
                </div>
                <div id="news-event" class="">
                    <div>
                        <?php
                        $newsandevent_cat = get_category_by_slug('newsandevents_zh');
                        $posts = get_posts(array('posts_per_page' => 4,
                            'category__in' => array($newsandevent_cat->cat_ID)));
                        foreach ($posts as $post){
                            $title = $post->post_title;
                            $content = $post->post_content;
                            $custom_fields = get_post_custom($post->ID);
                            $name = $custom_fields['name_news'];
                            $image = get_field('img', $post->ID);
                            ?>

                            <div class="row row-margin-bottom">
                                <div class="col-md-9 col-xs-12">
                                    <div id="events" class="row">
                                        <div class="col-md-5 col-sm-4 col-xs-4"><img src="<?php echo $image['url']; ?>" alt="img" /></div>
                                        <div class="col-md-7 col-sm-8 col-xs-8 text"><h3><a href="<?php  the_permalink($post->ID); ?>"><?php
                                                    echo $title; ?></a><br><?php
                                                echo '@ '.$name[0] ?></h3>
                                            <p><?php
                                                echo $content; ?></p></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-12 no-display">
                                    <div id="date-list" class="row">
                                        <div class="col-md-12 col-xs-6 margin-bottom ">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <div class="box-border">
                                                        <div class="num-box">28</div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-10"><h4>Fri, 13 March
                                                        <br>10:00am-14:00pm
                                                    </h4></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xs-6 margin-bottom">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <div class="box-border">
                                                        <div class="num-box">28</div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-10"><h4>Fri, 13 March
                                                        <br>10:00am-14:00pm
                                                    </h4></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>



                        <div class="pagination-project">
                            <ul class="pagination">
                                <li class=""><a><i class="fa fa-chevron-left"></i></a></li>
                                <li class=""><a name="1">
                                        1</a></li>
                                <li class=""><a name="2">
                                        2</a></li>
                                <li class=""><a name="3">
                                        3</a></li>
                                <li class=""><a><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hidden">
                    <div id="calendar">
                        <div id="calendar-header">
                            <div class="text-center calendar-header"><i
                                        class="fa fa-caret-left fa-4x icon-style icon-left"></i><span
                                        class="year-style">2016
                                     3
                                    月</span><i
                                        class="fa fa-caret-right fa-4x icon-style icon-right"></i></div>
                        </div>
                        <div id="calendar-body">
                            <div class="row">
                                <div class="col-xs-offset-2 col-xs-10 col-sm-offset-2 col-sm-10">
                                    <div class="row weekday">
                                        <div class="col-sm-1 col-xs-1 weekdays">日</div>
                                        <div class="col-sm-1 col-xs-1 weekdays">一</div>
                                        <div class="col-sm-1 col-xs-1 weekdays">二</div>
                                        <div class="col-sm-1 col-xs-1 weekdays">三</div>
                                        <div class="col-sm-1 col-xs-1 weekdays">四</div>
                                        <div class="col-sm-1 col-xs-1 weekdays">五</div>
                                        <div class="col-sm-1 col-xs-1 weekdays">六</div>
                                    </div>
                                    <div class="CalendarDay">
                                        <div class="row">
                                            <div class="day col-xs-1 col-sm-1 usualDay">29</div>
                                            <div>
                                                <div class="day col-xs-1 col-sm-1 eventDay" aria-describedby="tooltip">
                                                    28
                                                </div>
                                            </div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">1</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">2</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">3</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">4</div>
                                            <div>
                                                <div class="day col-xs-1 col-sm-1 eventDay" aria-describedby="tooltip">
                                                    5
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="day col-xs-1 col-sm-1 usualDay">6</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">7</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">8</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">9</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">10</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">11</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">12</div>
                                        </div>
                                        <div class="row">
                                            <div class="day col-xs-1 col-sm-1 usualDay">13</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">14</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">15</div>
                                            <div>
                                                <div class="day col-xs-1 col-sm-1 eventDay" aria-describedby="tooltip">
                                                    16
                                                </div>
                                            </div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">17</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">18</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">19</div>
                                        </div>
                                        <div class="row">
                                            <div class="day col-xs-1 col-sm-1 usualDay">20</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">21</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">22</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">23</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">24</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">25</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">26</div>
                                        </div>
                                        <div class="row">
                                            <div class="day col-xs-1 col-sm-1 usualDay">27</div>
                                            <div>
                                                <div class="day col-xs-1 col-sm-1 eventDay" aria-describedby="tooltip">
                                                    28
                                                </div>
                                            </div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">29</div>
                                            <div>
                                                <div class="day col-xs-1 col-sm-1 eventDay" aria-describedby="tooltip">
                                                    30
                                                </div>
                                            </div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">31</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">1</div>
                                            <div class="day col-xs-1 col-sm-1 usualDay">2</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer()?>

