<?php
function city( $data ) {
  
  $city = get_posts(array(
      'post_type'	=> array('city'),
      'posts_per_page'	=>	'1000'
  ));
  
  $posts_arr = array();
  
  foreach ($city as $p) {
      $map = get_field('map', $p->ID);
      $posts_arr[] = array(
          'id' => $p->ID,
          'title' => $p->post_title,
          'slug' => $p->post_name,
          'map' => $map
      );
  }

  $map_return = $posts_arr;
  return $map_return;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'cochise/v1', '/city',
        array(
            'methods' => 'GET',
            'callback' => 'city',
        )
    );
});