<?php
namespace FindmeElated\Modules\Header\Types;

use FindmeElated\Modules\Header\Lib\HeaderType;

/**
 * Class that represents Header Vertical layout and option
 *
 * Class HeaderVertical
 */
class HeaderVerticalClosed extends HeaderType {
	protected $mobileHeaderHeight;
	
	public function __construct() {
		$this->slug = 'header-vertical-closed';
		
		if ( ! is_admin() ) {
			$this->mobileHeaderHeight = findme_elated_set_default_mobile_menu_height_for_header_types();
			
			add_action( 'wp', array( $this, 'setHeaderHeightProps' ) );
			
			add_filter( 'findme_elated_js_global_variables', array( $this, 'getGlobalJSVariables' ) );
			add_filter( 'findme_elated_per_page_js_vars', array( $this, 'getPerPageJSVariables' ) );
		}
	}
	
	/**
	 * Loads template for header type
	 *
	 * @param array $parameters associative array of variables to pass to template
	 */
	public function loadTemplate( $parameters = array() ) {
		$parameters['holder_class'] = findme_elated_vertical_closed_header_holder_class();
		
		$parameters = apply_filters( 'findme_elated_header_vertical_closed_parameters', $parameters );
		
		findme_elated_get_module_template_part( 'templates/' . $this->slug, $this->moduleName . '/types/' . $this->slug, '', $parameters );
	}
	
	/**
	 * Sets header height properties after WP object is set up
	 */
	public function setHeaderHeightProps() {
		$this->mobileHeaderHeight = $this->calculateMobileHeaderHeight();
	}
	
	/**
	 * Returns total height of transparent parts of header
	 *
	 * @return mixed
	 */
	public function calculateHeightOfTransparency() {
		return 0;
	}
	
	/**
	 * Returns height of header parts that are totaly transparent
	 *
	 * @return mixed
	 */
	public function calculateHeightOfCompleteTransparency() {
		return 0;
	}
	
	/**
	 * Returns header height
	 *
	 * @return mixed
	 */
	public function calculateHeaderHeight() {
		return 0;
	}
	
	/**
	 * Returns total height of mobile header
	 *
	 * @return int|string
	 */
	public function calculateMobileHeaderHeight() {
		$mobileHeaderHeight = $this->mobileHeaderHeight;
		
		return $mobileHeaderHeight;
	}
	
	/**
	 * Returns global js variables of header
	 *
	 * @param $globalVariables
	 *
	 * @return int|string
	 */
	public function getGlobalJSVariables( $globalVariables ) {
		$globalVariables['eltdLogoAreaHeight']     = 0;
		$globalVariables['eltdMenuAreaHeight']     = 0;
		$globalVariables['eltdMobileHeaderHeight'] = $this->mobileHeaderHeight;
		
		return $globalVariables;
	}
	
	/**
	 * Returns per page js variables of header
	 *
	 * @param $perPageVars
	 *
	 * @return int|string
	 */
	public function getPerPageJSVariables( $perPageVars ) {
		$perPageVars['eltdHeaderTransparencyHeight'] = 0;
		
		return $perPageVars;
	}
}