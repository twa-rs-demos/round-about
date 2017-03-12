<?php get_header(); ?>

<div class="grid_12 caption clearfix"> //wordpress中page
  <?php
  remove_filter('the_content', 'wpautop');
  while (have_posts()):
    the_post();
    the_content();
  endwhile; ?>
</div>

<?php get_footer(); ?>
