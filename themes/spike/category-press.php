<?php get_header(); ?>

  <div id="media-report">
    <div class="picture-max event-img">

    </div>
    <div class="ra-in-media container">
      <div><h2 class="middle-title">媒体眼中的众爱</h2></div>
      <div class="row media-data-content">
        <div class="col-md-offset-2 col-md-8">
          <?php
          $press = get_category_by_slug('press_zh');
          $posts = get_posts(array('posts_per_page' => 9,
            'category__in' => array($press->cat_ID)));
          foreach ($posts as $post) {
            $title = $post->post_title;
            $content = $post->post_content;
            $image = get_field('img', $post->ID);
            ?>
            <div class="col-md-4 col-sm-6 meida-item">
              <div class="media-img">
                <img src="<?php echo $image['url']; ?>" alt="img"/>
              </div>
              <div class="media-words">
                <h4 class="media-title pink">
                  <a href="<?php the_permalink($post->ID); ?>">
                    <?php echo $title; ?>
                  </a>
                </h4>
                <p class="css-wrap">
                  <?php echo $content; ?>
                </p>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
    <div class="touch">
      <div class="container">
        <div class="row">
          <div class="col-sm-offset-2 col-sm-9 col-xs-12 round-about-form">
            <div class="press-within-page-form">
              <?php $form = get_post(1884);
              echo do_shortcode($form->post_content);
              ?>
            </div>
            <div class="hide form-success-info">success</div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>