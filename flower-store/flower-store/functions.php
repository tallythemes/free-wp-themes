<?php
/*  This hook load before the parant theme functions load
--------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_load_before_parant_theme', 2);
function tally_child_load_before_parant_theme(){
	
	define('TALLY_THEME_STORE_URL', 'http://tallythemes.com/product/flower-store-wordpress-theme/');
	define('TK_THEME_NAME', 'Flower Store');
	define('TALLY_THEME_NAME', 'Flower Store');
	define('TALLY_THEME_DEMO_URL', esc_url('http://tallythemes.com/preview/flower-store-wordpress-theme-preview/'));
	define('TALLY_THEME_DOC_URL', esc_url('http://tallythemes.com/doc-item/flower-store-wordpress-theme-documentation/'));
	define('TALLY_THEME_SUPPORT_URL', esc_url('http://tallythemes.com/support/forum/wordpress-themes-support/flower-store-wordpress-theme-support/'));
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
	
	add_action('tally_header', 'tally_child_do_header_serch_with_icon', 9);
	
	add_filter( 'tally_impoter_notice_display', '__return_true');
}


/*
 	Add the header menu top right
--------------------------------------------*/
function tally_child_do_header_serch_with_icon(){
	if(tally_is_header() == 'no') return;
	?>
        <div class="tally_icon_search_bar">
            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                <div class="search-form-inner">
                    <input type="text" value="" name="s" id="s" placeholder="<?php _e('Search', 'tally_child_textdomain'); ?>" />
                    <input type="submit" id="searchsubmit" value="<?php _e('Search', 'tally_child_textdomain'); ?>" />
                </div>
            </form>
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