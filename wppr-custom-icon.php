<?php
/*
Plugin Name: WPPR Custom Icon
Description: This add-on add a custom icon functionality to your WP Product Review plugin
Version: 1.1.0
Author: Themeisle
Author URI:  https://themeisle.com/
Plugin URI: https://themeisle.com/plugins/WPPR-custom-icon/
Requires at least: 3.5
Tested up to: 4.0
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: cwppos
Domain Path: /languages
*/

define("WPPR_CUSTOM_ICON_VERSION",'1.1.0');


function wppr_ci_custom_bar_icon() {

    wp_enqueue_script("cwp-custom-bar-icon", plugins_url('custom-bar-icon.js', __FILE__), false, WPPR_CUSTOM_ICON_VERSION, "all");
     wp_enqueue_style("font-awesome-cdn", "//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css");

}

add_action('admin_enqueue_scripts', 'wppr_ci_custom_bar_icon');
