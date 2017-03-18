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


<?php // Numbered Pagination
function pagination($query_string)
{
  global $posts_per_page, $paged;
  $my_query = new WP_Query($query_string . "&posts_per_page=-1");
  $total_posts = $my_query->post_count;
  if (empty($paged)) $paged = 1;
  $prev = $paged - 1;
  $next = $paged + 1;
  $range = 2; // only edit this if you want to show more page-links
  $showitems = ($range * 2) + 1;

  $pages = ceil($total_posts / $posts_per_page);
  if (1 != $pages) {
    echo "<div class='pagination'>";
    echo ($paged > 2 && $paged + $range + 1 > $pages && $showitems < $pages) ? "
<a href='" . get_pagenum_link(1) . "'>最前</a>" : "";
    echo ($paged > 1 && $showitems < $pages) ? "
<a href='" . get_pagenum_link($prev) . "'>上一页</a>" : "";

    for ($i = 1; $i <= $pages; $i++) {
      if (1 != $pages && (!($i >= $paged + $range + 1 ||
            $i <= $paged - $range - 1) || $pages <= $showitems)
      ) {
        echo ($paged == $i) ? "<span class='current'>" . $i . "</span>" :
          "<a href='" . get_pagenum_link($i) . "' class='inactive' >" . $i . "</a>";
      }
    }

    echo ($paged < $pages && $showitems < $pages) ?
      "<a href='" . get_pagenum_link($next) . "'>下一页</a>" : "";
    echo ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages) ?
      "<a href='" . get_pagenum_link($pages) . "'>最后</a>" : "";
    echo "</div>\n";
  }
}
