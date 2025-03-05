<?php
/**
 * Plugin Name: Hide Elementor Notice
 * Description: Hides the Elementor Pro activation notice from the WordPress admin dashboard.
 * Version: 1.0
 * Author: Joel Gratcyk
 * Author URI: https://joel.gr
 */

function hide_elementor_notice_enqueue_script() {
    wp_enqueue_script('hide-elementor-notice', plugin_dir_url(__FILE__) . 'hide-elementor-notice.js', array('jquery'), '1.0', true);
}
add_action('admin_enqueue_scripts', 'hide_elementor_notice_enqueue_script');
