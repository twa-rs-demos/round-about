<?php

add_filter('posts_orderby_request', 'wpjam_search_orderby_filter');
function wpjam_search_orderby_filter($orderby = ''){
  if(is_search()){
    global $wpdb;
    $keyword = $wpdb->prepare($_REQUEST['s'],'');
    return "((CASE WHEN {$wpdb->posts}.post_title LIKE '%{$keyword}%' THEN 2 ELSE 0 END) + (CASE WHEN {$wpdb->posts}.post_content LIKE '%{$keyword}%' THEN 1 ELSE 0 END)) DESC, {$wpdb->posts}.post_modified DESC, {$wpdb->posts}.ID ASC";
  }else{
    return $orderby;
  }
}
?>