<?php
/**
 * MediClinic header — centered logo with the menu underneath it.
 * Distinct DOM + classes (mc-*) so it shares no structure with sibling themes.
 */

if (!defined('ABSPATH')) {
	exit;
}

add_action('generate_header', 'mediclinic_header');
function mediclinic_header() {
	?>
	<header class="mc-header" role="banner">
		<div class="mc-header__inner">
			<div class="mc-header__brand">
				<?php
				if (has_custom_logo()) {
					the_custom_logo();
				} else {
					printf(
						'<a class="mc-header__title" href="%s">%s</a>',
						esc_url(home_url('/')),
						esc_html(get_bloginfo('name'))
					);
				}
				?>
			</div>
			<nav class="mc-header__nav" aria-label="<?php esc_attr_e('Primary', 'mediclinic-care'); ?>">
				<?php
				wp_nav_menu([
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'mc-menu',
					'fallback_cb'    => false,
					'depth'          => 1,
				]);
				?>
			</nav>
		</div>
	</header>
	<?php
}
