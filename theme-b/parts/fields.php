<?php
/**
 * NovaSaaS ACF — "Pricing Highlight" group (PHP-registered, ACF-free fields).
 * Deliberately a different structure/purpose from the sibling theme's group.
 */

if (!defined('ABSPATH')) {
	exit;
}

add_action('acf/init', function () {
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}

	acf_add_local_field_group([
		'key'    => 'group_novasaas_pricing',
		'title'  => 'Pricing Highlight',
		'fields' => [
			[
				'key'   => 'field_ns_plan',
				'label' => 'Plan name',
				'name'  => 'ns_plan',
				'type'  => 'text',
			],
			[
				'key'   => 'field_ns_price',
				'label' => 'Price',
				'name'  => 'ns_price',
				'type'  => 'text',
			],
			[
				'key'           => 'field_ns_billing',
				'label'         => 'Billing period',
				'name'          => 'ns_billing',
				'type'          => 'select',
				'choices'       => ['monthly' => 'Monthly', 'yearly' => 'Yearly', 'one-time' => 'One-time'],
				'default_value' => 'monthly',
			],
			[
				'key'   => 'field_ns_cta',
				'label' => 'CTA link',
				'name'  => 'ns_cta',
				'type'  => 'link',
			],
			[
				'key'           => 'field_ns_featured',
				'label'         => 'Most popular',
				'name'          => 'ns_featured',
				'type'          => 'true_false',
				'ui'            => 1,
				'default_value' => 0,
			],
		],
		'location' => [
			[
				['param' => 'post_type', 'operator' => '==', 'value' => 'page'],
			],
		],
	]);
});
