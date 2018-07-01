<?php
function client( $data ) {
  
  $client = get_posts(array(
      'post_type'	=> array('client'),
      'posts_per_page'	=>	'1000'
  ));
  
  $posts_arr = array();
  
  foreach ($client as $p) {
      $posts_arr[] = array(
          'id' => $p->ID,
          'title' => $p->post_title,
          'slug' => $p->post_name,
          'brand_image' => $p->brand_image
      );
  }

  $client_return = $posts_arr;
  return $client_return;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'cochise/v1', '/client',
        array(
            'methods' => 'GET',
            'callback' => 'client',
        )
    );
});