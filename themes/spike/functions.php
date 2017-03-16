<?php
function the_breadcrumb()
{

    $sep = ' » ';

    if (!is_front_page()) {

        echo '<div class="breadcrumbs">';

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
            if ($current_category->category_parent !==0):
                $parent_category = get_category($current_category->category_parent);
                echo "<a href=" . get_permalink(get_page_by_title($parent_category->slug)) . ">";
                echo get_cat_name($current_category->category_parent);
                echo "</a>";
                echo $sep;
                echo $current_category->name;
            endif;
        }

//        if (is_home()) {
//            global $post;
//            $page_for_posts_id = get_option('page_for_posts');
//            if ($page_for_posts_id) {
//                $post = get_page($page_for_posts_id);
//                setup_postdata($post);
//                the_title();
//                rewind_posts();
//            }
//        }

        echo '</div>';
    }
} ?>