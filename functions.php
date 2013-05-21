<?php
if ( ! isset( $content_width ) )
    $content_width = 800;

require( get_template_directory() . '/inc/custom-header.php' );

function pure_bootstrap_setup() {
    //load_theme_textdomain( 'pure_bootstrap', get_template_directory() . '/languages' );
    
    add_editor_style();
    
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );
    register_nav_menu( 'primary', __( 'Primary Menu', 'pure_bootstrap' ) );
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 640, 9999 );
}
add_action( 'after_setup_theme', 'pure_bootstrap_setup' );

function pure_bootstrap_scripts_styles() {
    global $wp_styles;
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'pure_bootstrap_scripts_styles' );

function pure_bootstrap_widgets_init() {
    register_sidebar( array(
        'name'  => __( 'Front Page Widgets Area', 'pure_bootstrap' ),
        'id'    => 'sidebar-front',
        'description'   => 'undefined',
        'before_widget' => '<div class="sidebar-front-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'  => __( 'Main Widgets Area', 'pure_bootstrap' ),
        'id'    => 'sidebar-main',
        'description'   => 'undefined',
        'before-widget' => '<div class="sidebar-main-widget">',
        'after-widget'  => '</div>',
        'before-title'  => '<h2 class="widget-title">',
        'after-title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'pure_bootstrap_widgets_init' );

function wp_widget_num_class( $index = 1, $prefix = 'widgets-', $suffix = '', $echo = true ) {
    global $wp_registered_sidebars;
     
    if ( is_int($index) ) {
        $index = "sidebar-$index";
    } else {
        $index = sanitize_title($index);
        foreach ( (array) $wp_registered_sidebars as $key => $value ) {
            if ( sanitize_title($value['name']) == $index ) {
                $index = $key;
                break;
            }
        }
    }
     
    $sidebars_widgets = wp_get_sidebars_widgets();
 
    if ( empty($wp_registered_sidebars[$index]) || !array_key_exists($index, $sidebars_widgets) || !is_array($sidebars_widgets[$index]) || empty($sidebars_widgets[$index]) )
        return false;
         
    $widget_num_class = $prefix . count( $sidebars_widgets[$index] ) . $suffix;
 
    if ( $echo ) {
        echo $widget_num_class;
    } else {
        return $widget_num_class;
    }
}
