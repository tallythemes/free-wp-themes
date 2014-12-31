<?php
/*  This hook load before the parant theme functions load
--------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_load_before_parant_theme', 2);
function tally_child_load_before_parant_theme(){
	
	define('TALLY_THEME_STORE_URL', 'http://tallythemes.com/');
	define('TK_THEME_NAME', 'Towing Company');
	define('TALLY_THEME_NAME', 'Towing Company');
	
	if ( ! isset( $content_width ) ) $content_width = 1170;
	load_theme_textdomain( 'tally_child_textdomain', get_stylesheet_directory().'/languages' );
}



/*  This hook load after the parant theme functions load
--------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_load_after_parant_theme', 4);
function tally_child_load_after_parant_theme(){

	add_filter( 'tally83cf82935474106f734955f96bec9305', '__return_true' );
	
	add_filter( 'bbpresstallyc_custom_css', '__return_true');
	add_filter( 'buddypresstallyc_custom_css', '__return_true');
	add_filter( 'wootallyc_custom_css', '__return_true');
	
	add_filter( 'tally_recommended_plugins', 'tally_child_recommended_plugins');
	add_action('tally_header', 'tally_child_do_header_info_text', 11);
	add_action('tally_header', 'tally_child_do_header_menu', 16);
	remove_action('tally_header', 'tally_do_header_menu', 10);
	
	//echo tally_get_serialize_option_data();
	//echo tally_check_see();
}



/*
 	Add the header menu bloew then logo
--------------------------------------------*/
	function tally_child_do_header_info_text(){
		if(tally_is_header() == 'no') return;
		
		echo '<div class="topbar-info-text hheight">';
			echo apply_filters('info_phone', '<div class="topbar-phone">Phone : 000 000 0000</div>');
			echo apply_filters('info_email', '<div class="topbar-email">Email : info@yourdomain.com</div>');
		echo '</div>';
	}



/*
 	Add the header menu bloew then logo
--------------------------------------------*/
	function tally_child_do_header_menu(){
		if(tally_is_header() == 'no') return;
		
		?>
        <div class="main_menu_area">
        	<div class="main_menu_area-inner">
                <div class="menu_area hheight">
                    <nav id="nav" class="main-navigation" role="navigation">
                        <?php wp_nav_menu( array('theme_location'=>'main_menu') ); ?>
                    </nav><!-- #site-navigation -->
                </div>
            </div>
            <div class="clear"></div>
        </div>
		<?php
	}
	



function tally_child_recommended_plugins($plugins){
	
	$plugins[] = array(
		'name'      => 'TallyKit',
		'slug'      => 'tallykit',
		'required'  => true,
	);
	$plugins[] = array(
		'name'      => 'WP Retina 2x',
		'slug'      => 'wp-retina-2x',
		'required'  => false,
	);
	$plugins[] = array(
		'name'      => 'WooCommerce',
		'slug'      => 'woocommerce',
		'required'  => false,
	);
	$plugins[] = array(
		'name'      => 'Woocommerce Connect For Tally Framework',
		'slug'      => 'woocommerce-connect-for-tally-framework',
		'required'  => false,
	);
	$plugins[] = array(
		'name'      => 'WordPress SEO by Yoast',
		'slug'      => 'wordpress-seo',
		'required'  => false,
	);
	$plugins[] = array(
		'name'      => 'bbPress',
		'slug'      => 'bbpress',
		'required'  => false,
	);
	$plugins[] = array(
		'name'      => 'bbPress Connect For Tally Framework',
		'slug'      => 'bbpress-connect-for-tally-framework',
		'required'  => false,
	);
	$plugins[] = array(
		'name'      => 'BuddyPress',
		'slug'      => 'buddypress',
		'required'  => false,
	);
	$plugins[] = array(
		'name'      => 'BuddyPress Connect For Tally Framework',
		'slug'      => 'buddypress-connect-for-tally-framework',
		'required'  => false,
	);
	
	return $plugins;
}