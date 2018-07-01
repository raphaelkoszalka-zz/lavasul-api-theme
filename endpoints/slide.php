<?php

function slide( $data ) {
  
  $blog = get_posts(array(
      'post_type'	=> array('slide'),
      'posts_per_page'	=>	'1000'
  ));
  
  $posts_arr = array();
  
  foreach ($blog as $p) {
      $image = get_field('image', $p->ID);
      $posts_arr[] = array(
          'id' => $p->ID,
          'title' => $p->post_title,
          'sub_title' => $p->subtitle,
          'slug' => $p->post_name,
          'cover' => $image
      );
  }

  return $posts_arr;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'cochise/v1', '/slide',
        array(
            'methods' => 'GET',
            'callback' => 'slide',
        )
    );
});