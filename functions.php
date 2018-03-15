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
add_action('widgets_init' , 'widget_setup')
?>