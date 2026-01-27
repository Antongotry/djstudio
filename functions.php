<?php
/**
 * djstudio Theme Functions
 */

// Theme setup
function djstudio_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'djstudio'),
    ));
}
add_action('after_setup_theme', 'djstudio_setup');

// Enqueue scripts and styles
function djstudio_scripts() {
    // Enqueue Google Fonts (Raleway)
    wp_enqueue_style('djstudio-raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap', array(), null);
    
    // Enqueue styles
    wp_enqueue_style('djstudio-style', get_stylesheet_uri(), array('djstudio-raleway'), '1.0.0');
    
    // Enqueue scripts
    wp_enqueue_script('djstudio-main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'djstudio_scripts');

// Add custom body classes
function djstudio_body_classes($classes) {
    $classes[] = 'djstudio-theme';
    return $classes;
}
add_filter('body_class', 'djstudio_body_classes');
