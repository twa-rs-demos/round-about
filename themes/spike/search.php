<?php get_header(); ?>

  <div id='search-result'>
    <h2 class="search"> 搜索结果:</h2>
    <p class="result-query">你的搜索结果：
      <span class="search-name"><?php echo get_search_query(); ?></span>
    </p>

    <?php if (have_posts()) : ?>

      <?php while (have_posts()) : the_post(); ?>
        <div class="search-content">

          <?php get_template_part('content', get_post_format()); ?>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <div class="entry-content">
        <p><?php _e('抱歉没有找到该文章'); ?></p>
      </div>

    <?php endif; ?>


    <?php global $wp_query;
    echo "搜索 <span class='search-name'>$s</span> 的结果共 " . $wp_query->found_posts . " 条";
    ?>
  </div>
<!---->
<?php get_footer(); ?>