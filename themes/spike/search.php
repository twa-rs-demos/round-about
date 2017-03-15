<?php get_header() ?>

<?php
$title = get_the_title();
$content = mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 300, "......");
$keys = explode(" ", $s);
$title = preg_replace('/(' . implode('|', $keys) . ')/iu', '<strong style="color:#953b39;">\0</strong>', $title);
$content = preg_replace('/(' . implode('|', $keys) . ')/iu', '<strong class="search-excerpt">\0</strong>', $content); ?>


  <div id='search-result' class="container">
    <h2 class="search"> 搜索结果:</h2>
    <p class="result-query">你的搜索结果：
      <span class="search-name"><?php echo get_search_query(); ?></span>
    </p>

    <?php if (have_posts()) : ?>

      <?php while (have_posts()) : the_post(); ?>
        <div class="search-content">
          <a href="<?php echo get_permalink($post->ID); ?>">
            <div class=" result-title"> <?php echo $title; ?></div>
            <div class="result-content"><?php echo $content; ?></div>
          </a>

        </div>
      <?php endwhile; ?>
    <?php else : ?>

      <div class="entry-content">
        <p><?php _e('抱歉没有找到该文章'); ?></p>
      </div>

    <?php endif; ?>

    <?php
    global $wp_query;
    echo "搜索 <strong class=' search-name'>$s</strong> 的结果共 " . $wp_query->found_posts . " 条";
    ?>
  </div>

<?php get_footer() ?>