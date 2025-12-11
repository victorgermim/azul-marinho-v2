<?php
/**
 * Azul Marinho Theme functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Theme Setup
 */
function azul_marinho_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register Navigation Menus
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'azul-marinho' ),
	) );

	// Add support for WooCommerce
	add_theme_support( 'woocommerce' );

    // Register Sidebar
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Blog', 'azul-marinho' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Adicione widgets aqui.', 'azul-marinho' ),
        'before_widget' => '<div id="%1$s" class="blog-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="sw-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'after_setup_theme', 'azul_marinho_setup' );

/**
 * Enqueue scripts and styles.
 */
function azul_marinho_scripts() {
	// CSS
	wp_enqueue_style( 'azul-marinho-fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), '1.0.0' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0.0' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '1.0.0' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.0.0' );
	wp_enqueue_style( 'odometer', get_template_directory_uri() . '/assets/css/odometer.css', array(), '1.0.0' );
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css', array(), '1.0.0' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0' );
	wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css', array(), '1.0.0' );
	wp_enqueue_style( 'azul-marinho-main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0' );
	wp_enqueue_style( 'azul-marinho-style', get_stylesheet_uri() );

	// JS
	// Use WordPress jQuery or deregister and use theme's if strictly necessary. 
	// For now, let's try to use the theme's jQuery to ensure compatibility with existing plugins/scripts
	// that might rely on specific versions or behaviors, although WP's is recommended.
    // Given the static nature, let's use the bundled one to be safe.
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-3.6.0.min.js', array(), '3.6.0', true);

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'odometer', get_template_directory_uri() . '/assets/js/jquery.odometer.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'tween-max', get_template_directory_uri() . '/assets/js/tween-max.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'slick-animation', get_template_directory_uri() . '/assets/js/slick-animation.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'ajax-form', get_template_directory_uri() . '/assets/js/ajax-form.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'azul-marinho-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'azul_marinho_scripts' );

/**
 * Force load specific templates based on URL path.
 * This fixes the issue where pages fallback to index.php (likely due to 404 or missing page/rewrite).
 */
function azul_marinho_force_template( $template ) {
    $request_uri = $_SERVER['REQUEST_URI'];

    // Check for "sobre-nos" and load page-about.php
    if ( strpos( $request_uri, '/sobre-nos' ) !== false ) {
        $new_template = locate_template( array( 'page-about.php' ) );
        if ( ! empty( $new_template ) ) {
            return $new_template;
        }
    }

    // Check for "contato" and load page-contact.php
    if ( strpos( $request_uri, '/contato' ) !== false ) {
        $new_template = locate_template( array( 'page-contact.php' ) );
        if ( ! empty( $new_template ) ) {
            return $new_template;
        }
    }

    return $template;
}
add_filter( 'template_include', 'azul_marinho_force_template' );
