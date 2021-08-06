<?php

add_action('init', 'create_album_post_type');

function create_album_post_type()
{
    register_post_type('album', array(
        'labels' => array(
            'name' => 'Albums',
            'singular_name' => 'Albums',
            'add_new' => 'Add Album',
            'add_new_item' => 'Add New Album',
            'edit_item' => 'Edit Album',
            'new_item' => 'New Album',
            'view_item' => 'View Album',
            'search_items' => 'Find Album',
            'not_found' => 'Album Not Found',
            'not_found_in_trash' => 'Album Not Found in Trash',
            'parent_item_colon' => '',
            'menu_name' => 'Albums',
        ),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => false,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail', 'editor'),
        'rewrite' => array( 'slug' => 'albums', 'with_front' => false),
    ));
}
