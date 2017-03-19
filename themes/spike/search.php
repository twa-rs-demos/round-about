<?php get_header(); ?>

  <div id='search-result'>
    <h2 class="search"> 搜索结果:</h2>
    <p class="result-query">你的搜索结果：
      <span class="search-name"><?php echo get_search_query(); ?></span>
    </p>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
<!--        --><?php //get_template_part('content', get_post_format()); ?>
        <?php echo the_title()?>
      <?php endwhile; ?>
      <div class="my-pagination">
      <?php my_pagination(); ?>
      </div>
<!--      --><?php //wpbeginner_numeric_posts_nav(); ?>
    <?php else : ?>
      <?php get_template_part('content', 'none'); ?>
    <?php endif; ?>


    <?php global $wp_query;
    echo "搜索 <span class='search-name'>$s</span> 的结果共 " . $wp_query->found_posts . " 条";
    ?>
  </div>

<?php get_footer(); ?>