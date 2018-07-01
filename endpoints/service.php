<?php
function service( $data ) {
  
  $service = get_posts(array(
      'post_type'	=> array('service'),
      'posts_per_page'	=>	'1000'
  ));
  
  $posts_arr = array();
  
  foreach ($service as $p) {
      $service_image = get_field('service_image', $p->ID);
      $posts_arr[] = array(
          'id' => $p->ID,
          'title' => $p->post_title,
          'slug' => $p->post_name,
          'description' => $p->description,
          'service_image' => $service_image
      );
  }

  $service_return = $posts_arr;
  return $service_return;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'cochise/v1', '/service',
        array(
            'methods' => 'GET',
            'callback' => 'service',
        )
    );
});