<?php


if ( ! isset( $content_width ) ) {
	$content_width = 620;
}


if ( ! function_exists( 'shape_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 */
function shape_setup() {

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'shape' ),
	) );
	
}
endif; // shape_setup
add_action( 'after_setup_theme', 'shape_setup' );


/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for previous versions.
 * Use feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * Hooks into the after_setup_theme action.
 *
 */
function shape_register_custom_background() {
	$args = array(
		'default-color' => 'e9e0d1',
	);

	$args = apply_filters( 'shape_custom_background_args', $args );

	if ( function_exists( 'wp_get_theme' ) ) {
		add_theme_support( 'custom-background', $args );
	} else {
		define( 'BACKGROUND_COLOR', $args['default-color'] );
		define( 'BACKGROUND_IMAGE', $args['default-image'] );
		add_custom_background();
	}
}
add_action( 'after_setup_theme', 'shape_register_custom_background' );


/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since Shape 1.0
 */
function shape_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Primary Sidebar', 'shape' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );

	register_sidebar( array(
		'name' => __( 'Secondary Sidebar', 'shape' ),
		'id' => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer widget', 'shape' ),
		'id' => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'shape_widgets_init' );


/**
 * Implement the Custom Header feature
 */
require( get_template_directory() . '/inc/custom-header.php' );

/**
 * Set's page with for full width pages and plugins.
 *
*/
function iph_content_width() {
	        if ( is_page_template( 'template-full-width.php' ) || is_attachment() || ! is_active_sidebar( 'sidebar-1' ) ) {
	                global $content_width;
	                $content_width = 920;
	        }
	}
add_action( 'template_redirect', 'iph_content_width' );



?>