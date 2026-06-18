<?php
/**
 * NovaSaaS footer — two columns (brand blurb + social), copyright left-aligned.
 */

if (!defined('ABSPATH')) {
	exit;
}

add_action('generate_footer', 'novasaas_site_footer');
function novasaas_site_footer() {
	?>
	<footer class="ns-foot" role="contentinfo">
		<div class="ns-foot__grid">
			<div class="ns-foot__brand">
				<span class="ns-foot__logo"><?php echo esc_html(get_bloginfo('name')); ?></span>
				<p>Ship software faster. The all-in-one workspace for modern product teams.</p>
			</div>
			<div class="ns-foot__social">
				<span class="ns-foot__label">Follow</span>
				<ul>
					<li><a href="#">X / Twitter</a></li>
					<li><a href="#">LinkedIn</a></li>
					<li><a href="#">GitHub</a></li>
					<li><a href="#">Discord</a></li>
				</ul>
			</div>
		</div>
		<div class="ns-foot__bottom">
			<p class="ns-foot__copy">&copy; <?php echo esc_html(wp_date('Y')); ?> <?php echo esc_html(get_bloginfo('name')); ?> — built for builders.</p>
		</div>
	</footer>
	<?php
}
