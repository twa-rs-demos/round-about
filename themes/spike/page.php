<?php get_header(); ?>

<?php the_breadcrumb(); ?>

<div class="grid_12 caption clearfix">
  <?php
  remove_filter('the_content', 'wpautop');
    the_post();
    the_content();
  ?>
</div>

<?php get_footer(); ?>
