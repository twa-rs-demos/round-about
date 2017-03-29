<?php
$js_file = 'js/aboutus-zh.js';
printf('<script type="text/javascript" src="%s/%s" ></script>', get_template_directory_uri(), $js_file);
?>


<div id="aboutUs">
  <div id="aboutUs-header"><h3 class="middle-title aboutUs-title">每个孩子都应该享有同样的机会</h3>
    <div class="text-center"><a href="/tw-ra/donate_zh">
        <button class="button-style button-change-destiny">改变TA的命运</button>
      </a></div>
    <div class="video about-video row">
      <div class="col-md-offset-2 col-md-8 col-xs-12">
        <embed src="http://player.youku.com/player.php/sid/XMTM1NjIyMTA0NA==/v.swf"
               type="application/x-shockwave-flash"
               class="video-content">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-offset-2 col-xs-8" id="aboutUs-content"><h3 class="middle-title aboutUs-title">众爱都做些什么？</h3>
      <p class="aboutUs-describe">RoundAbout is a social enterprise headed by volunteers.We provide a free service
        connecting those who wishes to give.be that monetary or otherwise,to those in need.Started in 2008,we were the
        first charity.</p>
      <h3 class="middle-title aboutUs-title">众爱是怎么开始的？</h3>
      <p class="aboutUs-describe">RoundAbout is a social enterprise headed by volunteers.We provide a free service
        connecting those who wishes to give.be that monetary or otherwise,to those in need.Started in 2008,we were the
        first charity.</p></div>
  </div>
  <div id="aboutUs-footer" class="row">
    <h3 class="middle-title aboutUs-event">众爱大事记</h3>
    <div class="container aboutUs-container">
      <div class="row">
        <div class="col-md-offset-1 col-md-1  col-xs-offset-1 col-xs-1 no-padding-right">
          <div class="time-line">
            <div class="circle-year"></div>
          </div>
        </div>

        <?php
        $query = new WP_Query(array('tag' => 'roundabout_events','posts_per_page'=>-1));
        $posts = $query->posts;

        function sort_by_title($a, $b)
        {
          return $a->post_title - $b->post_title;
        }

        usort($posts, 'sort_by_title');

        $i = 0;

        foreach ($posts as $post) {
          $i++;
          $title = $post->post_title;
          $custom_fields = get_post_custom($post->ID);
          $first_event = $custom_fields['first_event'];
          $first_event_time = $custom_fields['first_event_time'];
          $second_event = $custom_fields['second_event'];
          $second_event_time = $custom_fields['second_event_time'];
          if ($i >= 8) break;
          ?>

          <div class="col-md-1 col-xs-1 no-padding">
            <div class="time-line">
              <div class="circle-year">
                <span class="year"><?php echo $title ?></span>
                <i
                  class="fa fa-dot-circle-o circle"
                  onmouseover="show(<?php echo $title ?>)"
                  onmouseout="hide(<?php echo $title ?>)">
                </i>
              </div>
            </div>
            <div class='select<?php echo $title ?> hidden'>
              <div class="about-years-events">
                <div class="fist-event">
                  <div>
                    <?php if ($first_event[0] != 'null') {
                      echo $first_event[0];
                    } ?>
                  </div>
                  <div>
                    <?php if ($first_event_time[0] != 'null') {
                      echo $first_event_time[0];
                    } ?>
                  </div>
                </div>
                <div class="second-event">
                  <div>
                    <?php if ($second_event[0] != 'null') {
                      echo $second_event[0];
                    } ?>
                  </div>
                  <div>
                    <?php if ($second_event_time[0] != 'null') {
                      echo $second_event_time[0];
                    } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php }
        ?>
        <div class="col-md-1 col-xs-1 no-padding"><i class="fa fa-caret-right circle chevron"> </i></div>
      </div>
    </div>
  </div>
</div>