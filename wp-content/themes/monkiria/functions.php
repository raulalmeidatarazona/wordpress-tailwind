<?php
function monkiria_enqueue_styles() {
    // Enqueue Tailwind-processed CSS
    wp_enqueue_style( 'monkiria-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'monkiria_enqueue_styles' );