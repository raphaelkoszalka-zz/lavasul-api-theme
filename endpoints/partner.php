<?php

function partner( $data ) {
  
  $partner = get_posts(array(
      'post_type'	=> array('partner'),
      'posts_per_page'	=>	'1000'
  ));
  
  $posts_arr = array();
  
  foreach ($partner as $p) {
      $image = get_field('brand_image', $p->ID);
      $posts_arr[] = array(
          'id' => $p->ID,
          'title' => $p->post_title,
          'slug' => $p->post_name,
          'partner_url' => $p->url,
          'partner_image' => $image
      );
  }
  return $posts_arr;
  
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'cochise/v1', '/partner',
        array(
            'methods' => 'GET',
            'callback' => 'partner',
        )
    );
});