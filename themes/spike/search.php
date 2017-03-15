<?php get_header() ?>
<?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>
    <div><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></div>
  <?php endwhile; ?>
  <?php else : ?>
  <article>
    <header class="entry-header">
      <h1 class="entry-title"><?php _e('没有找到该文章', 'leizi'); ?></h1>
    </header>
    <div class="entry-content">
      <p><?php _e('抱歉没有找到该文章', 'leizi'); ?></p>
      <?php get_search_form(); ?>
    </div>
  </article>
 <?php endif; ?>

<?php get_footer() ?>