<?php
add_action( 'after_setup_theme', 'init_setup_functions' );
function init_setup_functions() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'wp_enqueue_scripts', 'blankslate_enqueue' );
function blankslate_enqueue() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() , array() , filemtime(__DIR__ . '/style.css') );
    wp_enqueue_script( 'jquery' );
}

include __DIR__ . '/cpt/albums.php';


// Custom API

add_action( 'rest_api_init', function () {
    register_rest_route( 'get', '/albums', array(
        'methods' => 'GET',
        'callback' => 'get_albums',
    ) );
} );

function get_albums(){
    $args = array(  
        'post_type' => 'album',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'publish_date', 
        'order' => 'DESC', 
    );
    $data = array();
    $loop = new WP_Query( $args ); 
    while ( $loop->have_posts() ) : $loop->the_post();
        $data[] = [
            'permalink' => get_the_permalink(),
            'thumbnail' => get_the_post_thumbnail_url(),
            'title' => get_the_title(),
        ];
    endwhile;

    wp_send_json($data);
}

// end of Custom API