<?php

error_reporting(E_ALL);
header("Access-Control-Allow-Origin: *");

include('constants.php');
include('class/cochise_post_type_class.php');
include('endpoints/blog.php');
include('endpoints/city.php');
include('endpoints/client.php');
include('endpoints/company.php');
include('endpoints/employer.php');
include('endpoints/gallery.php');
include('endpoints/partner.php');
include('endpoints/service.php');
include('endpoints/slide.php');
include('endpoints/testimonial.php');
// home.php always should be included last
include('endpoints/home.php');

$blog = new Cochise_Post_Type('blog');
$gallery = new Cochise_Post_Type('gallery');
$partner = new Cochise_Post_Type('partner');
$company = new Cochise_Post_Type('company');
$employer = new Cochise_Post_Type('employer');
$service = new Cochise_Post_Type('service');
$city = new Cochise_Post_Type('city');
$client = new Cochise_Post_Type('client');
$slide = new Cochise_Post_Type('slide');
$testimonial = new Cochise_Post_Type('testimonial');

function filters($valid_vars) {
    $valid_vars = array_merge(
        $valid_vars,
        array('meta_key','meta_value' )
    );
    return $valid_vars;
}

function my_acf_google_map_api( $api ) {
    $api['key'] = 'AIzaSyDJtAthqXsnVf3UDjofxy86v0H14hRMvCs';
    return $api;
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
add_filter('rest_query_vars', 'filters');
add_filter('show_admin_bar', '__return_false');

