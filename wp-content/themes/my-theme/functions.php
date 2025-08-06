<?php
function my_theme_enqueue_styles() {
    // Enqueue Tailwind-processed CSS
    wp_enqueue_style( 'my-theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );