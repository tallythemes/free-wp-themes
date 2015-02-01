<?php
/*  This hook load before the parant theme functions load
--------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_load_before_parant_theme', 2);
function tally_child_load_before_parant_theme(){
	
	define('TALLY_THEME_STORE_URL', 'http://tallythemes.com/product/towing-company-wordpress-theme/');
	define('TK_THEME_NAME', 'Towing Company');
	define('TALLY_THEME_NAME', 'Towing Company');
	define('TALLY_THEME_DEMO_URL', esc_url('http://tallythemes.com/preview/towing-company-wordpress-theme-preview/'));
	define('TALLY_THEME_DOC_URL', esc_url('http://tallythemes.com/doc-item/towing-company-wordpress-theme-documentation/'));
	define('TALLY_THEME_SUPPORT_URL', esc_url('http://tallythemes.com/support/forum/wordpress-themes-support/towing-company-wordpress-theme-support/'));
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
	remove_action('tally_header', 'tally_do_header_menu', 10);
	
	add_filter( 'tally_impoter_notice_display', '__return_true');
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
		'required'  => false,
	);
	
	return $plugins;
}