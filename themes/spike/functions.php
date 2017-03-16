<?php

function wds_cpt_search( $query ) {

  if ( is_search() && $query->is_main_query() && $query->get( 's' ) ) {

    $query->set(

      'post_type', array('post', 'img'),
      'meta_query', array(
        array(
          'key' => 'img',
          'value' => '%s',
          'compare' => 'LIKE',
        ),
      )
    );

    return $query;
  }
}

add_action( 'pre_get_posts', 'wds_cpt_search' );


?>