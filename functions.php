<?php
/**
 * djstudio Theme Functions
 */

// Полное отключение кеша — нигде не сохранять
function djstudio_disable_cache_headers() {
    if (headers_sent()) {
        return;
    }
    header('Cache-Control: no-store, no-cache, no-transform, must-revalidate, max-age=0, post-check=0, pre-check=0');
    header('Pragma: no-cache');
    header('Expires: 0');
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
}
add_action('send_headers', 'djstudio_disable_cache_headers', 1);
add_action('template_redirect', 'djstudio_disable_cache_headers', 0);

// Мета-теги в <head> против кеша браузера
function djstudio_no_cache_meta() {
    echo '<meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">' . "\n";
    echo '<meta http-equiv="Pragma" content="no-cache">' . "\n";
    echo '<meta http-equiv="Expires" content="0">' . "\n";
}
add_action('wp_head', 'djstudio_no_cache_meta', 1);

// Версии скриптов/стилей без кеша (уникальная строка при каждой загрузке)
function djstudio_nocache_version($src) {
    return add_query_arg('t', time(), $src);
}
add_filter('style_loader_src', 'djstudio_nocache_version', 9999);
add_filter('script_loader_src', 'djstudio_nocache_version', 9999);

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
