<?php
if (!defined('ABSPATH')) {
    exit;
}

function shoplet_enqueue_scripts() {
    wp_enqueue_style('shoplet-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'shoplet_enqueue_scripts');

function shoplet_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'shoplet'),
    ));
    add_theme_support( 'automatic-feed-links' );
}
add_action('after_setup_theme', 'shoplet_setup');

function shoplet_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'shoplet'),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'shoplet_widgets_init');

function my_theme_enqueue_styles() {
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3',
        'all'
    );
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        array('bootstrap-css'),
        wp_get_theme()->get('Version'),
        'all'
    );
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true
    );
    wp_enqueue_script(
        'scrolling',
        get_template_directory_uri() . '/js/main.js',
        array(),
        '5.3.3',
        true
    );
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function register_my_menu() {
    register_nav_menu('primary', __('Primary Menu', 'shoplet'));
}
add_action('after_setup_theme', 'register_my_menu');

function enqueue_font_awesome() {
    wp_enqueue_style(
        'fontawesome-css',
        get_stylesheet_directory_uri() . '/assets/css/all.min.css',
        array(),
        '6.0.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');

function shoplet_register_block_styles() {
    register_block_style( 'core/paragraph', array(
        'name'  => 'shoplet-custom-style',
        'label' => __( 'Shoplet Custom Style', 'shoplet' ),
    ) );
}
add_action( 'init', 'shoplet_register_block_styles' );

function shoplet_register_block_patterns() {
    register_block_pattern(
        'ShopLet/custom-pattern',
        array(
            'title'       => __( 'Shoplet Custom Pattern', 'shoplet' ),
            'description' => __( 'A custom pattern for the Shoplet theme.', 'shoplet' ),
            'content'     => '<!-- wp:paragraph --><p>' . __( 'Here is a custom paragraph block pattern.', 'shoplet' ) . '</p><!-- /wp:paragraph -->',
        )
    );
}
add_action( 'init', 'shoplet_register_block_patterns' );

add_theme_support( 'wp-block-styles' );
