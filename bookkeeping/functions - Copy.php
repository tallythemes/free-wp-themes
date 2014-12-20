<?php

/*  Setup The theme and tallykit
-------------------------------------------------------*/
add_filter( 'tally44ee70162e188256c5fd0610cce57d68', '__return_true' );

add_filter( 'tallykit_FrontPageceef7586e74784c155faf485f39f409c', '__return_true');
add_filter( 'tallykit_buddypress4b07bc8b572f256399ed00eab3d4395f', '__return_true');
add_filter( 'tallykit_gallerycb3e82aaa374044c2c92b2b840e2847e', '__return_true');
add_filter( 'tallykit_logoaf78e8b6e8471d76be8e0fe3a74c5c86', '__return_true');
add_filter( 'tallykit_people0f63aba3f5e7114923cffc07ba1bcc65', '__return_true');
add_filter( 'tallykit_portfolio12d062c7f2927c9b814bacd3d7a4ff3d', '__return_true');
add_filter( 'tallykit_shortcodesdb4c6bd239a3cbae370c173cc47f976a', '__return_true');
add_filter( 'tallykit_slideshow2e6e421c7826a61bc15c52e7e7167bc2', '__return_true');
add_filter( 'tallykit_testimonial6b5e47b90191e1e9be73b097928c1e39', '__return_true');




/*  Child theme actions to overwrite main theme
------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_theme_actions' );
function tally_child_theme_actions(){
	if ( ! isset( $content_width ) ) $content_width = 1170;
	
	add_filter('tally_option_std', 'tally_child_option_std_filter', 15);
	add_action( 'tgmpa_register', 'tally_child_register_required_plugins' );
		
	//echo tally_get_serialize_option_data();
	//echo tally_check_see();
	
	add_filter( 'bbpresstallyc_custom_css', '__return_true');
	add_filter( 'buddypresstallyc_custom_css', '__return_true');
	add_filter( 'wootallyc_custom_css', '__return_true');
	
	load_theme_textdomain( 'tally_child_textdomain', get_stylesheet_directory().'/languages' );
}


/*  Theme option STD
-------------------------------------------------------*/
function tally_child_option_std_filter($option){
	
	if(file_exists(TALLY_CHILD_DRI . '/demo/theme-options.txt')){
		$default_options_file = file_get_contents( TALLY_CHILD_DRI . '/demo/theme-options.txt');
		$default_options = unserialize( tally_decode( $default_options_file ) );
		
		if(is_array($default_options)){
			$option = $default_options;
		}
	}
	
	$option['site_logo'] = TALLY_CHILD_URL.'/images/logo.png';
	$option['site_logo_retina'] = TALLY_CHILD_URL.'/images/logo@2x.png';

	return $option;	
}



/*  TGM Plugin
-------------------------------------------------------*/
function tally_child_register_required_plugins() {
	 $plugins = array(
		array(
            'name'      => 'TallyKit',
            'slug'      => 'tallykit',
            'required'  => true,
		),
 		array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => true,
		),
		array(
            'name'      => 'WP Retina 2x',
            'slug'      => 'wp-retina-2x',
            'required'  => false,
		),
		array(
            'name'      => 'WooCommerce',
            'slug'      => 'woocommerce',
            'required'  => false,
		),
		array(
            'name'      => 'Woocommerce Connect For Tally Framework',
            'slug'      => 'woocommerce-connect-for-tally-framework',
            'required'  => false,
		),
		array(
            'name'      => 'Regenerate Thumbnails',
            'slug'      => 'regenerate-thumbnails',
            'required'  => false,
		),
		array(
            'name'      => 'WordPress SEO by Yoast',
            'slug'      => 'wordpress-seo',
            'required'  => false,
		),
		array(
            'name'      => 'bbPress',
            'slug'      => 'bbpress',
            'required'  => false,
		),
		array(
            'name'      => 'bbPress Connect For Tally Framework',
            'slug'      => 'bbpress-connect-for-tally-framework',
            'required'  => false,
		),
		array(
            'name'      => 'BuddyPress',
            'slug'      => 'buddypress',
            'required'  => false,
		),
		array(
            'name'      => 'BuddyPress Connect For Tally Framework',
            'slug'      => 'buddypress-connect-for-tally-framework',
            'required'  => false,
		),
	);
	 
	 $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'tally_child_textdomain' ),
            'menu_title'                      => __( 'Install Plugins', 'tally_child_textdomain' ),
            'installing'                      => __( 'Installing Plugin: %s', 'tally_child_textdomain' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'tally_child_textdomain' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'tally_child_textdomain' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'tally_child_textdomain' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tally_child_textdomain' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
	 
	tgmpa( $plugins, $config );
}