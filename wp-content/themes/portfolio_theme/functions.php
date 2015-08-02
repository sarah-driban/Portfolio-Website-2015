<?php

// make sure rss info is added to head
add_theme_support( 'automatic-feed-links' );

// add WP 3.0 menu support
add_theme_support( 'menus' );

// add thumbnail and featured image support
add_theme_support('post-thumbnails');

//Removes the default link
update_option( 'image_default_link_type', 'none' );

//Enqueues CSS and JS for the Theme
function add_scripts_styles(){

    wp_enqueue_style( 'styles', get_template_directory_uri() . '/global.css', '', '1.0' );

}
add_action( 'wp_enqueue_scripts', 'add_scripts_styles' );


function cpt_portfolios() {
    $labels = array(
        'name'               => __( 'Portfolios' ),
        'singular_name'      => __( 'Portfolio' ),
        'menu_name'          => 'Portfolios'
    );

    $args = array(
        'labels'        => $labels,
        'description'   => 'All available positions',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );
    register_post_type( 'portfolio', $args ); 
}
add_action( 'init', 'cpt_portfolios' );


function tax_category() {
    $labels = array(
        'name'              => __( 'Category'),
        'singular_name'     => __( 'Categories'),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ), 
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category' ),
        'menu_name'         => __( 'Categories' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );
    register_taxonomy( 'category', 'portfolio', $args );
}
add_action( 'init', 'tax_category', 0 );




add_filter('nav_menu_css_class', 'AddCurrentMenuItemClass',1,2);

function AddCurrentMenuItemClass($classes,$item)
{
    $link = site_url().$_SERVER['REQUEST_URI'];
    if ( $link == $item->url )
    {
        $classes[] = 'current-menu-item';
    }
    return $classes;
}

?>