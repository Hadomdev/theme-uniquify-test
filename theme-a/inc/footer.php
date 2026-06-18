<?php
/**
 * MediClinic footer — four content columns + a centered copyright line.
 */

if (!defined('ABSPATH')) {
	exit;
}

add_action('generate_footer', 'mediclinic_footer');
function mediclinic_footer() {
	?>
	<footer class="mc-footer" role="contentinfo">
		<div class="mc-footer__cols">
			<div class="mc-footer__col">
				<h4 class="mc-footer__title"><?php echo esc_html(get_bloginfo('name')); ?></h4>
				<p>Compassionate, evidence-based care for the whole family since 2004.</p>
			</div>
			<div class="mc-footer__col">
				<h4 class="mc-footer__title">Departments</h4>
				<ul>
					<li>Cardiology</li>
					<li>Pediatrics</li>
					<li>Dentistry</li>
					<li>Diagnostics</li>
				</ul>
			</div>
			<div class="mc-footer__col">
				<h4 class="mc-footer__title">Opening hours</h4>
				<p>Mon–Fri: 8:00–20:00<br>Sat: 9:00–15:00<br>Sun: Emergency only</p>
			</div>
			<div class="mc-footer__col">
				<h4 class="mc-footer__title">Get in touch</h4>
				<p>+1 (555) 010-2004<br>care@mediclinic.example<br>14 Maple Street</p>
			</div>
		</div>
		<p class="mc-footer__copy">&copy; <?php echo esc_html(wp_date('Y')); ?> <?php echo esc_html(get_bloginfo('name')); ?>. Patient care, first.</p>
	</footer>
	<?php
}
