<?php
/**
 * Law functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Law
 */
require_once get_template_directory() . '/Law_Header_Menu.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'law_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function law_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Law, use a find and replace
		 * to change 'law' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'law', get_template_directory() . '/languages' );

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
				'header-menu' => esc_html__( 'Header Menu', 'law' ),
				'footer-menu' => esc_html__( 'Footer Menu', 'law' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'law_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'law_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function law_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'law_content_width', 640 );
}
add_action( 'after_setup_theme', 'law_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function law_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'law' ),
			'id'            => 'footer',
			'description'   => esc_html__( 'Add widgets here.', 'law' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s col-md-3">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'law_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function law_scripts() {
	wp_enqueue_style( 'law-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'law-font', 'https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800');
	wp_enqueue_style( 'law-animate-style', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style( 'law-icomoon-style', get_template_directory_uri() . '/assets/css/icomoon.css');
	wp_enqueue_style( 'law-bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style( 'law-magnific-popup-style', get_template_directory_uri() . '/assets/css/magnific-popup.css');
	wp_enqueue_style( 'law-owl-carousel-style', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style( 'law-owl-theme-default-style', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
	wp_enqueue_style( 'law-flexslider-style', get_template_directory_uri() . '/assets/css/flexslider.css');
	wp_enqueue_style( 'law-theme-style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'law-custom-style', get_template_directory_uri() . '/assets/css/law.css');

//	wp_style_add_data( 'law-style', 'rtl', 'replace' );
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script('jquery');
//	wp_enqueue_script( 'law-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'law-modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js');
	wp_enqueue_script( 'law-respond', get_template_directory_uri() . '/assets/js/respond.min.js');
    wp_script_add_data('law-respond', 'conditional', 'lt IE 9');
//	wp_enqueue_script( 'law-jquery', get_template_directory_uri() . 'assets/js/jquery.min.js', [], false, true);
	wp_enqueue_script( 'law-jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', [], false, true);
	wp_enqueue_script( 'law-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', [], false, true);
	wp_enqueue_script( 'law-jquery-waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', [], false, true);
	wp_enqueue_script( 'law-jquery-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', [], false, true);
	wp_enqueue_script( 'law-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', [], false, true);
	wp_enqueue_script( 'law-jquery-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', [], false, true);
	wp_enqueue_script( 'law-jquery-countTo', get_template_directory_uri() . '/assets/js/jquery.countTo.js', [], false, true);
	wp_enqueue_script( 'law-jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', [], false, true);
	wp_enqueue_script( 'law-magnific-popup-options', get_template_directory_uri() . '/assets/js/magnific-popup-options.js', [], false, true);
	wp_enqueue_script( 'law-main', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
    wp_localize_script('law-main', 'lawData', [
        'themePath' => get_template_directory_uri()
    ]);

//	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//		wp_enqueue_script( 'comment-reply' );
//	}
}
add_action( 'wp_enqueue_scripts', 'law_scripts' );

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
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory() . '/inc/tgm/tgm.php';