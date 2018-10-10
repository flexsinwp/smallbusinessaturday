<?php

if ( ! function_exists( 'findme_elated_sticky_header_meta_boxes_options_map' ) ) {
	function findme_elated_sticky_header_meta_boxes_options_map( $header_meta_box ) {
		
		$sticky_amount_container = findme_elated_add_admin_container(
			array(
				'parent'          => $header_meta_box,
				'name'            => 'sticky_amount_container_meta_container',
				'hidden_property' => 'eltd_header_behaviour_meta',
				'hidden_values'   => array(
					'',
					'no-behavior',
					'fixed-on-scroll',
					'sticky-header-on-scroll-up'
				)
			)
		);
		
		findme_elated_add_meta_box_field(
			array(
				'name'        => 'eltd_scroll_amount_for_sticky_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Scroll amount for sticky header appearance', 'findme' ),
				'description' => esc_html__( 'Define scroll amount for sticky header appearance', 'findme' ),
				'parent'      => $sticky_amount_container,
				'args'        => array(
					'col_width' => 2,
					'suffix'    => 'px'
				)
			)
		);
	}
	
	add_action( 'findme_elated_additional_header_area_meta_boxes_map', 'findme_elated_sticky_header_meta_boxes_options_map', 10, 1 );
}