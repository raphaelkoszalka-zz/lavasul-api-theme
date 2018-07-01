<?php
function employer( $data ) {
  
  $employer = get_posts(array(
      'post_type'	=> array('employer'),
      'posts_per_page'	=>	'1000'
  ));
  
  $posts_arr = array();
  
  foreach ($employer as $p) {
      $posts_arr[] = array(
          'id' => $p->ID,
          'title' => $p->post_title,
          'sub_title' => $p->sub_title,
          'slug' => $p->post_name,
          'birth_date' => $p->birth_date,
          'phone' => $p->phone,
          'email' => $p->email,
          'address' => $p->address,
           // @todo: translate this fields
          'schooling' => $p->escolaridade,
          'availability' => $p->disponibilidade_de_horario,
          'pretended_function' => $p->funcao_pretendida
      );
  }

  $blog_return = $posts_arr;
  return $blog_return;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'cochise/v1', '/employer',
        array(
            'methods' => 'GET',
            'callback' => 'blog',
        )
    );
});