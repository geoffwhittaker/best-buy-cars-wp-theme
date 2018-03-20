<?php
/*
==========================================================
Include script
==========================================================
*/
function flextesttheme_add_files() {
    // css
    wp_enqueue_style('bootstrap',get_template_directory_uri() .'/css/bootstrap.min.css',array(),'1.0.0');
    wp_enqueue_style('customstyle',get_template_directory_uri() .'/css/flextesttheme.css',array(),'1.0.0');
    // js
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs',get_template_directory_uri() .'/js/bootstrap.min.js',array(),'3.3.4' );
    wp_enqueue_script('customjs',get_template_directory_uri() .'/js/flextesttheme.js',array(),'1.0.0' );
}
// add the action to load the above function in the head section of the header file
    add_action('wp_enqueue_scripts','flextesttheme_add_files');

/*
==========================================================
Activate menus
==========================================================
*/   
require_once 'class-wp-bootstrap-navwalker.php';

function flextesttheme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary','primary header navigation');
    register_nav_menu('secondary','footer navigation');
};
 add_action('init', 'flextesttheme_setup');
/*
==========================================================
Theme support functions
==========================================================
*/
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 50, 50 );
    add_theme_support('post-formats', array('aside' , 'image' , 'video'));
    add_theme_support('html5', array('search-form'));
    function themename_custom_logo_setup() {
        $defaults = array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
           // 'header-text' => array( 'site-title', 'site-description' ),
        );
        add_theme_support( 'custom-logo', $defaults );
    }
    add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
/*
==========================================================
Sidebar function
==========================================================
*/
function widget_setup(){
 register_sidebar(
     array(
            'name'=> 'sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>'
         )
     );
            };
add_action('widgets_init' , 'widget_setup');

add_action( 'woocommerce_before_add_to_cart_form' , 'print_something' );
function print_something (){

    echo 'test';
}
add_action( 'after_setup_theme', 'yourtheme_setup' );
 
function yourtheme_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
/*
==========================================================
Custom posts type
==========================================================
*/
function reviews_custom_post_type(){
$labels = array(
    'name' => 'Reviews',
    'singular_name' => 'Review',
    'add_new' => 'Add review post',
    'all_items' => 'All items',
    'add_new_item' => 'Add item',
    'edit_item' => 'Edit item',
    'new_item' => 'New item',
    'view_item' => 'View item',
    'search_item' => 'Search reviews',
    'not_found' => 'No items found',
    'not-found_in_trash' => 'No items found in trash',
    'parent_item_colon' => 'Parent item',  
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierachical' => false,
    'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail',
        'revisions',
    ),
    'taxonomies' => array(
        'category',
        'post_tag',
    ),
    'menu_position' => 5,
    'exclude_from_search' => false,
);
register_post_type( 'reviews', $args );
}
add_action('init', 'reviews_custom_post_type');

