<?php
/**
 * MediClinic Care — GeneratePress child theme.
 * Healthcare product look: centered logo, serif headings, 4-column footer.
 */

if (!defined('ABSPATH')) {
	exit;
}

define('MEDICLINIC_VERSION', '1.0.0');

/* ---- Assets: fonts + styles ------------------------------------------ */
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'generatepress-parent',
		get_template_directory_uri() . '/style.css',
		[],
		'3.6.1'
	);
	wp_enqueue_style(
		'mediclinic-fonts',
		'https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,700&family=Inter:wght@400;500;600&display=swap',
		[],
		null
	);
	wp_enqueue_style(
		'mediclinic-main',
		get_stylesheet_directory_uri() . '/assets/css/main.css',
		['generatepress-parent'],
		MEDICLINIC_VERSION
	);
}, 20);

/* ---- Swap GeneratePress header/footer for our own structure ---------- */
add_action('after_setup_theme', function () {
	remove_action('generate_header', 'generate_construct_header');
	remove_action('generate_footer', 'generate_construct_footer');
	remove_action('generate_footer', 'generate_construct_footer_widgets', 5);
});

/* ---- Footprint cleanup: drop the WP generator meta ------------------- */
remove_action('wp_head', 'wp_generator');
add_filter('the_generator', '__return_empty_string');

/* ---- Structural layer: two-column layout (content + right sidebar) ---- */
add_filter('generate_sidebar_layout', function () {
	return 'right-sidebar';
});
add_filter('body_class', function ($classes) {
	$classes[] = 'mc-site';
	return $classes;
});
add_filter('post_class', function ($classes) {
	$classes[] = 'mc-article';
	return $classes;
});

/* ---- Modules --------------------------------------------------------- */
require get_stylesheet_directory() . '/inc/header.php';
require get_stylesheet_directory() . '/inc/footer.php';
require get_stylesheet_directory() . '/inc/acf.php';
