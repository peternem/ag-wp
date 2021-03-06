<?php
/**
 * Sparkling functions and definitions
 *
 * @package sparkling
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 648; /* pixels */
}


function admin_theme_style() {
    wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/admin/css/admin_style.css');
}
add_action('admin_enqueue_scripts', 'admin_theme_style');


/**
 * Set the content width for full width pages with no sidebar.
 */
function sparkling_content_width() {
  if ( is_page_template( 'page-fullwidth.php' ) ) {
    global $content_width;
    $content_width = 1008; /* pixels */
  }
}
add_action( 'template_redirect', 'sparkling_content_width' );

if ( ! function_exists( 'sparkling_main_content_bootstrap_classes' ) ) :
/**
 * Add Bootstrap classes to the main-content-area wrapper.
 */
function sparkling_main_content_bootstrap_classes() {
	if ( is_page_template( 'page-fullwidth.php' ) ) {
		return 'col-sm-12 col-md-12';
	}
	return 'col-sm-12 col-md-8';
}
endif; // sparkling_main_content_bootstrap_classes

if ( ! function_exists( 'sparkling_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sparkling_setup() {

    // Add a Custom CSS file to WP Admin Area


  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   */
  load_theme_textdomain( 'sparkling', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /**
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
   */
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'sparkling-full-page' , 1920, 1080, true);
  add_image_size( 'sparkling-full-page-half' , 1920, 540, true);
  add_image_size( 'sparkling-full-width' , 1920, 1080, true); //Full Width Thumbnail
  add_image_size( 'sparkling-featured', 1920, 1080, true );

  //add_image_size( 'sparkling-featured', 750, 410, true );
  add_image_size( 'tab-square', 800, 800 , true); // Small Thumbnail
  add_image_size( 'tab-rectangle', 800, 700 , true); // Small Thumbnail
  add_image_size( 'tab-medium', 120, 120 , true); // Small Thumbnail
  add_image_size( 'tab-small', 60, 60 , true); // Small Thumbnail

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
  	'primary' => __( 'Primary Menu', 'sparkling' ),
  	'footer-links' => __( 'Footer Links', 'sparkling' ) // secondary nav in footer
  ) );

  // Add Class to All Excerpts in WordPress
  add_filter( "the_excerpt", "add_class_to_excerpt" );
  function add_class_to_excerpt( $excerpt ) {
  	return str_replace('<p', '<p class="excerpt"', $excerpt);
  }

  // Enable support for Post Formats.
  add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

  // Setup the WordPress core custom background feature.
  add_theme_support( 'custom-background', apply_filters( 'sparkling_custom_background_args', array(
  	'default-color' => 'F2F2F2',
  	'default-image' => '',
  ) ) );

  // Enable support for HTML5 markup.
  add_theme_support( 'html5', array(
    'comment-list',
    'search-form',
    'comment-form',
    'gallery',
    'caption',
  ) );

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );

}
endif; // sparkling_setup
add_action( 'after_setup_theme', 'sparkling_setup' );


/*--------------------------------------*/
/* Add SVG Support to media library
 /*--------------------------------------*/

function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );
// Add SVG Thumbnails to media library grid

function custom_admin_head() {
	$css = '';
	$css = 'td.media-icon img[src$=".svg"] { width: 100% !important; height: auto !important; }';
	echo '<style type="text/css">'.$css.'</style>';
}


/**
 * Register widgetized area and update sidebar with default widgets.
 */
function sparkling_widgets_init() {
  	register_sidebar( array(
  		'name'          => __( 'Sidebar', 'sparkling' ),
  		'id'            => 'sidebar-1',
  		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</aside>',
  		'before_title'  => '<h2 class="widget-title">',
  		'after_title'   => '</h2>',
  	) );

    register_sidebar(array(
    	'id' => 'home-widget-1',
    	'name' => __( 'Homepage Widget 1', 'sparkling' ),
    	'description' => __( 'Displays on the Home Page', 'sparkling' ),
    	'before_widget' => '<div id="%1$s" class="widget  %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h2 class="widgettitle">',
    	'after_title' => '</h2>',
    ));

    register_sidebar(array(
      'id' => 'home-widget-2',
      'name' =>  __( 'Homepage Widget 2', 'sparkling' ),
      'description' => __( 'Displays on the Home Page', 'sparkling' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widgettitle">',
      'after_title' => '</h2>',
    ));

    register_sidebar(array(
      'id' => 'home-widget-3',
      'name' =>  __( 'Homepage Widget 3', 'sparkling' ),
      'description' =>  __( 'Displays on the Home Page', 'sparkling' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widgettitle">',
      'after_title' => '</h2>',
    ));

    register_sidebar(array(
    	'id' => 'footer-widget-1',
    	'name' =>  __( 'Footer Widget 1', 'sparkling' ),
    	'description' =>  __( 'Used for footer widget area', 'sparkling' ),
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h3 class="widgettitle">',
    	'after_title' => '</h3>',
    ));

    register_sidebar(array(
      'id' => 'footer-widget-2',
      'name' =>  __( 'Footer Widget 2', 'sparkling' ),
      'description' =>  __( 'Used for footer widget area', 'sparkling' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widgettitle">',
      'after_title' => '</h3>',
    ));

    register_sidebar(array(
      'id' => 'footer-widget-3',
      'name' =>  __( 'Footer Widget 3', 'sparkling' ),
      'description' =>  __( 'Used for footer widget area', 'sparkling' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widgettitle">',
      'after_title' => '</h3>',
    ));

	register_widget( 'sparkling_social_widget' );
    register_widget( 'sparkling_popular_posts' );
    register_widget( 'sparkling_categories' );

}
add_action( 'widgets_init', 'sparkling_widgets_init' );



/* --------------------------------------------------------------
       Theme Widgets
-------------------------------------------------------------- */
require_once(get_template_directory() . '/inc/widgets/widget-categories.php');
require_once(get_template_directory() . '/inc/widgets/widget-social.php');
require_once(get_template_directory() . '/inc/widgets/widget-popular-posts.php');

/**
 * adding the sparkling search form (created in extra.php)
 */

add_filter( 'get_search_form', 'sparkling_wpsearch' );

function my_login_logo_one() {
	$imgUrl = "/wp-content/uploads/2015/10/agalite-logo-cs3.svg";
	?>
<style type="text/css">
body.login div#login h1 a {
	background-image: url("<?php echo $imgUrl; ?>");
	background-size: 100% auto;
    width: 275px;
}
</style>
 <?php
} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );
/**
 * This function removes inline styles set by WordPress gallery.
 */
function sparkling_remove_gallery_css( $css ) {
  return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}

add_filter( 'gallery_style', 'sparkling_remove_gallery_css' );

/**
 * Enqueue scripts and styles.
 */
function sparkling_scripts() {
	$ver = time();
  	// Add Bootstrap default CSS
  	wp_enqueue_style( 'sparkling-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', false, $ver);
  	// Add main theme stylesheet
  	wp_enqueue_style('sparkling-style', get_template_directory_uri() . '/style.css', false, $ver);
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/dist/css/app.css', false, $ver);
  	wp_enqueue_style( 'sparkling-icons', get_template_directory_uri().'/dist/css/font-awesome.min.css' );
  	// Add Modernizr for better HTML5 and CSS3 support;
  //	wp_enqueue_script('sparkling-modernizr', get_template_directory_uri().'/dist/js/modernizr.min.js',array('jquery'), $ver , false);
	wp_enqueue_script('sparkling-bootstrapjs', get_template_directory_uri().'/dist/js/bootstrap.min.js', array('jquery'), $ver, true);
	wp_enqueue_script( 'sparkling-functions', get_template_directory_uri() . '/dist/js/app.js', array('jquery'), $ver, true);

  // Treaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sparkling_scripts' );

/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/admin/' );
require_once dirname( __FILE__ ) . '/inc/admin/options-framework.php';
// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );

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

/**
 * Load custom nav walker
 */
require get_template_directory() . '/inc/navwalker.php';

//


/*******************
 *
 * News Custom Post Type
 *
 ********************/


function my_custom_post_news() {
	$labels = array(
			'name'               => _x( 'News', 'post type general name' ),
			'singular_name'      => _x( 'News', 'post type singular name' ),
			'add_new'            => _x( 'Add New', 'News' ),
			'add_new_item'       => __( 'Add New News' ),
			'edit_item'          => __( 'Edit News' ),
			'new_item'           => __( 'New News' ),
			'all_items'          => __( 'All News' ),
			'view_item'          => __( 'View News' ),
			'search_items'       => __( 'Search News' ),
			'not_found'          => __( 'No News found' ),
			'not_found_in_trash' => __( 'No News found in the Trash' ),
			'parent_item_colon'  => '',
			'menu_name'          => 'News'
	);
	$args = array(
			'labels'        => $labels,
			'description'   => 'Holds our products and product specific data',
			'public'        => true,
			'menu_position' => 6,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true,
			'taxonomies'        => array('post_tag') // this is IMPORTANT
	);
	register_post_type( 'news', $args );
}
add_action( 'init', 'my_custom_post_news' );


function my_taxonomies_news() {
	$labels = array(
			'name'              => _x( 'News Categories', 'taxonomy general name' ),
			'singular_name'     => _x( 'News', 'taxonomy singular name' ),
			'search_items'      => __( 'Search News Categories' ),
			'all_items'         => __( 'All News Categories' ),
			'parent_item'       => __( 'Parent News Category' ),
			'parent_item_colon' => __( 'Parent News Category:' ),
			'edit_item'         => __( 'Edit News Category' ),
			'update_item'       => __( 'Update News Category' ),
			'add_new_item'      => __( 'Add New News Category' ),
			'new_item_name'     => __( 'New News Category' ),
			'menu_name'         => __( 'News Categories' ),
	);
	$args = array(
			'labels' => $labels,
			'hierarchical' => true,
			'show_ui'           => true,
			'show_admin_column' => true,

	);
	register_taxonomy( 'news_category', 'news', $args );
}
add_action( 'init', 'my_taxonomies_news', 0 );

/**
 * WordPress function for redirecting users on login based on user role
 */
function my_login_redirect( $url, $request, $user ){
	if( $user && is_object( $user ) && is_a( $user, 'WP_User' ) ) {
		if( $user->has_cap( 'administrator' ) ) {
			$url = admin_url();
		} elseif ( $user->has_cap('dealer') ) {
			$url = home_url('agalite-dealer-tools');
		} else {
			$url = home_url('/');
		}
	}
	return $url;
}
add_filter('login_redirect', 'my_login_redirect', 10, 3 );

/**
* Returns ID of top-level parent category, or current category if you are viewing a top-level
*
* @param    string      $catid      Category ID to be checked
* @return   string      $catParent  ID of top-level parent category
*/
function smart_category_top_parent_id ($catid) {
    while ($catid) {
        $cat = get_category($catid); // get the object for the catid
        $catid = $cat->category_parent; // assign parent ID (if exists) to $catid
          // the while loop will continue whilst there is a $catid
          // when there is no longer a parent $catid will be NULL so we can assign our $catParent
        $catParent = $cat->cat_ID;
    }
    return $catParent;
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Home Page Hero Carousel',
		'menu_title'	=> 'Home Page Hero Carousel',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Home - Collection Cards',
		'menu_title'	=> 'Home - Collection Cards',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Home - New Product',
		'menu_title'	=> 'Home - New Product',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Home - Featured Product',
		'menu_title'	=> 'Home - Featured Product',
		'parent_slug'	=> 'theme-general-settings',
	));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Footer Settings',
	// 	'menu_title'	=> 'Footer',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

}

function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');

add_filter( 'rest_authentication_errors', function( $result ) {
    if ( ! empty( $result ) ) {
        return $result;
    }
    if ( ! is_user_logged_in() ) {
        return new WP_Error( 'rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ) );
    }
    return $result;
});

// disable RSS/Atom feeds
function itsme_disable_feed() {
 wp_die( __( 'No feed available, please visit the <a href="'. esc_url( home_url( '/' ) ) .'">homepage</a>!' ) );
}

add_action('do_feed', 'itsme_disable_feed', 1);
add_action('do_feed_rdf', 'itsme_disable_feed', 1);
add_action('do_feed_rss', 'itsme_disable_feed', 1);
add_action('do_feed_rss2', 'itsme_disable_feed', 1);
add_action('do_feed_atom', 'itsme_disable_feed', 1);
add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);
