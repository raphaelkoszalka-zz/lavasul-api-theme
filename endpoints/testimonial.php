<?php
function testimonial( $data ) {
  
  $testimonial = get_posts(array(
      'post_type'	=> array('testimonial'),
      'posts_per_page'	=>	'1000'
  ));
  
  $posts_arr = array();
  
  foreach ($testimonial as $p) {
      $posts_arr[] = array(
          'id' => $p->ID,
          'title' => $p->post_title,
          'slug' => $p->post_name,
          'position' => $p->office,
          'testimonial' => $p->testimonial,
          'source' => $p->source
      );
  }

  $client_return = $posts_arr;
  return $client_return;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'cochise/v1', '/testimonial',
        array(
            'methods' => 'GET',
            'callback' => 'testimonial',
        )
    );
});