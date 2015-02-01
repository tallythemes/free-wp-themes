<?php
/*  This hook load before the parant theme functions load
--------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_load_before_parant_theme', 2);
function tally_child_load_before_parant_theme(){
	
	define('TALLY_THEME_STORE_URL', 'http://tallythemes.com/product/electrician-wordpress-theme/');
	define('TK_THEME_NAME', 'Electrician');
	define('TALLY_THEME_NAME', 'Electrician');
	define('TALLY_THEME_DEMO_URL', esc_url('http://tallythemes.com/preview/electrician-wordpress-theme-preview/'));
	define('TALLY_THEME_DOC_URL', esc_url('http://tallythemes.com/doc-item/electrician-wordpress-theme-documentation/'));
	define('TALLY_THEME_SUPPORT_URL', esc_url('http://tallythemes.com/support/forum/wordpress-themes-support/electrician-wordpress-theme-support/'));
	define('TALLY_THEME_ORG_URL', '');
	define('TALLY_THEME_MORE_URL', esc_url('http://tallythemes.com/product-category/wordpress-themes/'));
	
	if ( ! isset( $content_width ) ) $content_width = 1170;
	load_theme_textdomain( 'tally_child_textdomain', get_stylesheet_directory().'/languages' );
}



/*  This hook load after the parant theme functions load
--------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_load_after_parant_theme', 4);
function tally_child_load_after_parant_theme(){
	
	add_filter( 'tally_recommended_plugins', 'tally_child_recommended_plugins');
	
	add_filter( 'tally_impoter_notice_display', '__return_true');;
}



function tally_child_recommended_plugins($plugins){
	
	$plugins[] = array(
		'name'      => 'TallyKit',
		'slug'      => 'tallykit',
		'required'  => false,
	);
	
	return $plugins;
}