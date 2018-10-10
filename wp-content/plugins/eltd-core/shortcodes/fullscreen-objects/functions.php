<?php

if(!function_exists('eltd_core_add_fullscreen_objects_shortcodes')) {
	function eltd_core_add_fullscreen_objects_shortcodes($shortcodes_class_name) {
		$shortcodes = array(
			'ElatedCore\CPT\Shortcodes\FullscreenObjects\FullscreenObjects'
		);

		$shortcodes_class_name = array_merge($shortcodes_class_name, $shortcodes);

		return $shortcodes_class_name;
	}

	add_filter('eltd_core_filter_add_vc_shortcode', 'eltd_core_add_fullscreen_objects_shortcodes');
}