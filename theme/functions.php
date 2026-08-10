<?php
/**
 * ein Gedankensprung theme functions.
 *
 * @package Ein_Gedankensprung
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'EGS_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function egs_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'site-icon' );

	// The design's default language/voice is German (Austria).
	load_theme_textdomain( 'ein-gedankensprung', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'egs_setup' );

/**
 * Enqueue the theme stylesheet (style.css doubles as the WordPress theme
 * header + the site's full CSS, including the local @font-face rules) and
 * the carousel/nav/dialog script.
 */
function egs_enqueue_assets() {
	wp_enqueue_style( 'egs-style', get_stylesheet_uri(), array(), EGS_VERSION );
	wp_enqueue_script( 'egs-main', get_template_directory_uri() . '/assets/js/main.js', array(), EGS_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'egs_enqueue_assets' );

/**
 * This is a bespoke one-page design built around a fixed section order
 * (Hero -> Über mich -> Leistungen -> Kontakt), so the primary nav is
 * intentionally three hardcoded same-page anchors in header.php rather
 * than a wp_nav_menu() location — swapping the anchor targets would
 * require re-ordering the page sections to match anyway.
 */
