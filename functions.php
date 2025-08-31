<?php
/**
 * Enqueue parent and child theme styles
 */
add_action( 'wp_enqueue_scripts', function() {
    // Enqueue parent style
    wp_enqueue_style( 'hello-elementor-parent', get_template_directory_uri() . '/style.css' );
    // Enqueue child style (automatically included)
    wp_enqueue_style( 'hello-elementor-child', get_stylesheet_uri(), array('hello-elementor-parent'), '1.0' );
});