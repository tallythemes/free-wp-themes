<?php
/*  This hook load before the parant theme functions load
--------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_load_before_parant_theme', 2);
function tally_child_load_before_parant_theme(){
	
	define('TALLY_THEME_STORE_URL', 'http://tallythemes.com/product/baby-care-wordpress-theme/');
	define('TK_THEME_NAME', 'Baby Care');
	define('TALLY_THEME_NAME', 'Baby Care');
	define('TALLY_THEME_DEMO_URL', esc_url('http://tallythemes.com/preview/baby-care-wordpress-theme-preview/'));
	define('TALLY_THEME_DOC_URL', esc_url('http://tallythemes.com/doc-item/baby-care-wordpress-theme-documentation/'));
	define('TALLY_THEME_SUPPORT_URL', esc_url('http://tallythemes.com/support/forum/wordpress-themes-support/baby-care-wordpress-theme-support/'));
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
	
	add_action('tally_header', 'tally_child_do_header_info_text', 9);
	add_action('tally_header', 'tally_child_do_header_serch_with_icon', 11);
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
            	<div class="topbar-infotext"><?php echo tally_option( 'info_text' ); ?></div>
            	<div class="topbar-phone"><?php echo tally_option( 'info_phone' ); ?></div>
                <!--<div class="topbar-email">< ? php echo tally_option( 'info_email' ); ?></div>-->
            </div>
        <?php
}



/*
 	Add the header menu bloew then logo
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
		'required'  => true,
	);
		
	return $plugins;
}


 /* Edit ThemeOption
-------------------------------------------------------*/
function tally_child_option_editing_filter($custom_settings){
	
	$custom_settings['settings']['info_text'] = array(
		'id' => 'info_text',
		'label' => __('Info Title', 'tally_child_textdomain'),
		'desc' => 'If you need help, use hotline phone number:',
		'std' => tally_option_std('info_text'),
		'type' => 'text',
		'section' => 'header',
		'rows' => '',
		'post_type' => '',
		'taxonomy' => '',
		'class' => '',
		'choices' => '',
	);

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
	return $custom_settings;
}