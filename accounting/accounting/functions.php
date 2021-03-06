<?php
/*  This hook load before the parant theme functions load
--------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_load_before_parant_theme', 2);
function tally_child_load_before_parant_theme(){
	
	define('TK_THEME_NAME', 'Accounting');
	define('TALLY_THEME_NAME', 'Accounting');
	define('TALLY_THEME_STORE_URL', esc_url('http://tallythemes.com/product/accounting-wordpress-theme/'));
	define('TALLY_THEME_DEMO_URL', esc_url('http://tallythemes.com/preview/accounting-wordpress-theme-preview/'));
	define('TALLY_THEME_DOC_URL', esc_url('http://tallythemes.com/doc-item/accounting-wordpress-theme-documentation/'));
	define('TALLY_THEME_SUPPORT_URL', esc_url('http://tallythemes.com/support/forum/wordpress-themes-support/accounting-wordpress-theme-support/'));
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
	
	add_action('tally_header', 'tally_child_do_header_info_text', 11);
	add_action('tally_header', 'tally_child_do_header_menu', 16);
	add_filter('option_tree_settings_args', 'tally_child_option_editing_filter');
	
	remove_action('tally_header', 'tally_do_header_menu', 10);
	remove_action('tally_is_topbar', 'tally_do_topbar_info_text', 10);
	
	add_filter( 'tally_impoter_notice_display', '__return_true');
}

/*
 	Add the header menu bloew then logo
--------------------------------------------*/
function tally_child_do_header_info_text(){
		if(tally_is_header() == 'no') return;
		?>
        	<div class="topbar-info-text hheight">
            	<div class="topbar-phone"><?php echo tally_option( 'info_phone' ); ?></div>
                <div class="topbar-email"><?php echo tally_option( 'info_email' ); ?></div>
            </div>
        <?php
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
                <div class="clear"></div>
            </div>
        </div>
        <?php
}

function tally_child_recommended_plugins($plugins){
	
	$plugins[] = array(
		'name'      => 'TallyKit',
		'slug'      => 'tallykit',
		'required'  => false,
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

 /* Edit ThemeOption
-------------------------------------------------------*/
function tally_child_option_editing_filter($custom_settings){
		$custom_settings['settings']['info_phone'] = array(
		'id' => 'info_phone',
		'label' => __('Phone/Mobile Numeber', 'tally_child_textdomain'),
		'desc' => 'Phone : 000 000 0000',
		'std' => tally_option_std('info_phone'),
		'type' => 'text',
		'section' => 'header',
		'rows' => '',
		'post_type' => '',
		'taxonomy' => '',
		'class' => '',
		'choices' => '',
	);
	
	$custom_settings['settings']['info_email'] = array(
		'id' => 'info_email',
		'label' => __('Email', 'tally_child_textdomain'),
		'desc' => 'Email : info@yourdomain.com',
		'std' => tally_option_std('info_email'),
		'type' => 'text',
		'section' => 'header',
		'rows' => '',
		'post_type' => '',
		'taxonomy' => '',
		'class' => '',
		'choices' => '',
	);

return $custom_settings;
}