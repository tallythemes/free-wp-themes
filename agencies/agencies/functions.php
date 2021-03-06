<?php
/*  This hook load before the parant theme functions load
--------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_load_before_parant_theme', 2);
function tally_child_load_before_parant_theme(){
	
	define('TALLY_THEME_STORE_URL', 'http://tallythemes.com/product/agencies-wordpress-theme/');
	define('TK_THEME_NAME', 'Agencies');
	define('TALLY_THEME_NAME', 'Agencies');
	define('TALLY_THEME_DEMO_URL', esc_url('http://tallythemes.com/preview/agencies-wordpress-theme-preview/'));
	define('TALLY_THEME_DOC_URL', esc_url('http://tallythemes.com/doc-item/agencies-wordpress-theme-documentation/'));
	define('TALLY_THEME_SUPPORT_URL', esc_url('http://tallythemes.com/support/forum/wordpress-themes-support/agencies-wordpress-theme-support/'));
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
	add_action('tally_header', 'tally_child_do_header_social_icon', 9);
	add_filter('option_tree_settings_args', 'tally_child_option_editing_filter');
	remove_action('tally_is_topbar', 'tally_do_topbar_social_icon', 10);
	remove_action('tally_is_topbar', 'tally_do_topbar_info_text', 10);
	
	add_filter( 'tally_impoter_notice_display', '__return_true');
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
		'required'  => false,
	);
	$plugins[] = array(
		'name'      => 'WP Retina 2x',
		'slug'      => 'wp-retina-2x',
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