<?php get_header(); ?>

  <div id='search-result'>
    <h2 class="search"> SEARCH RESULTS:</h2>
    <p class="result-query">Your search results：
      <span class="search-name"><?php echo get_search_query(); ?></span>
    </p>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('content', 'search'); ?>
      <?php endwhile; ?>
      <div class="my-pagination">
        <?php my_pagination(); ?>
      </div>
    <?php else : ?>
      <?php echo "没有相关文章啦！" ?>
    <?php endif; ?>

<!--    --><?php //global $wp_query;
//    echo "搜索 <span class='search-name'>$s</span> 的结果共 " . $wp_query->found_posts . " 条";
//    ?>
  </div>

<?php get_footer(); ?>