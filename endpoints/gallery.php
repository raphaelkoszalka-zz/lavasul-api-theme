<?php

function gallery( $data ) {
  $gallery = get_posts(array(
      'post_type'	=> array('gallery'),
      'posts_per_page'	=>	'1000'
  ));
  $posts_arr = array();
  foreach ($gallery as $p) {
    $gallery =  get_field('image_gallery', $p->ID);
    $posts_arr[] = array( 'gallery' => $gallery, 'teste' );
  }
  $gallery_return = $posts_arr;
  return $gallery_return;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'cochise/v1', '/gallery',
        array(
            'methods' => 'GET',
            'callback' => 'gallery',
        )
    );
});