<?php
/**
 * achdut-israel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package achdut-israel
 */

if ( ! function_exists( 'achdut_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function achdut_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on achdut-israel, use a find and replace
	 * to change 'achdut' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'achdut', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'achdut' ),
		'onepage'=> esc_html__('HomePage', 'achdut'),
		'footer'=> esc_html__('Footer', 'achdut')
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	/*
         * Enable support for Post Formats.
         * See https://developer.wordpress.org/themes/functionality/post-formats/
         */
	add_theme_support('post-formats', array());
//	add_image_size('hero-image', 1920, 500, true);
	add_image_size('post-main', 550, 150, true);
	add_image_size('event-small', 350, 200, true);



	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'achdut_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'achdut_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function achdut_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'achdut_content_width', 640 );
}
add_action( 'after_setup_theme', 'achdut_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function achdut_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'achdut' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'achdut' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
        'name'          => esc_html__( 'Events Sidebar', 'achdut' ),
        'id'            => 'sidebar-events',
        'description'   => esc_html__( 'Add widgets here.', 'achdut' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Left Sidebar', 'achdut' ),
        'id'            => 'sidebar-footer-left',
        'description'   => esc_html__( 'Add widgets here.', 'achdut' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4><hr class="under-widget-title"> ',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Left 2 Sidebar', 'achdut' ),
        'id'            => 'sidebar-footer-left-2',
        'description'   => esc_html__( 'Add widgets here.', 'achdut' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4><hr class="under-widget-title"> ',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Right 2 Sidebar', 'achdut' ),
        'id'            => 'sidebar-footer-right-2',
        'description'   => esc_html__( 'Add widgets here.', 'achdut' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4><hr class="under-widget-title"> ',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Right Sidebar', 'achdut' ),
        'id'            => 'sidebar-footer-right',
        'description'   => esc_html__( 'Add widgets here.', 'achdut' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4><hr class="under-widget-title"> ',
    ) );

}
add_action( 'widgets_init', 'achdut_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function achdut_scripts() {
	wp_enqueue_style('achdut-style-normalize', get_stylesheet_directory_uri() .'/assets/css/main.css', 'all', microtime());
	wp_enqueue_style('achdut-style-bs', get_stylesheet_directory_uri() .'/assets/css/bootstrap.min.css', 'all', microtime());
	wp_enqueue_style('achdut-style-slick', get_stylesheet_directory_uri() .'/assets/js/slick-carousel/slick/slick.css', 'all', microtime());
	wp_enqueue_style('achdut-style-slick-theme', get_stylesheet_directory_uri() .'/assets/js/slick-carousel/slick/slick-theme.css', 'all', microtime());
	wp_enqueue_style('achdut-style-fa', get_stylesheet_directory_uri() .'/assets/font-awesome/css/font-awesome.min.css', 'all', microtime());
	wp_enqueue_style( 'achdut-style', get_stylesheet_uri() );

	wp_enqueue_script('achdut-script-bs', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), microtime(), true);
	wp_enqueue_script('achdut-script-slick', get_stylesheet_directory_uri() . '/assets/js/slick-carousel/slick/slick.js', array('jquery'), microtime(), true);
	wp_enqueue_script('achdut-script-rm', get_stylesheet_directory_uri() . '/assets/js/readmore-js/readmore.js', array('jquery'), microtime(), true);
	wp_enqueue_script('achdut-script-main', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), microtime(), true);
	wp_enqueue_script( 'achdut-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'achdut-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'achdut_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


function themeInit()
{
	/**
	 * hide the admin bar
	 */
//	add_filter('show_admin_bar', '__return_false');

	/**
	 * ACF setup
	 */
	// 1. customize ACF path
	add_filter('acf/settings/path', 'my_acf_settings_path');
	function my_acf_settings_path($path)
	{
		$path = get_template_directory() . '/inc/plugins/acf/';
		return $path;
	}

	// 2. customize ACF dir
	add_filter('acf/settings/dir', 'my_acf_settings_dir');
	function my_acf_settings_dir($dir)
	{
		$dir = get_stylesheet_directory_uri() . '/inc/plugins/acf/';
		return $dir;
	}

	// 3. Hide ACF field group menu item
	//add_filter('acf/settings/show_admin', '__return_false');

	// 4. Include ACF
	include_once(get_template_directory() . '/inc/plugins/acf/acf.php');

	if (function_exists('acf_add_options_page')) {
		acf_add_options_page(array(
			'page_title' => __('Theme Options', 'amf'),
			'menu_title' => __('Theme Options', 'amf'),
			'menu_slug' => __('theme-options', 'amf')
		));
	}

	add_filter('acf/settings/save_json', 'my_acf_json_save_point');
	function my_acf_json_save_point($path)
	{
		$path = get_template_directory() . '/inc/plugins/acf_json';

		return $path;
	}

	add_filter('acf/settings/load_json', 'my_acf_json_load_point');

	function my_acf_json_load_point($paths)
	{
		unset($paths[0]);
		$paths[] = get_stylesheet_directory() . '/inc/plugins/acf_json';
		//wp_die(var_dump($paths));
		return $paths;
	}

	//acf fields and options
	include_once( get_template_directory() . '/inc/plugins/acf-repeater-editor-accordion/acf-repeater-accordion.php');
	include_once( get_template_directory() . '/inc/plugins/sliders-fields/acf-sliders.php');
}

themeInit();

/*
 *
 * Require Post Types
 */
require_once ( get_template_directory() . '/inc/post_types/ceremonies_post_type.php');
require_once ( get_template_directory() . '/inc/post_types/events_post_type.php');
require_once ( get_template_directory() . '/inc/post_types/team_post_type.php');
require_once ( get_template_directory() . '/inc/post_types/video_post_type.php');
require_once ( get_template_directory() . '/inc/post_types/galleries_post_type.php');



/*
 * Allow Sidebar to show shortcodes
 */
add_filter('widget_text','do_shortcode');

/*
 *
 * Require Shortcodes
 */
require_once ( get_template_directory() . '/inc/shorcodes/events_shortcode.php');
