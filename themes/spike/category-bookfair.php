<script src="<?php bloginfo('template_url'); ?>/js/bookfair.js"></script>
<div id="book-market">
    <div class="book-take-change">
        <div class="book-change-top"><h2 class="middle-title">一本书带来的改变</h2>
            <p class="middle-describe">每个月我们都会在选定的国际学校举办大、小型书市（学校假期除外）。</p></div>
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-xs-10 col-xs-offset-1">
                <div class="slider">
                    <ul class="slider-main">
                        <li class="slider-panel">
                            <img src="<?php bloginfo('template_url'); ?>/images/home/hero_index.png">
                        </li>
                        <li class="slider-panel">
                            <img src="<?php bloginfo('template_url'); ?>/images/gallery/gallery_1.jpg">
                        </li>
                        <li class="slider-panel">
                            <img src="<?php bloginfo('template_url'); ?>/images/donate/hero_donate.png">
                        </li>
                    </ul>
                    <div class="slider-extra">
                        <ul class="slider-nav">
                            <li class="slider-item"></li>
                            <li class="slider-item"></li>
                            <li class="slider-item"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bookfair-notice">
        <div><h2 class="middle-title">书市预告</h2></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 col-sm-12">
                    <div class="row news-event-switch text-right">
                        <div><span class="">列表</span><span class="">&nbsp; |&nbsp;日历</span></div>
                    </div>
                    <div id="news-event" class="">
                        <div>
                            <?php
                            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                            $query = new WP_Query( array( 'tag' => 'bookfair_notice', 'posts_per_page' => 2 ,'paged' => $paged) );
                            $posts = $query->posts;
                            foreach ($posts as $post){
                                $title = $post->post_title;
                                $content = $post->post_content;
                                $custom_fields = get_post_custom($post->ID);
                                $name = $custom_fields['head_name'];
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
                        </div>
                        <div class="my-pagination col-sm-12 pagination-style row">
                            <?php page_pagination($query); ?>
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
                                                    <div class="day col-xs-1 col-sm-1 eventDay"
                                                         aria-describedby="tooltip">28
                                                    </div>
                                                </div>
                                                <div class="day col-xs-1 col-sm-1 usualDay">1</div>
                                                <div class="day col-xs-1 col-sm-1 usualDay">2</div>
                                                <div class="day col-xs-1 col-sm-1 usualDay">3</div>
                                                <div class="day col-xs-1 col-sm-1 usualDay">4</div>
                                                <div>
                                                    <div class="day col-xs-1 col-sm-1 eventDay"
                                                         aria-describedby="tooltip">5
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
                                                    <div class="day col-xs-1 col-sm-1 eventDay"
                                                         aria-describedby="tooltip">16
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
                                                    <div class="day col-xs-1 col-sm-1 eventDay"
                                                         aria-describedby="tooltip">28
                                                    </div>
                                                </div>
                                                <div class="day col-xs-1 col-sm-1 usualDay">29</div>
                                                <div>
                                                    <div class="day col-xs-1 col-sm-1 eventDay"
                                                         aria-describedby="tooltip">30
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
    <div class="bookfair-review">
        <div><h2 class="middle-title">往届书市回顾</h2></div>
        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-xs-12">
                <div class="bookfair-news">

                    <?php
                    $query = new WP_Query( array( 'tag' => 'previous_bookfair', 'posts_per_page' => 4 ) );
                    $arr = $query->posts;
                    foreach ($arr as $result) {
                        $title = $result->post_title;
                        $content = $result->post_content;
                        $custom_fields = get_post_custom($result->ID);
                        $time = $custom_fields['news_time'];
                        $image = get_field('img', $result->ID);
                        ?>
                        <div class="row margin-bottom">
                            <div class="col-xs-4"><img src="<?php echo $image['url']; ?>" alt="img">
                            </div>
                            <div class="col-xs-8 words">
                                <div><h4 class="news-title"><?php
                                        echo $title ?></h4>
                                    <p class="news-time"><?php
                                        echo $time[0] ?></p></div>
                                <div><p class="news-content css-wrap"><?php
                                        echo $content ?></p>
                                </div>
                                <div class="learn-more"><p><a href="<?php the_permalink($result->ID); ?>">Learn More
                                            &gt; </a></p></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

