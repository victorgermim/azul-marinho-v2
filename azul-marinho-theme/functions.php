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
 * Customizer Settings
 */
function azul_marinho_customize_register( $wp_customize ) {
    // Header Info Section
    $wp_customize->add_section( 'azul_marinho_header_info', array(
        'title'    => __( 'Informações do Cabeçalho', 'azul-marinho' ),
        'priority' => 30,
    ) );

    // Location
    $wp_customize->add_setting( 'header_location', array(
        'default'   => 'Atendimento em todo Brasil',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'header_location', array(
        'label'    => __( 'Localização', 'azul-marinho' ),
        'section'  => 'azul_marinho_header_info',
        'type'     => 'text',
    ) );

    // Email
    $wp_customize->add_setting( 'header_email', array(
        'default'   => 'contato@azulmarinho.com',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'header_email', array(
        'label'    => __( 'E-mail', 'azul-marinho' ),
        'section'  => 'azul_marinho_header_info',
        'type'     => 'email',
    ) );

    // Phone
    $wp_customize->add_setting( 'header_phone', array(
        'default'   => '(11) 1234-5678',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'header_phone', array(
        'label'    => __( 'Telefone', 'azul-marinho' ),
        'section'  => 'azul_marinho_header_info',
        'type'     => 'text',
    ) );

    // Social Links Section
    $wp_customize->add_section( 'azul_marinho_social', array(
        'title'    => __( 'Redes Sociais', 'azul-marinho' ),
        'priority' => 31,
    ) );

    $social_networks = array( 'facebook', 'twitter', 'instagram', 'linkedin', 'youtube' );
    foreach ( $social_networks as $network ) {
        $wp_customize->add_setting( "social_{$network}", array(
            'default'   => '#',
            'transport' => 'refresh',
        ) );
        $wp_customize->add_control( "social_{$network}", array(
            'label'    => ucfirst( $network ),
            'section'  => 'azul_marinho_social',
            'type'     => 'url',
        ) );
    }

    // Footer Logos Section
    $wp_customize->add_section( 'azul_marinho_footer_logos', array(
        'title'    => __( 'Logos do Rodapé', 'azul-marinho' ),
        'priority' => 32,
    ) );

    $wp_customize->add_setting( 'footer_logo_1', array(
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo_1', array(
        'label'    => __( 'Logo Principal (Rodapé)', 'azul-marinho' ),
        'section'  => 'azul_marinho_footer_logos',
    ) ) );

    $wp_customize->add_setting( 'footer_logo_2', array(
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo_2', array(
        'label'    => __( 'Logo Parceiro (Rodapé)', 'azul-marinho' ),
        'section'  => 'azul_marinho_footer_logos',
    ) ) );
}
add_action( 'customize_register', 'azul_marinho_customize_register' );


/**
 * Auto-Import Assets to Media Library
 * 
 * This function scans the theme's assets/img directory and imports images into the Media Library
 * if they don't already exist. Useful for populating the library for customization.
 * 
 * Run by visiting: /?import_theme_assets=1 (Admin only)
 */
function azul_marinho_import_assets() {
    if ( ! isset( $_GET['import_theme_assets'] ) || ! current_user_can( 'manage_options' ) ) {
        return;
    }

    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    require_once( ABSPATH . 'wp-admin/includes/media.php' );

    $assets_dir = get_template_directory() . '/assets/img/';
    $files = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $assets_dir ) );

    $count = 0;

    foreach ( $files as $file ) {
        if ( $file->isDir() ) continue;

        $file_path = $file->getPathname();
        $file_name = $file->getFilename();
        $file_type = wp_check_filetype( $file_name );

        if ( ! $file_type['ext'] ) continue;

        // Check if image already exists in DB
        global $wpdb;
        $query = "SELECT COUNT(*) FROM {$wpdb->posts} WHERE guid LIKE '%" . $wpdb->esc_like( $file_name ) . "'";
        $exists = $wpdb->get_var( $query );

        if ( ! $exists ) {
            // Copy file to uploads directory
            $upload_dir = wp_upload_dir();
            $new_file = $upload_dir['path'] . '/' . $file_name;
            copy( $file_path, $new_file );

            // Create attachment
            $attachment = array(
                'post_mime_type' => $file_type['type'],
                'post_title'     => sanitize_file_name( $file_name ),
                'post_content'   => '',
                'post_status'    => 'inherit'
            );

            $attach_id = wp_insert_attachment( $attachment, $new_file );
            $attach_data = wp_generate_attachment_metadata( $attach_id, $new_file );
            wp_update_attachment_metadata( $attach_id, $attach_data );

            $count++;
        }
    }

    echo "<div class='notice notice-success is-dismissible'><p>Importação concluída! $count novas imagens importadas.</p></div>";
}
add_action( 'admin_init', 'azul_marinho_import_assets' );
