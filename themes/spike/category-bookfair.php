<script src="<?php bloginfo('template_url'); ?>/js/auto-carousel.js"></script>
<script type="text/javascript">
    var _newsEvents = [];
    <?php
    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
    $query = new WP_Query(array('tag' => 'bookfair_notice', 'posts_per_page' => 2, 'paged' => $paged));
    $posts_array = $query->posts;
    ?>

    <?php foreach ($posts_array as $post) : setup_postdata($post);
    $time = $post->post_date;
    $custom_fields = get_post_custom($post->ID);
    $activityTime = $custom_fields['activity-time'];
    $content = $post->post_content;
    $image = get_field('img', $post->ID);
    ?>

    _newsEvents.push({
        time:<?php  echo json_encode($time);?>,
        activityTime:<?php echo json_encode($activityTime[0])?>,
        content:<?php  echo json_encode($content);?>,
        img:<?php echo json_encode($image['url']);?>,
    });

    <?php endforeach;
    wp_reset_postdata(); ?>

</script>

<div id="book-market">
  <div class="book-take-change">
    <div class="book-change-top"><h2 class="middle-title">一本书带来的改变</h2>
      <p class="middle-describe">每个月我们都会在选定的国际学校举办大、小型书市（学校假期除外）。</p></div>
    <div class="row">
      <div class="col-md-offset-2 col-md-8 col-xs-10 col-xs-offset-1">
        <div class="slider">
          <ul class="slider-main">
            <?php
            $args = array(
              'numberposts' => 4,
              'post_type' => 'post',
              'category_name' => 'bookfair_zh'
            );
            $posts = get_posts($args);
            $length = sizeof($posts);
            foreach ($posts as $post) {
              $img = get_field("img", $post->ID); ?>
              <li class="slider-panel">
                <img src="<?php echo $img['url']; ?>">
              </li>
            <?php } ?>
          </ul>
          <div class="slider-extra">
            <ul class="slider-nav">
              <?php if ($length > 1) {
                while ($length--) { ?>
                  <li class="slider-item"></li>
                <?php }
              } ?>
            </ul>
          </div>
          <div class="join_volunteer_button">
            <button data-toggle="modal" data-target="#volunteers-application-form1">加入志愿者行列</button>
          </div>

          <div class="modal fade caldera-forms" id="volunteers-application-form1" tabindex="-1" role="dialog"
               aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog form-modal round-about-form">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                  </button>
                  <h4 class="modal-title" id="myModalLabel">
                    VOLUNTEERS APPLICATION FORM
                  </h4>
                </div>
                <div class="modal-body">
                  <?php $form = get_post(1234);
                  echo do_shortcode($form->post_content);
                  ?>
                </div>
              </div>
              <div class="hide form-success-info">
                <span class="normal-success-info">提交成功</span>
              </div>
            </div>
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
            <span class="news-list-btn choosed">列表</span>
            <span>&nbsp; |&nbsp;</span>
            <span class="calendar-btn ">日历</span>

          </div>
          <div id="news-event" class="">
            <div>
              <?php
              $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
              $query = new WP_Query(array('tag' => 'bookfair_notice', 'posts_per_page' => 2, 'paged' => $paged));
              $posts = $query->posts;
              foreach ($posts as $post) {
                $title = $post->post_title;
                $content = $post->post_content;
                $custom_fields = get_post_custom($post->ID);
                $name = $custom_fields['head_name'];
                $image = get_field('img', $post->ID);
                $start_day = $custom_fields['start_day'];
                $end_day = $custom_fields['end_day'];
                $start_date = $custom_fields['start_date'];
                $end_date = $custom_fields['end_date'];
                $start_day_time = $custom_fields['start_day_time'];
                $end_day_time = $custom_fields['end_day_time'];

                ?>

                <div class="row row-margin-bottom">
                  <div class="col-md-9 col-xs-12">
                    <div id="events" class="row">
                      <div class="col-md-5 col-sm-4 col-xs-4 no-padding"><img
                          src="<?php echo $image['url']; ?>" alt="img"/></div>
                      <div class="col-md-7 col-sm-8 col-xs-8 text"><h3><a
                            href="<?php the_permalink($post->ID); ?>"><?php
                            echo $title; ?></a><br><?php
                          echo '@ ' . $name[0] ?></h3>
                        <p><?php
                          echo $content; ?></p></div>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-12 no-display">
                    <div id="date-list" class="row">
                      <div class="col-md-12 col-xs-6 margin-bottom no-padding">
                        <div class="row">
                          <div class="col-xs-2 no-padding">
                            <div class="box-border">
                              <div class="num-box"><?php echo $start_day[0]; ?></div>
                            </div>
                          </div>
                          <div class="col-xs-10"><h4><?php echo $start_date[0] ?>
                              <br><?php echo $start_day_time[0] ?>
                            </h4></div>
                        </div>
                      </div>
                      <div class="col-md-12 col-xs-6 margin-bottom no-padding">
                        <div class="row">
                          <div class="col-xs-2 no-padding">
                            <div class="box-border">
                              <div class="num-box"><?php echo $end_day[0] ?></div>
                            </div>
                          </div>
                          <div class="col-xs-10"><h4><?php echo $end_date[0] ?>
                              <br><?php echo $end_day_time[0] ?>
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

          <div class="calendar hidden">
            <div id="calendar">
              <div id="calendar-header">
                <div class="text-center calendar-header">
                  <i class="fa fa-caret-left fa-4x icon-style icon-left" id="prevMonth"></i>
                  <span class="year-style" id="calendarTitle">   </span>
                  <i class="fa fa-caret-right fa-4x icon-style icon-right" id="nextMonth"></i></div>
              </div>
              <div id="calendar-body">
                <div class="row">
                  <div class="col-xs-offset-2 col-xs-10 col-sm-offset-3 col-sm-10">
                    <div class="row weekday">
                      <div class="col-sm-1 col-xs-1 weekdays ">日</div>
                      <div class="col-sm-1 col-xs-1 weekdays">一</div>
                      <div class="col-sm-1 col-xs-1 weekdays">二</div>
                      <div class="col-sm-1 col-xs-1 weekdays">三</div>
                      <div class="col-sm-1 col-xs-1 weekdays">四</div>
                      <div class="col-sm-1 col-xs-1 weekdays">五</div>
                      <div class="col-sm-1 col-xs-1 weekdays">六</div>
                    </div>
                    <div class="CalendarDay">
                      <div class="row">
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div>
                          <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"
                               aria-describedby="tooltip">

                          </div>
                        </div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div>
                          <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day" aria-describedby="tooltip">

                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                      </div>
                      <div class="row">
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div>
                          <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day" aria-describedby="tooltip">

                          </div>
                        </div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                      </div>
                      <div class="row">
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                      </div>
                      <div class="row">
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div>
                          <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day" aria-describedby="tooltip">

                          </div>
                        </div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div>
                          <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day" aria-describedby="tooltip">

                          </div>
                        </div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
                        <div class="day col-xs-1 col-sm-1 usualDay" name="calendar-day"></div>
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
          $query = new WP_Query(array('tag' => 'previous_bookfair', 'posts_per_page' => 4));
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