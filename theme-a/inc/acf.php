<?php
/**
 * MediClinic ACF — "Clinic Info" group (registered in PHP, ACF-free-compatible).
 * Different structure from the sibling theme's group.
 */

if (!defined('ABSPATH')) {
	exit;
}

add_action('acf/init', function () {
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}

	acf_add_local_field_group([
		'key'    => 'group_mediclinic_info',
		'title'  => 'Clinic Info',
		'fields' => [
			[
				'key'   => 'field_mc_phone',
				'label' => 'Phone number',
				'name'  => 'mc_phone',
				'type'  => 'text',
			],
			[
				'key'       => 'field_mc_hours',
				'label'     => 'Working hours',
				'name'      => 'mc_hours',
				'type'      => 'textarea',
				'rows'      => 3,
				'new_lines' => 'br',
			],
			[
				'key'   => 'field_mc_address',
				'label' => 'Address',
				'name'  => 'mc_address',
				'type'  => 'text',
			],
			[
				'key'   => 'field_mc_map',
				'label' => 'Google Maps URL',
				'name'  => 'mc_map',
				'type'  => 'url',
			],
			[
				'key'           => 'field_mc_emergency',
				'label'         => '24/7 emergency line',
				'name'          => 'mc_emergency',
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
