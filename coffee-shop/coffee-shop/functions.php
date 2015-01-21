<?php
/*  This hook load before the parant theme functions load
--------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_load_before_parant_theme', 2);
function tally_child_load_before_parant_theme(){
	
	define('TALLY_THEME_STORE_URL', 'http://tallythemes.com/product/coffee-shop-wordpress-theme/');
	define('TK_THEME_NAME', 'Coffee Shop');
	define('TALLY_THEME_NAME', 'Coffee Shop');
	define('TALLY_THEME_DEMO_URL', esc_url('http://tallythemes.com/preview/coffee-shop-wordpress-theme-preview/'));
	define('TALLY_THEME_DOC_URL', esc_url('http://tallythemes.com/doc-item/coffee-shop-wordpress-theme-documentation/'));
	define('TALLY_THEME_SUPPORT_URL', esc_url('http://tallythemes.com/support/forum/wordpress-themes-support/coffee-shop-wordpress-theme-support/'));
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
	
	add_action('tally_footer', 'tally_child_do_footer_social_icon', 9);
	
	add_filter( 'tally_impoter_notice_display', '__return_true');
}



/* 	Add the header social icon
--------------------------------------------*/
	function tally_child_do_footer_social_icon(){
		if(tally_is_footer() == 'no') return;
		
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
	



function tally_child_recommended_plugins($plugins){
	
	$plugins[] = array(
		'name'      => 'TallyKit',
		'slug'      => 'tallykit',
		'required'  => true,
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

	return $plugins;
}