<?php
/*  This hook load before the parant theme functions load
--------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_load_before_parant_theme', 2);
function tally_child_load_before_parant_theme(){
	
	define('TALLY_THEME_STORE_URL', 'http://tallythemes.com/');
	define('TK_THEME_NAME', 'Agencies');
	define('TALLY_THEME_NAME', 'Agencies');
	
	if ( ! isset( $content_width ) ) $content_width = 1170;
	load_theme_textdomain( 'tally_child_textdomain', get_stylesheet_directory().'/languages' );
}



/*  This hook load after the parant theme functions load
--------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_load_after_parant_theme', 4);
function tally_child_load_after_parant_theme(){

	add_filter( 'tallyd80449e59025f810cf6023033454f1f4', '__return_true' );
	
	add_filter( 'bbpresstallyc_custom_css', '__return_true');
	add_filter( 'buddypresstallyc_custom_css', '__return_true');
	add_filter( 'wootallyc_custom_css', '__return_true');
	
	add_filter( 'tally_recommended_plugins', 'tally_child_recommended_plugins');
	
	add_action('tally_header', 'tally_child_do_header_info_text', 11);
	add_action('tally_header', 'tally_child_do_header_social_icon', 9);
	add_filter('option_tree_settings_args', 'tally_child_option_editing_filter');
	remove_action('tally_is_topbar', 'tally_do_topbar_social_icon', 10);
	remove_action('tally_is_topbar', 'tally_do_topbar_info_text', 10);
	
	//echo tally_get_serialize_option_data();
	//echo tally_check_see();
}


/* 	Add the header social icon
--------------------------------------------*/
function tally_child_do_header_social_icon(){
		if(tally_is_header() == 'no') return;
		?>
        <?php if(tally_option('enable_social_icons', 'yes') == 'yes'): ?>
			<?php if(is_array(tally_option('social_icons'))): ?>
                <div class="tally-social-icons">
                    <?php foreach(tally_option('social_icons') as $social_icon): ?>
                        <a href="<?php echo $social_icon['link']; ?>" class="" title="<?php echo $social_icon['title']; ?>" rel="nofollow" target="_blank">
                            <i class="fa <?php echo $social_icon['icon']; ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php
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