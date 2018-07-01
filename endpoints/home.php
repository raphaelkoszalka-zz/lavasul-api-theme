<?php

function home( $data ) {
  $home = array(
    'slides' => slide(),
    'company' => company(),
    'service' => service(),
    'blog' => blog()
  );
  return $home;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'cochise/v1', '/home',
        array(
            'methods' => 'GET',
            'callback' => 'home',
        )
    );
});