<?php
/* 	D5 Business Line Theme's Functions
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since D5 Business Line 1.0
*/
   
	
	require_once ( trailingslashit(get_template_directory()) . 'inc/customize.php' );
	
	function d5businessline_about_page() { 
	add_theme_page( 'Business Line Options', 'Business Line Options', 'edit_theme_options', 'theme-about', 'd5businessline_theme_about' ); 
	}
	add_action('admin_menu', 'd5businessline_about_page');
	function d5businessline_theme_about() {  require_once ( trailingslashit(get_template_directory()) . 'inc/theme-about.php' ); }
	

	function d5businessline_setup() {
//	Set the content width based on the theme's design and stylesheet.
	load_theme_textdomain( 'd5-business-line', get_template_directory() . '/languages' );	
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 600;
	add_theme_support( "title-tag" );
	
	add_theme_support( 'automatic-feed-links' );
  	register_nav_menus( array( 'main-menu' => __( 'Main Menu', 'd5-business-line' )) );

// 	This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

	// additional image sizes
	// delete the next line if you do not need additional image sizes
	add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
	}	
			
// 	WordPress 3.4 Custom Background Support	
	$d5businessline_custom_background = array(
	'default-color'          => 'eeeeee',
	'default-image'          => get_template_directory_uri() . '/images/bodyback.jpg',
	);
	add_theme_support( 'custom-background', $d5businessline_custom_background );
	
// 	WordPress 3.4 Custom Header Support				
	$d5businessline_custom_header = array(
	'default-image'          =>'',
	'random-default'         => false,
	'width'                  => 300,
	'height'                 => 90,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '000000',
	'header-text'            => false,
	'uploads'                => true,
	'wp-head-callback' 		 => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $d5businessline_custom_header ); }
	add_action( 'after_setup_theme', 'd5businessline_setup' );
	

// 	Functions for adding script
	function d5businessline_enqueue_scripts() {
	wp_enqueue_style('d5businessline-style', get_stylesheet_uri(), false );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); 	}
	
	wp_enqueue_script( 'd5businessline-menu-style', get_template_directory_uri(). '/js/menu.js', array( 'jquery' ) );
	wp_register_style('d5businessline-gfonts1', '//fonts.googleapis.com/css?family=Oswald', false );
	wp_register_style('d5businessline-gfonts2', '//fonts.googleapis.com/css?family=Droid+Sans', false );
	wp_enqueue_style('d5businessline-gfonts1');
	wp_enqueue_style('d5businessline-gfonts2');
	add_editor_style( get_template_directory_uri(). '/editor-style.css' );
	wp_enqueue_script( 'd5businessline-html5', get_template_directory_uri().'/js/html5.js');
    wp_script_add_data( 'd5businessline-html5', 'conditional', 'lt IE 9' );
	}
	add_action( 'wp_enqueue_scripts', 'd5businessline_enqueue_scripts' );
	
// 	Functions for adding script to Admin Area
	function d5businessline_admin_style() { wp_enqueue_style( 'd5businessline_admin_css', get_template_directory_uri() . '/inc/admin-style.css', false ); }
	add_action( 'admin_enqueue_scripts', 'd5businessline_admin_style' );

function d5businessline_sworking() {
	if ( d5businessline_get_option('banner-iimage', get_template_directory_uri() . '/images/slide-image/slide-image2.jpg' )  != '' ): wp_enqueue_script( 'd5businessline-slider', get_template_directory_uri(). '/js/slider.js', false );
	endif;
	echo '<div id="slide"><img  class="show" src="' . d5businessline_get_option('banner-image', get_template_directory_uri() . '/images/slide-image/slide-image1.jpg' ) . '"/><img src="' . d5businessline_get_option('banner-iimage', get_template_directory_uri() . '/images/slide-image/slide-image2.jpg' ) . '"/></div>';
	}

//	function tied to the excerpt_more filter hook.
	function d5businessline_excerpt_length( $length ) {
	global $blExcerptLength;
	if ($blExcerptLength) {
    return $blExcerptLength;
	} else {
    return 50; //default value
    } }
	add_filter( 'excerpt_length', 'd5businessline_excerpt_length', 999 );
	
	function d5businessline_excerpt_more($more) {
       global $post;
	return '<a href="'. get_permalink($post->ID) . '" class="read-more">'. __('Read the Rest...','d5-business-line') .'</a>';
	}
	add_filter('excerpt_more', 'd5businessline_excerpt_more');
	function d5businessline_content() { the_content('<span class="read-more">'. __('Read the Rest...','d5-business-line') .'</span>'); }
//	D5 BusinessLine and WordPress Credit
	function d5businessline_credit() {
		echo '&nbsp;| D5 Business Line Theme by: <a href="'.esc_url('https://d5creation.com').'" target="_blank"><img  width="30px" src="' . get_template_directory_uri() . '/images/d5logofooter.png" /> D5 Creation</a> | Powered by: <a href="http://wordpress.org" target="_blank">WordPress</a>';
	}


//	Adds a pretty "Continue Reading" link to custom post excerpts.
	function d5businessline_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= d5businessline_continue_reading_link();
	}
	return $output;
	}
	add_filter( 'get_the_excerpt', 'd5businessline_custom_excerpt_more' );


//	Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link
	function d5businessline_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
	}
	add_filter( 'wp_page_menu_args', 'd5businessline_page_menu_args' );


//	Registers the Widgets and Sidebars for the site
	function d5businessline_widgets_init() {

	register_sidebar( array(
		'name' => __('Primary Sidebar','d5-business-line'), 
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' =>  __('Secondary Sidebar', 'd5-business-line'),
		'id' => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	 
	register_sidebar( array(
		'name' => __('Footer Area One', 'd5-business-line'),
		'id' => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	    
	register_sidebar( array(
		'name' => __('Footer Area Two', 'd5-business-line'),
		'id' => 'sidebar-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __('Footer Area Three','d5-business-line'),
		'id' => 'sidebar-5',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	
	register_sidebar( array(
		'name' =>  __('Footer Area Four', 'd5-business-line'),
		'id' => 'sidebar-6',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	
	}
	add_action( 'widgets_init', 'd5businessline_widgets_init' );
	
	
	add_filter('the_title', 'd5businessline_title');
	function d5businessline_title($title) {
        if ( '' == $title ) {
            return '(Untitled)';
        } else {
            return $title;
        }
    }
	
//	Remove WordPress Custom Header Support for the theme D5 Business Line
// remove_theme_support('custom-header');