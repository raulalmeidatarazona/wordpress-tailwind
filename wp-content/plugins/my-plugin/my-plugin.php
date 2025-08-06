<?php
/*
Plugin Name: My Custom Plugin
Description: An example plugin for our development environment.
Version: 1.0
Author: Your Name
*/

// Prevent direct file access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Example action: Add a message to the admin footer
function my_plugin_admin_footer_text() {
    echo '<p style="text-align: right;"><strong>My Plugin</strong> is active.</p>';
}
add_action( 'admin_footer_text', 'my_plugin_admin_footer_text' );
?>