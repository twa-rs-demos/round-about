<?php get_header(); ?>
<?php the_breadcrumb(); ?>

<?php the_breadcrumb(); ?>

<div class="grid_12 caption clearfix">
  <?php
  remove_filter('the_content', 'wpautop');
  while (have_posts()):
    the_post();
    the_content();
  endwhile; ?>
</div>

<?php get_footer(); ?>
