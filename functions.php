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

function pbs_entry_meta() {
    return twentytwelve_entry_meta();
}
if ( ! function_exists( 'twentytwelve_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own twentytwelve_entry_meta() to override in a child theme.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_entry_meta() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'twentytwelve' ) );

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'twentytwelve' ) );

	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'twentytwelve' ), get_the_author() ) ),
		get_the_author()
	);

	// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
	if ( $tag_list ) {
		$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve' );
	} elseif ( $categories_list ) {
		$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve' );
	} else {
		$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve' );
	}

	printf(
		$utility_text,
		$categories_list,
		$tag_list,
		$date,
		$author
	);
}
endif;

