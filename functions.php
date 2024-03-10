<?php

acf_add_options_page( array(
    'page_title' => __('Page Options'),
    'menu_title' => __('Page Options'),
    'menu_slug' => 'page-options',
) );

register_nav_menus(
    array(
    'header-menu' => __( 'Header Menu' ),
    'footer-menu-1' => __( 'Footer Menu 1' ),
    'footer-menu-2' => __( 'Footer Menu 2' ),
    'footer-menu-3' => __( 'Footer Menu 3' ),
    'footer-menu-4' => __( 'Footer Menu 4' )
    )
);
add_action( 'init', function() {

    register_post_type( 'hotel', [
        'taxonomies' => [], // post related taxonomies
        'label'  => null,
        'labels' => [
            'name'               => 'Hotels', // name for the post type.
            'singular_name'      => 'Hotel', // name for single post of that type.
            'add_new'            => 'Add new Hotel', // to add a new post.
            'add_new_item'       => 'Adding Hotel', // title for a newly created post in the admin panel.
            'edit_item'          => 'Edit Hotel', // for editing post type.
            'new_item'           => 'New Hotel', // new post's text.
            'view_item'          => 'See Hotel', // for viewing this post type.
            'search_items'       => 'Search Hotel', // search for these post types.
            'not_found'          => 'Not Found', // if search has not found anything.
            'parent_item_colon'  => '', // for parents (for hierarchical post types).
            'menu_name'          => 'Hotels', // menu name.
        ],
        'description'         => '',
        'public'              => true,
        //'publicly_queryable'  => null, // depends on public
        //'exclude_from_search' => null, // depends on public
        //'show_ui'             => null, // depends on public
        //'show_in_nav_menus'   => null, // depends on public
        'show_in_menu'        => null, // whether to in admin panel menu
        //'show_in_admin_bar'   => null, // depends on show_in_menu.
        'show_in_rest'        => null, // Add to REST API. WP 4.7.
        'rest_base'           => null, // $post_type. WP 4.7.
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // Array of additional rights for this post type.
        //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
        'hierarchical'        => false,
        // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
        'supports'            => [ 'title', 'editor', 'thumbnail' ],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'tour', [
        'taxonomies' => [], // post related taxonomies
        'label'  => null,
        'labels' => [
            'name'               => 'Tours', // name for the post type.
            'singular_name'      => 'Tour', // name for single post of that type.
            'add_new'            => 'Add new Tour', // to add a new post.
            'add_new_item'       => 'Adding Tour', // title for a newly created post in the admin panel.
            'edit_item'          => 'Edit Tour', // for editing post type.
            'new_item'           => 'New Tour', // new post's text.
            'view_item'          => 'See Tour', // for viewing this post type.
            'search_items'       => 'Search Tour', // search for these post types.
            'not_found'          => 'Not Found', // if search has not found anything.
            'parent_item_colon'  => '', // for parents (for hierarchical post types).
            'menu_name'          => 'Tours', // menu name.
        ],
        'description'         => '',
        'public'              => true,
        //'publicly_queryable'  => null, // depends on public
        //'exclude_from_search' => null, // depends on public
        //'show_ui'             => null, // depends on public
        //'show_in_nav_menus'   => null, // depends on public
        'show_in_menu'        => null, // whether to in admin panel menu
        //'show_in_admin_bar'   => null, // depends on show_in_menu.
        'show_in_rest'        => null, // Add to REST API. WP 4.7.
        'rest_base'           => null, // $post_type. WP 4.7.
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // Array of additional rights for this post type.
        //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
        'hierarchical'        => false,
        // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
        'supports'            => [ 'title', 'editor', 'thumbnail' ],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

} );


add_action('after_setup_theme', function (){
    add_theme_support('post-thumbnails');
});