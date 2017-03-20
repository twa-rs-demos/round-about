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
      $current_page_id = get_queried_object_id();
      $current_category = get_category_by_slug(get_the_title($current_page_id));
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

if (!function_exists('my_pagination')) :
  function my_pagination()
  {
    global $wp_query;

    $big = 999999999;

    echo
    paginate_links(array(
      'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
      'format' => '?paged=%#%',
      'current' => max(1, get_query_var('paged')),
      'total' => $wp_query->max_num_pages
    ));
  }
endif;
?>