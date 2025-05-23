<?php
if (!defined('nusacons_consulting_VERSION')) {
    // Replace the version number of the theme on each release.
    define('nusacons_consulting_VERSION', wp_get_theme()->get('Version'));
}
define('nusacons_consulting_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('nusacons_consulting_DIR', trailingslashit(get_template_directory()));
define('nusacons_consulting_url', trailingslashit(get_template_directory_uri()));

if (!function_exists('nusacons_consulting_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function nusacons_consulting_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;
add_action('after_setup_theme', 'nusacons_consulting_support');

/*----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (!function_exists('nusacons_consulting_styles')) :
    function nusacons_consulting_styles()
    {
        // registering style for theme
        wp_enqueue_style('nas-consulting-lite-style', get_stylesheet_uri(), array(), nusacons_consulting_VERSION);
        wp_enqueue_style('nas-consulting-lite-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
        wp_enqueue_style('nas-consulting-lite-aos-style', get_template_directory_uri() . '/assets/css/aos.css');
        if (is_rtl()) {
            wp_enqueue_style('nas-consulting-lite-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css');
        }
        wp_enqueue_script('jquery');
        wp_enqueue_script('nas-consulting-lite-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), nusacons_consulting_VERSION, true);
        wp_enqueue_script('nas-consulting-lite-scripts', get_template_directory_uri() . '/assets/js/nas-consulting-lite-scripts.js', array(), nusacons_consulting_VERSION, true);
    }
endif;

add_action('wp_enqueue_scripts', 'nusacons_consulting_styles');

/**
 * Enqueue scripts for admin area
 */
function nusacons_consulting_admin_style()
{
    $hello_notice_current_screen = get_current_screen();
    if (!empty($_GET['page']) && 'about-nas-consulting-lite' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard') {
        wp_enqueue_style('nas-consulting-lite-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), nusacons_consulting_VERSION, 'all');
        wp_enqueue_script('nas-consulting-lite-admin-scripts', get_template_directory_uri() . '/assets/js/nas-consulting-lite-admin-scripts.js', array(), nusacons_consulting_VERSION, true);
        wp_localize_script('nas-consulting-lite-admin-scripts', 'nusacons_consulting_admin_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('nusacons_consulting_admin_nonce')
        ));
        
    }
}
add_action('admin_enqueue_scripts', 'nusacons_consulting_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function nusacons_consulting_block_assets()
{
    wp_enqueue_style('nas-consulting-lite-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'nusacons_consulting_block_assets');

/**
 * Load core file.
 */
//require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */


if (!function_exists('nusacons_consulting_excerpt_more_postfix')) {
    function nusacons_consulting_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'nusacons_consulting_excerpt_more_postfix');
}
function nusacons_consulting_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'nusacons_consulting_add_woocommerce_support');


/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/bootstrap.php';

/**
 * Theme info
 */
require get_theme_file_path( '/inc/theme-info/theme-info.php' );

/**
 * Getting started notification
 */
require get_theme_file_path( '/inc/getting-started/getting-started.php' );