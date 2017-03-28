<script src="<?php bloginfo('template_url'); ?>/js/advance-search.js"></script>
<div id="news-and-event">
  <div class="picture-max"
       style="background-repeat: no-repeat; background-size: cover; background-image: url(<?php bloginfo('template_url'); ?>/images/newsAndEvent/hero_news&events.png); background-position: center center;"></div>
  <div class="container news-event-title"><h2 class="middle-title">众爱新闻</h2>
    <div class="news_event_category row">
      <div class="col-md-offset-1 col-md-10">
        <div class="col-md-3 col-md-offset-1 margin-bottom col-xs-12">

          <?php $search = new WP_Advanced_Search('newsAndEventsform');
          $search->the_form();
          ?>
          <img src='<?php bloginfo('template_url'); ?>/images/home/icon_search_small_focused.png' alt=''
               class="submit-search-icon"/>

        </div>
        <div class="col-md-2 col-xs-4">
          <button class="filter-button">募款</button>
        </div>
        <div class="col-md-2 col-xs-4">
          <button class="filter-button">书市</button>
        </div>
        <div class="col-md-2 col-xs-4">
          <button class="filter-button">活动</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 col-xs-12 col-sm-12">
        <div class="row news-event-switch text-right">
          <span class="news-list-btn choosed">列表</span>
          <span>&nbsp; |&nbsp;</span>
          <span class="calendar-btn ">日历</span>
        </div>
        <div id="news-event">
          <div>
            <?php
            $wp_query = $search->query();
            if ($wp_query->have_posts()):
              $posts = $wp_query->posts;

              foreach ($posts as $post):
                $title = $post->post_title;
                $content = $post->post_content;
                $custom_fields = get_post_custom($post->ID);
                $name = $custom_fields['name_news'];
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
                      <div class="col-md-5 col-sm-4 col-xs-4"><img src="<?php echo $image['url']; ?>" alt="img"/></div>
                      <div class="col-md-7 col-sm-8 col-xs-8 text">
                        <h3><a
                            href="<?php the_permalink($post->ID); ?>"><?php
                            echo $title; ?></a><br>

                          <?php
                          if ($name[0] != NULL) {
                            echo '@ ' . $name[0];
                          } ?>
                        </h3>
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
                              <div class="num-box"><?php

                                if ($start_day[0]) {

                                  echo $start_day[0];
                                } ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-10"><h4><?php
                              if ($start_date[0]) {
                                echo $start_date[0];
                              } ?>
                              <br><?php
                              if ($start_day_time[0]) {
                                echo $start_day_time[0];
                              }
                              ?>
                            </h4></div>
                        </div>
                      </div>
                      <div class="col-md-12 col-xs-6 margin-bottom">
                        <div class="row">
                          <div class="col-xs-2">
                            <div class="box-border">
                              <div class="num-box"><?php
                                if ($end_day[0]) {
                                  echo $end_day[0];
                                } ?></div>
                            </div>
                          </div>
                          <div class="col-xs-10"><h4><?php
                              if ($end_date[0]) {
                                echo $end_date[0];
                              } ?>
                              <br><?php if ($end_day_time[0]) {
                                echo $end_day_time[0];
                              } ?>
                            </h4></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              endforeach;

            else :
              echo '<p>Sorry, no results matched your search.</p>';
            endif;
            ?>
            <div class="my-pagination pagination-style row">
              <?php page_pagination($wp_query); ?>
            </div>
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