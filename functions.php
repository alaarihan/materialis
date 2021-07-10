<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */

if ( ! defined('MATERIALIS_THEME_REQUIRED_PHP_VERSION')) {
    define('MATERIALIS_THEME_REQUIRED_PHP_VERSION', '5.3.0');
}

add_action('after_switch_theme', 'materialis_check_php_version');

function materialis_check_php_version()
{
    // Compare versions.
    if (version_compare(phpversion(), MATERIALIS_THEME_REQUIRED_PHP_VERSION, '<')) :
        // Theme not activated info message.
        add_action('admin_notices', 'materialis_php_version_notice');


        // Switch back to previous theme.
        switch_theme(get_option('theme_switched'));

        return false;
    endif;
}

function materialis_php_version_notice()
{
    ?>
    <div class="notice notice-alt notice-error notice-large">
        <h4><?php esc_html_e('Materialis theme activation failed!', 'materialis'); ?></h4>
        <p>
            <?php printf(esc_html__('You need to update your PHP version to use the %s.', 'materialis'), "<strong>Materialis</strong>"); ?> <br/>
            <?php printf(
            // Translators: 1 is the users PHP version and 2 is the required PHP version.
                esc_html__('Current PHP version is %1$s and the minimum required version is %2$s', 'materialis'),
                '<strong>' . phpversion() . '</strong>',
                '<strong>' . MATERIALIS_THEME_REQUIRED_PHP_VERSION . '</strong>'
            ); ?>
        </p>
    </div>
    <?php
}

if (version_compare(phpversion(), MATERIALIS_THEME_REQUIRED_PHP_VERSION, '>=')) {
    require_once get_template_directory() . "/inc/functions.php";

     

    if ( ! materialis_can_show_cached_value("materialis_cached_kirki_style_materialis")) {
        
        if ( ! materialis_skip_customize_register()) {
            do_action("materialis_customize_register_options");
        }
    }

} else {
    add_action('admin_notices', 'materialis_php_version_notice');
}

// Change sort order for wathiqa post archive page
add_action( 'pre_get_posts', 'change_sort_order_for_wathiqa_page'); 
function change_sort_order_for_wathiqa_page($query){
    if ( is_post_type_archive('wathiqa_page') ) {
        if(!is_admin()){
		    $query->set( 'order', 'ASC' );
		    $query->set( 'orderby', 'title_num' );
		   
		   	$query->set( 'posts_per_page', 1000 );
        }
    }  
};

// Redirect to mobile home page for mobile
add_action( 'wp', 'redirect_if_mobile_and_front_page'); 
function redirect_if_mobile_and_front_page(){
    if ( wp_is_mobile() && is_front_page() ) {
		wp_redirect( '/mobile' );
		exit;
	}
};
