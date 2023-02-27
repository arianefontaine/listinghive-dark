<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('child_theme_configurator_css')) :
    function child_theme_configurator_css()
    {
        //wp_dequeue_style('hivetheme-core-frontend');
        //wp_deregister_style('hivetheme-core-frontend');
        //wp_enqueue_style('hivetheme-core-frontend-child', trailingslashit(get_stylesheet_directory_uri()) . 'frontend.css');

        wp_dequeue_style('hivetheme-parent-frontend');
        wp_deregister_style('hivetheme-parent-frontend');
        wp_enqueue_style('hivetheme-frontend-child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('minireset', 'flexboxgrid', 'hivetheme-core-frontend'));
    }
endif;
// les styles de ListingHive sont chargés en priorité 10
// wp-content\themes\listinghive\vendor\hivepress\hivetheme\includes\components\class-asset.php
// ligne 91
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 11);

// END ENQUEUE PARENT ACTION
