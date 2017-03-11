<?php get_header(); ?>

<div class="grid_12 caption clearfix">
  <?php
  while (have_posts()):
    the_post();
    the_content();
  endwhile; ?>
</div>

<?php get_footer(); ?>
