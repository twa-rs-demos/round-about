<div id="medical-assistance" class="row">
  <div class="col-xs-12 no-padding">
    <div class="assistance-top">
      <div><h2 class="middle-title"><?php echo date('F Y'); ?></h2></div>
      <div class="assistence-pic-container">
        <img
          src="<?php bloginfo('template_url'); ?>/images/assistance/banner_store.png">
      </div>
      <div class="col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10 assistance-describe"><p class=""></p></div>
    </div>
  </div>
  <div class="col-sm-offset-1 col-sm-10 no-padding">
    <div class="volunteer-stories"><h2 class="middle-title"></h2>
      <div class="row text-center">
        <?php
        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
        $args = array(
          'posts_per_page' => 8,
          'category_name' => 'newsletter_center_zh',
          'paged' => $paged
        );
        $posts_query = new WP_Query($args);
        $posts = $posts_query->posts;
        $time = date('m');
        foreach ($posts as $post) : setup_postdata($post);
          $every_time = substr($post->post_date, 5, 2);
          if ($time != $every_time) {
            break;
          } else {
            $img = get_field("img", $post->ID); ?>
            <div class="col-md-3 col-sm-4 col-xs-6 no-padding story-item"><img
                src="<?php bloginfo('template_url'); ?>/images/getInvolvedVolunteer/volunteer story01.png"
                class="story-picture">
              <p>  <?php echo $post->post_title ?></p>
              <a href="<?php the_permalink($post->ID); ?>"> Read more > </a>
            </div>
            <?php
          }
        endforeach; ?>
      </div>
      <div class="my-pagination pagination-style row">
        <?php page_pagination($posts_query); ?>
      </div>
    </div>
  </div>
</div>