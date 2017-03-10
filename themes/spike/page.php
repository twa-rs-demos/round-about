<?php get_header(); ?>

<h2 class="grid_12 caption clearfix">
  <?php
  while (have_posts()):
    the_post();
    the_content();
  endwhile; ?>
</h2>

<?php get_footer(); ?>
