<?php

get_template_part('/inc/kirki');







function halim_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'sliders', 'teams', 'testimonials', 'portfolio', 'gallery'));
    load_theme_textdomain('halim', get_template_directory() . '/languages');

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'templatemo_535_softy_pinko')
    ));
	
			add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);
        // add_theme_support( 'block-templates' );


        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        );
     
        add_theme_support( 'custom-logo', $defaults );
        add_theme_support( 'automatic-feed-links' );

}
add_action('after_setup_theme', 'halim_setup');





function halim_assets() {

    // CSS
    
    wp_enqueue_style( 'font-poppins', '//fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900', array(), '1.0.0', 'all' );
    
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1.0.0', 'all');

    wp_enqueue_style( 'pinko-css', get_template_directory_uri() . '/assets/css/templatemo-softy-pinko.css', array(), '1.0.0', 'all');

    wp_enqueue_style( 'style-theme', get_stylesheet_uri() );

    // JS


    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'bsminjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'scrollreveal', get_template_directory_uri() . '/assets/js/scrollreveal.min.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'imgfix', get_template_directory_uri() . '/assets/js/imgfix.min.js', array('jquery'), '1.0.0', true );
    
    if ( is_single('1740') ||
    ( !is_home() || !is_front_page() || !is_single() ) ) {
        wp_enqueue_script( 'comment-reply' );
    } 

    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true );

}   
add_action('wp_enqueue_scripts', 'halim_assets');


//Comment Field Order
add_filter( 'comment_form_fields', 'mo_comment_fields_custom_order' );
function mo_comment_fields_custom_order( $fields ) {
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
    $url_field = $fields['url'];
    $cookies_field = $fields['cookies'];
    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    // the order of fields is the order below, change it as needed:
    $fields['author'] = $author_field;
    $fields['email'] = $email_field;
    $fields['url'] = $url_field;
    $fields['comment'] = $comment_field;
    $fields['cookies'] = $cookies_field;
    // done ordering, now return the fields:
    return $fields;
}


