<?php
/**
 * erdreams functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package erdreams
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', time() );
}

if ( ! function_exists( 'erdreams_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function erdreams_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on erdreams, use a find and replace
		 * to change 'erdreams' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'erdreams', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'header'   			=> 'Menu Cabeçalho',
				'category' 			=> 'Menu Categorias',
				'institutional' => 'Menu Institucional',
				'my_account' 		=> 'Menu Minha Conta',
				'mobile' 				=> 'Menu Mobile (Celular)',
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );


		/**
		 * Add image size.
		 */
		add_image_size( 'employee-img', 600, 600);
		add_image_size( 'about-gallery-img', 1920, 1280);
		

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo');

		/**
		* Enable support for Woocommerce
		*/
		// Product gallery features (zoom, swipe, lightbox)
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		add_theme_support( 'woocommerce', array(
			'gallery_thumbnail_image_width' => 200,
				'product_grid'          => array(
						'default_rows'    => 4,
						'min_rows'        => 1,
						'max_rows'        => 8,
						'default_columns' => 4,
						'min_columns'     => 1,
						'max_columns'     => 4,
				),
		) );
	}
endif;
add_action( 'after_setup_theme', 'erdreams_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function erdreams_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'erdreams_content_width', 600 );
}
add_action( 'after_setup_theme', 'erdreams_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function erdreams_scripts() {
	/**
	 * Fonts
	*/
	wp_enqueue_style( 'erdreams-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap' );

	wp_enqueue_style( 'erdreams-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'erdreams-style', 'rtl', 'replace' );

	/**
	 * Scripts
	*/

	/**
	 * Register Scripts
	*/
	// wp_register_script( 'splide-min', get_template_directory_uri() . '/assets/js/vendor/splide.min.js', array( 'jquery', 'bootstrap' ), _S_VERSION, true );
	// wp_register_script( 'splide', get_template_directory_uri() . '/assets/js/splide.js', array('jquery', 'bootstrap'), _S_VERSION, true );
	wp_register_script( 'hes-gallery', get_template_directory_uri() . '/assets/js/vendor/hes-gallery.min.js', array( 'jquery' ), _S_VERSION, true );

	/**
	 * Enqueue Scripts
	*/
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap.bundle.min.js', array('jquery'), _S_VERSION, true );

	wp_enqueue_script( 'erdreams-cart', get_template_directory_uri() . '/assets/js/cart.js', array('jquery'), _S_VERSION, true );

	wp_enqueue_script( 'erdreams-nav', get_template_directory_uri() . '/assets/js/nav.js', array( 'jquery' ), _S_VERSION, true );

	wp_enqueue_script( 'erdreams-aws-plugin', get_template_directory_uri() . '/assets/js/vendor/aws-plugin.js', array( 'jquery' ), _S_VERSION, true );

	if ( is_page_template( 'template-home.php' ) ){
		wp_enqueue_script( 'splide-min');
		wp_enqueue_script( 'splide');
	}

	if ( is_page_template( 'template-about.php' ) ){
		wp_enqueue_script( 'hes-gallery');
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'erdreams_scripts' );

/**
 * Utilities functions
 */
require get_template_directory(). '/inc/utilities.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Woocommerce custom hooks
 */
if( class_exists( 'woocommerce' ) ){
	require get_template_directory() . '/inc/woocommerce/erdreams-woocommerce-hooks.php';
}

/**
* Theme Customize API
*/
if( class_exists( 'kirki' ) ){
require get_template_directory(). '/inc/customize.php';

}
/**
 * Remove standard wp
 */
require get_template_directory(). '/inc/remove-wp-standard.php';