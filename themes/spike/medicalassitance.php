<?php get_header(); ?>

<div id="medical-assistance" class="row">
  <div class="col-xs-12 no-padding">
    <div class="assistance-top">
      <div><h2 class="middle-title">医疗救助</h2></div>
      <div class="assistence-pic-container">

        <img src="<?php bloginfo('template_url'); ?>/images/assistance/banner_store.png">

      </div>
      <div class="col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10 assistance-describe"><p
          class="css-wrap describe-p">RoundAbout is a social enterprise headed by volunteer. We provide a
          free service connecting those who wish to give, be that monetary of otherwise,to those in need.
          Started in 2008,we</p></div>
    </div>
  </div>
  <div class="col-sm-offset-1 col-sm-10 no-padding">
    <div class="volunteer-stories"><h2 class="middle-title"></h2>
      <div class="row text-center">
        
        
        <?php
        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
        $args = array(
          'posts_per_page' => 8,
          'category_name' => 'medical_assistance_zh',
          'paged' => $paged
        );
        $posts_query = new WP_Query($args);
        $posts_array = $posts_query->posts;
        
        ?>
        
        <?php foreach ($posts_array as $post) : setup_postdata($post);
          $img = get_field("img", $post->ID); ?>

          <div class="col-md-3 col-sm-4 col-xs-6 no-padding story-item">
            <img
              src="<?php echo $img['url']; ?>"
              alt="img"
              class="story-picture">
            <p>  <?php echo $post->post_title ?></p>
            <a href="<?php the_permalink($post->ID); ?>"> Read more > </a>
          </div>
        
        <?php endforeach;
        wp_reset_postdata(); ?>

      </div>
    </div>
    <div class="row">
      <div class="col-md-offset-1 col-md-10">
        <div class="my-pagination pagination-style col-md-offset-1">
          <?php page_pagination($posts_query); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>





