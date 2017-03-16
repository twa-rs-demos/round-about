<?php
function the_breadcrumb()
{

  $sep = ' > ';

  if (!is_front_page()) {

    if (is_category() || is_single()) {
      the_category('title_li=');
    } elseif (is_archive() || is_single()) {
      if (is_day()) {
        printf(__('%s', 'text_domain'), get_the_date());
      } elseif (is_month()) {
        printf(__('%s', 'text_domain'), get_the_date(_x('F Y', 'monthly archives date format', 'text_domain')));
      } elseif (is_year()) {
        printf(__('%s', 'text_domain'), get_the_date(_x('Y', 'yearly archives date format', 'text_domain')));
      } else {
        _e('Blog Archives', 'text_domain');
      }
    }

    if (is_page()) {
      $current_category = get_category_by_slug(get_query_var('pagename'));
      if ($current_category->category_parent !== 0):
        $parent_category = get_category($current_category->category_parent);
        echo '<div class="breadcrumb">';
        echo "<a href=" . get_permalink(get_page_by_title($parent_category->slug)) . ">";
        echo get_cat_name($current_category->category_parent);
        echo "</a>";
        echo $sep;
        echo $current_category->name;
        echo '</div>';
      endif;
    }
  }
}
?>

<?php
add_filter('posts_orderby_request', 'wpjam_search_orderby_filter');
function wpjam_search_orderby_filter($orderby = '')
{
  if (is_search()) {
    global $wpdb;
    $keyword = $wpdb->prepare($_REQUEST['s'], '');
    return "((CASE WHEN {$wpdb->posts}.post_title LIKE '%{$keyword}%' THEN 2 ELSE 0 END) + (CASE WHEN {$wpdb->posts}.post_content LIKE '%{$keyword}%' THEN 1 ELSE 0 END)) DESC, {$wpdb->posts}.post_modified DESC, {$wpdb->posts}.ID ASC";
  } else {
    return $orderby;
  }
}

?>