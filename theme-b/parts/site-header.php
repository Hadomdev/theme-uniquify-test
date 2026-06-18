<?php
/**
 * NovaSaaS header — logo on the left, navigation + CTA pushed right.
 * Uses ns-* classes (no overlap with the sibling theme's markup).
 */

if (!defined('ABSPATH')) {
	exit;
}

add_action('generate_header', 'novasaas_site_header');
function novasaas_site_header() {
	?>
	<header class="ns-bar" role="banner">
		<div class="ns-bar__wrap">
			<div class="ns-bar__logo">
				<?php
				if (has_custom_logo()) {
					the_custom_logo();
				} else {
					printf(
						'<a class="ns-bar__brand" href="%s">%s</a>',
						esc_url(home_url('/')),
						esc_html(get_bloginfo('name'))
					);
				}
				?>
			</div>
			<div class="ns-bar__right">
				<nav class="ns-bar__nav" aria-label="<?php esc_attr_e('Main', 'novasaas-studio'); ?>">
					<?php
					wp_nav_menu([
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'ns-nav',
						'fallback_cb'    => false,
						'depth'          => 1,
					]);
					?>
				</nav>
				<a class="ns-bar__cta" href="<?php echo esc_url(home_url('/get-started/')); ?>">Start free</a>
			</div>
		</div>
	</header>
	<?php
}
