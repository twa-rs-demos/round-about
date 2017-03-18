<?php get_header(); ?>

  <div id='search-result'>
    <h2 class="search"> 搜索结果:</h2>
    <p class="result-query">你的搜索结果：
      <span class="search-name"><?php echo get_search_query(); ?></span>
    </p>

    <?php
    $resault = $_GET['s'];
    $posts_info = $wpdb->get_results(
      "SELECT *
       FROM $wpdb->posts
       WHERE (post_type = 'post' and post_status = 'publish' and (post_content like '%" . $resault . "%' or post_title like '%" . $resault . "%') )");


    if (!empty($posts_info)) {
      foreach ($posts_info as $k => $v) {
        ?>
        <li><span><?php the_time('Y-m-d'); ?></span>
          <a href="<?php echo get_permalink($v->ID); ?>">
            <?php echo $v->post_title; ?>
          </a>
          <?php echo $v->post_content; ?>
        </li>
        <?php
      }
    } else {
      echo "<li>抱歉，没有找到符合搜索条件的内容！</li>";

    }

    ?>




    <?php global $wp_query;
    echo "搜索 <span class='search-name'>$s</span> 的结果共 " . $wp_query->found_posts . " 条";
    ?>
  </div>
  <!---->


<?php //pagination(array('post_count' => 7)); ?>

<?php get_footer(); ?>