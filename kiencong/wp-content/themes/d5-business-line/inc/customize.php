<?php

function d5businessline_customize_register($wp_customize){

    
    $wp_customize->add_section('d5businessline_options', array(
        'priority' 		=> 10,
		'capability'     => 'edit_theme_options',
		'title'    		=> __('Business Line OPTIONS', 'd5-business-line'),
        'description'   => ' <div class="infohead">' . __('We appreciate an','d5-business-line') . ' <a href="http://wordpress.org/support/view/theme-reviews/d5-business-line" target="_blank">' . __('Honest Review','d5-business-line') . '</a> ' . __('of this Theme if you Love our Work','d5-business-line') . '<br /> <br />

' . __('Need More Features and Options including Exciting 3D Slide and 100+ Advanced Features? Try ','d5-business-line') . '<a href="' . esc_url('https://d5creation.com/theme/businessline/') .'
" target="_blank"><strong>' . __('Business Line Extend','d5-business-line') . '</strong></a><br /> <br /> 
        
        
' . __('You can Visit the Business Line Extend ','d5-business-line') . ' <a href="' . esc_url('http://demo.d5creation.com/themes/?theme=Business%20Line') .'" target="_blank"><strong>' . __('Demo Here','d5-business-line') . '</strong></a> 
        </div>		
		'
    ));
	
 
 	  
//  Banner Image/ Slide Image

		
    $wp_customize->add_setting('d5businessline[banner-image]', array(
        'default'           => get_template_directory_uri() . '/images/slide-image/slide-image1.jpg',
        'capability'        => 'edit_theme_options',
    	'sanitize_callback' => 'esc_url',
        'type'           	=> 'option'
		

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'banner-image', array(
        'label'    			=> __('Front Page Banner Image', 'd5-business-line'),
        'section'  			=> 'd5businessline_options',
        'settings' 			=> 'd5businessline[banner-image]',
		'description'   	=> __('Upload an image for the Front Page Banner. 1050px X 400px image is recommended', 'd5-business-line')
		
    )));
	
	
	$wp_customize->add_setting('d5businessline[banner-iimage]', array(
        'default'           => get_template_directory_uri() . '/images/slide-image/slide-image2.jpg',
        'capability'        => 'edit_theme_options',
    	'sanitize_callback' => 'esc_url',
        'type'           	=> 'option'
		

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'banner-iimage', array(
        'label'    			=> __('Front Page Banner Image', 'd5-business-line'),
        'section'  			=> 'd5businessline_options',
        'settings' 			=> 'd5businessline[banner-iimage]',
		'description'   	=> __('Upload an image for the Front Page Banner. 1050px X 400px image is recommended', 'd5-business-line')
		
    )));
	

	
// Front Page Heading
    $wp_customize->add_setting('d5businessline[heading_text]', array(
        'default'        	=> __('World class and industry standard IT services are our passion. We build your ideas True','d5-business-line'),
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_textarea',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5businessline_heading_text' , array(
        'label'      => __('Front Page Heading', 'd5-business-line'),
        'section'    => 'd5businessline_options',
        'settings'   => 'd5businessline[heading_text]'
    ));
	

	foreach (range(1,4) as $fbsinumber) {
	  
//  Featured Image
    $wp_customize->add_setting('d5businessline[featured-image'. $fbsinumber .']', array(
        'default'           => get_template_directory_uri() . '/images/featured-image' . $fbsinumber . '.jpg',
        'capability'        => 'edit_theme_options',
    	'sanitize_callback' => 'esc_url',
        'type'           	=> 'option'
		

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'featured-image'. $fbsinumber, array(
        'label'    			=> __('Featured Image', 'd5-business-line') . '-' . $fbsinumber,
        'section'  			=> 'd5businessline_options',
        'settings' 			=> 'd5businessline[featured-image'. $fbsinumber .']',
		'description'   	=> __('Upload an image for the Featured Box. 220px X 100px image is recommended','d5-business-line')
    )));
  
// Featured Image Title
    $wp_customize->add_setting('d5businessline[featured-title' . $fbsinumber . ']', array(
        'default'        	=> __('D5 Business Line Theme for Small Business','d5-business-line'),
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_textarea',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5businessline_featured-title' . $fbsinumber, array(
        'label'      => __('Featured Title', 'd5-business-line'). '-' . $fbsinumber,
        'section'    => 'd5businessline_options',
        'settings'   => 'd5businessline[featured-title' . $fbsinumber .']'
    ));


// Featured Image Description
    $wp_customize->add_setting('d5businessline[featured-description' . $fbsinumber . ']', array(
        'default'        	=> __('The Customizable Background and other options of D5 Business Line will give the WordPress Driven Site an attractive look.  D5 Business Line is super elegant and Professional Responsive Theme which will create the business widely expressed','d5-business-line'),
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_textarea',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5businessline_featured-description' . $fbsinumber  , array(
        'label'      => __('Featured Description', 'd5-business-line') . '-' . $fbsinumber,
        'section'    => 'd5businessline_options',
        'settings'   => 'd5businessline[featured-description' . $fbsinumber .']',
		'type' 		 => 'textarea'
    ));
	
// Featured Links
    $wp_customize->add_setting('d5businessline[featured-link' . $fbsinumber . ']', array(
        'default'        	=> '#',
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_url',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5businessline_featured-link' . $fbsinumber  , array(
        'label'      => __('Featured Link', 'd5-business-line') . '-' . $fbsinumber,
        'section'    => 'd5businessline_options',
        'settings'   => 'd5businessline[featured-link' . $fbsinumber .']'
    ));
	
  }
  
 //  Quote Text
    $wp_customize->add_setting('d5businessline[bottom-quotation]', array(
        'default'        	=> __('All the developers of D5 Creation have come from the disadvantaged part or group of the society. All have established themselves after a long and hard struggle in their life ----- D5 Creation Team',  'd5-business-line'),
    	'sanitize_callback' => 'esc_textarea',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5businessline_bottom-quotation', array(
        'label'      => __('Quote Text', 'd5-business-line'),
        'section'    => 'd5businessline_options',
        'settings'   => 'd5businessline[bottom-quotation]',
		'type' 		 => 'textarea'
    )); 
  
 

//  Front Page Post
    $wp_customize->add_setting('d5businessline[lpost]', array(
        'default'        	=> '1',
    	'sanitize_callback' => 'esc_html',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5businessline_lpost', array(
        'label'      => __('Display the Latest Posts', 'd5-business-line'),
        'section'    => 'd5businessline_options',
        'settings'   => 'd5businessline[lpost]',
		'description' => __('Check here if you want to display the latest Posts in Front Page','d5-business-line'),
		'type' 		 => 'checkbox'
    ));
	
	
//  Facebook Link
    $wp_customize->add_setting('d5businessline[facebook-link]', array(
        'default'        	=> '#',
    	'sanitize_callback' => 'esc_url',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5businessline_facebook-link', array(
        'label'      => __('Facebook Link', 'd5-business-line'),
        'section'    => 'd5businessline_options',
        'settings'   => 'd5businessline[facebook-link]'
    ));
	
//  Twitter Link
    $wp_customize->add_setting('d5businessline[twitter-link]', array(
        'default'        	=> '#',
    	'sanitize_callback' => 'esc_url',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5businessline_twitter-link', array(
        'label'      => __('Twitter Link', 'd5-business-line'),
        'section'    => 'd5businessline_options',
        'settings'   => 'd5businessline[twitter-link]'
    ));

//  YouTube Link
    $wp_customize->add_setting('d5businessline[youtube-link]', array(
        'default'        	=> '#',
    	'sanitize_callback' => 'esc_url',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5businessline_youtube-link', array(
        'label'      => __('You Tube Channel Link', 'd5-business-line'),
        'section'    => 'd5businessline_options',
        'settings'   => 'd5businessline[youtube-link]'
    ));
	
//  Linked In Link
    $wp_customize->add_setting('d5businessline[li-link]', array(
        'default'        	=> '#',
    	'sanitize_callback' => 'esc_url',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5businessline_li-link', array(
        'label'      => __('Linked In Link', 'd5-business-line'),
        'section'    => 'd5businessline_options',
        'settings'   => 'd5businessline[li-link]'
    ));

//  Feed or Blog Link
    $wp_customize->add_setting('d5businessline[blog-link]', array(
        'default'        	=> '#',
    	'sanitize_callback' => 'esc_url',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5businessline_blog-link', array(
        'label'      => __('Feed or Blog Link', 'd5-business-line'),
        'section'    => 'd5businessline_options',
        'settings'   => 'd5businessline[blog-link]'
    ));


}


add_action('customize_register', 'd5businessline_customize_register');


	if ( ! function_exists( 'd5businessline_get_option' ) ) :
	function d5businessline_get_option( $d5businessline_name, $d5businessline_default = false ) {
	$d5businessline_config = get_option( 'd5businessline' );

	if ( ! isset( $d5businessline_config ) ) : return $d5businessline_default; else: $d5businessline_options = $d5businessline_config; endif;
	if ( isset( $d5businessline_options[$d5businessline_name] ) ):  return $d5businessline_options[$d5businessline_name]; else: return $d5businessline_default; endif;
	}
	endif;