<?php
function company( $data ) {
  
  $company = get_posts(array(
      'post_type'	=> array('company'),
      'posts_per_page'	=>	'1000'
  ));
  
  $posts_arr = array();
  
  foreach ($company as $p) {
      $gallery = get_field('gallery', $p->ID);
      $posts_arr[] = array(
          'id' => $p->ID,
          'title' => $p->post_title,
          'slug' => $p->post_name,
          'description' => $p->description,
          'gallery' => $gallery
      );
  }

  $company_return = $posts_arr;
  return $company_return;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'cochise/v1', '/company',
        array(
            'methods' => 'GET',
            'callback' => 'company',
        )
    );
});