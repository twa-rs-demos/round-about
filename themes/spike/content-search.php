<article id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
  <?php $image = get_field('img', get_the_ID()); ?>
  <div class='row post-item'>
    <?php if ($image) {
      echo "<img src=" . $image['url'] . " alt='img' class='col-xs-3'/>";
    } ?>
    <div class="entry-content  col-xs-9">
      <?php

      if (is_single()) :
        the_title('<h3 class="entry-title">', '</h3>');
      else :
        the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
      endif;

      the_content(sprintf(
        __('Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyfourteen'),
        the_title('<span class="screen-reader-text">', '</span>', false)
      ));
      ?>
    </div>
  </div>
  <footer>
<!--    --><?php //the_tags('<footer class="entry-meta"><span class="tag-links">', '', '</span>'); ?>
  </footer>
</article>
