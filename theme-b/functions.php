<?php
/**
 * NovaSaaS Studio — GeneratePress child theme.
 * SaaS product look: split header (logo left / nav + CTA right), dark UI,
 * geometric sans headings, two-column footer.
 */

if (!defined('ABSPATH')) {
	exit;
}

define('NOVASAAS_VER', '2.3.0');

/* Assets */
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('gp-base', get_template_directory_uri() . '/style.css', [], '3.6.1');
	wp_enqueue_style(
		'novasaas-fonts',
		'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=IBM+Plex+Sans:wght@400;500;600&display=swap',
		[],
		null
	);
	wp_enqueue_style('novasaas-app', get_stylesheet_directory_uri() . '/assets/css/app.css', ['gp-base'], NOVASAAS_VER);
}, 20);

/* Replace GeneratePress header/footer with our split structure */
add_action('after_setup_theme', function () {
	remove_action('generate_header', 'generate_construct_header');
	remove_action('generate_footer', 'generate_construct_footer');
	remove_action('generate_footer', 'generate_construct_footer_widgets', 5);
});

/* Footprint cleanup */
remove_action('wp_head', 'wp_generator');
add_filter('the_generator', '__return_empty_string');

/* Structural layer: full-width, no sidebar — a different body skeleton */
add_filter('generate_sidebar_layout', function () {
	return 'no-sidebar';
});
add_filter('generate_blog_columns', '__return_false');
add_filter('body_class', function ($classes) {
	$classes[] = 'ns-app';
	return $classes;
});
add_filter('post_class', function ($classes) {
	$classes[] = 'ns-entry';
	return $classes;
});

/* Modules */
require get_stylesheet_directory() . '/parts/site-header.php';
require get_stylesheet_directory() . '/parts/site-footer.php';
require get_stylesheet_directory() . '/parts/fields.php';
