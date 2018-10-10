<?php

if ( ! function_exists( 'findme_elated_register_header_tabbed_type' ) ) {
	/**
	 * This function is used to register header type class for header factory file
	 */
	function findme_elated_register_header_tabbed_type( $header_types ) {
		$header_type = array(
			'header-tabbed' => 'FindmeElated\Modules\Header\Types\HeaderTabbed'
		);
		
		$header_types = array_merge( $header_types, $header_type );
		
		return $header_types;
	}
}

if ( ! function_exists( 'findme_elated_init_register_header_tabbed_type' ) ) {
	/**
	 * This function is used to wait header-function.php file to init header object and then to init hook registration function above
	 */
	function findme_elated_init_register_header_tabbed_type() {
		add_filter( 'findme_elated_register_header_type_class', 'findme_elated_register_header_tabbed_type' );
	}
	
	add_action( 'findme_elated_before_header_function_init', 'findme_elated_init_register_header_tabbed_type' );
}