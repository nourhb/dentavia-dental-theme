<?php
/**
 * Dentavia theme setup.
 *
 * @package Dentavia
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'DENTAVIA_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function dentavia_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support( 'custom-logo' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'dentavia' ),
			'footer'  => esc_html__( 'Footer', 'dentavia' ),
		)
	);

	load_theme_textdomain( 'dentavia', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'dentavia_setup' );

/**
 * Footer widget area.
 */
function dentavia_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'dentavia' ),
			'id'            => 'sidebar-footer',
			'description'   => esc_html__( 'Widgets shown in the footer area.', 'dentavia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'dentavia_widgets_init' );

/**
 * Enqueue front-end assets.
 */
function dentavia_enqueue_assets() {
	wp_enqueue_style( 'dentavia-style', get_stylesheet_uri(), array(), DENTAVIA_VERSION );
	wp_enqueue_script( 'dentavia-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), DENTAVIA_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'dentavia_enqueue_assets' );

/**
 * Enqueue editor assets.
 */
function dentavia_enqueue_editor_assets() {
	wp_enqueue_style( 'dentavia-editor', get_template_directory_uri() . '/assets/css/editor.css', array(), DENTAVIA_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'dentavia_enqueue_editor_assets' );

/**
 * Register the Dentavia pattern category.
 */
function dentavia_register_pattern_category() {
	register_block_pattern_category(
		'dentavia',
		array( 'label' => esc_html__( 'Dentavia', 'dentavia' ) )
	);
}
add_action( 'init', 'dentavia_register_pattern_category' );

/**
 * Custom block styles.
 */
function dentavia_register_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'teal-outline', 'label' => esc_html__( 'Teal Outline', 'dentavia' ) ) );
	register_block_style( 'core/group', array( 'name' => 'dentavia-card', 'label' => esc_html__( 'Dentavia Card', 'dentavia' ) ) );
	register_block_style( 'core/image', array( 'name' => 'soft-frame', 'label' => esc_html__( 'Soft Frame', 'dentavia' ) ) );
	register_block_style( 'core/heading', array( 'name' => 'teal-rule', 'label' => esc_html__( 'Teal Rule', 'dentavia' ) ) );
}
add_action( 'init', 'dentavia_register_block_styles' );

/**
 * Custom excerpt length.
 */
function dentavia_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'dentavia_excerpt_length' );

/**
 * Theme image URI helper for patterns.
 *
 * @param string $file Image file name inside assets/images/.
 * @return string Escaped image URL.
 */
function dentavia_img( $file ) {
	return esc_url( get_template_directory_uri() . '/assets/images/' . ltrim( $file, '/' ) );
}

/**
 * Simple inline SVG icon helper.
 *
 * @param string $name Icon name.
 * @return string SVG markup.
 */
function dentavia_icon( $name ) {
	$icons = array(
		'tooth'  => '<path d="M12 2C8 2 5.5 4.5 5.5 8c0 2.5 1.2 4.2 2 6.5.6 1.7 1 4.5 1.7 4.5.9 0 .8-2.7 2.8-2.7s1.9 2.7 2.8 2.7c.7 0 1.1-2.8 1.7-4.5.8-2.3 2-4 2-6.5 0-3.5-2.5-6-6.5-6z"/>',
		'phone'  => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.13.96.36 1.9.7 2.8a2 2 0 0 1-.45 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.25a2 2 0 0 1 2.1-.45c.9.34 1.84.57 2.8.7A2 2 0 0 1 22 16.9z"/>',
		'mail'   => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-10 6L2 7"/>',
		'pin'    => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
		'clock'  => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
		'check'  => '<path d="M20 6L9 17l-5-5"/>',
		'sparkle'=> '<path d="M12 3l1.9 5.1L19 10l-5.1 1.9L12 17l-1.9-5.1L5 10l5.1-1.9L12 3z"/><path d="M19 15l.9 2.1L22 18l-2.1.9L19 21l-.9-2.1L16 18l2.1-.9L19 15z"/>',
		'shield' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
		'heart'  => '<path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8z"/>',
		'kid'    => '<circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 3.6-6 8-6s8 2 8 6"/>',
		'star'   => '<path d="M12 2l3.1 6.3 6.9 1-5 4.9 1.2 6.8L12 17.8 5.8 21l1.2-6.8-5-4.9 6.9-1L12 2z"/>',
		'cal'    => '<rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>',
	);
	if ( ! isset( $icons[ $name ] ) ) {
		return '';
	}
	return '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $icons[ $name ] . '</svg>';
}
