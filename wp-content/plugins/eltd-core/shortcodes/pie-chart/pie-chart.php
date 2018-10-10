<?php
namespace ElatedCore\CPT\Shortcodes\PieChart;

use ElatedCore\Lib;

class PieChart implements Lib\ShortcodeInterface {
	private $base;

	public function __construct() {
		$this->base = 'eltd_pie_chart';

		add_action('vc_before_init', array($this, 'vcMap'));
	}

	/**
	 * Returns base for shortcode
	 * @return string
	 */
	public function getBase() {
		return $this->base;
	}

	/**
	 * Maps shortcode to Visual Composer. Hooked on vc_before_init
	 */
	public function vcMap() {
		if(function_exists('vc_map')) {
			vc_map(
				array(
					'name'                      => esc_html__( 'Elated Pie Chart', 'eltd-core' ),
					'base'                      => $this->getBase(),
					'icon'                      => 'icon-wpb-pie-chart extended-custom-icon',
					'category'                  => esc_html__( 'by ELATED', 'eltd-core' ),
					'allowed_container_element' => 'vc_row',
					'params'                    => array(
						array(
							'type'       => 'textfield',
							'param_name' => 'percent',
							'heading'    => esc_html__( 'Percentage', 'eltd-core' )
						),
						array(
							'type'       => 'colorpicker',
							'param_name' => 'percent_color',
							'heading'    => esc_html__( 'Percentage Color', 'eltd-core' ),
							'dependency' => array( 'element' => 'percent', 'not_empty' => true )
						),
						array(
							'type'       => 'colorpicker',
							'param_name' => 'active_color',
							'heading'    => esc_html__( 'Pie Chart Active Color', 'eltd-core' )
						),
						array(
							'type'       => 'colorpicker',
							'param_name' => 'inactive_color',
							'heading'    => esc_html__( 'Pie Chart Inactive Color', 'eltd-core' )
						),
						array(
							'type'       => 'textfield',
							'param_name' => 'size',
							'heading'    => esc_html__( 'Pie Chart Size (px)', 'eltd-core' )
						),
						array(
							'type'       => 'textfield',
							'param_name' => 'title',
							'heading'    => esc_html__( 'Title', 'eltd-core' )
						),
						array(
							'type'        => 'dropdown',
							'param_name'  => 'title_tag',
							'heading'     => esc_html__( 'Title Tag', 'eltd-core' ),
							'value'       => array_flip( findme_elated_get_title_tag( true ) ),
							'save_always' => true,
							'dependency'  => array( 'element' => 'title', 'not_empty' => true )
						),
						array(
							'type'       => 'colorpicker',
							'param_name' => 'title_color',
							'heading'    => esc_html__( 'Title Color', 'eltd-core' ),
							'dependency' => array( 'element' => 'title', 'not_empty' => true )
						),
						array(
							'type'       => 'textarea',
							'param_name' => 'text',
							'heading'    => esc_html__( 'Text', 'eltd-core' )
						),
						array(
							'type'       => 'colorpicker',
							'param_name' => 'text_color',
							'heading'    => esc_html__( 'Text Color', 'eltd-core' ),
							'dependency' => array( 'element' => 'text', 'not_empty' => true )
						)
					)
				)
			);
		}
	}

	/**
	 * Renders shortcodes HTML
	 *
	 * @param $atts array of shortcode params
	 * @param $content string shortcode content
	 * @return string
	 */
	public function render($atts, $content = null) {
		$args = array(
			'percent'           => '69',
			'percent_color'     => '',
			'active_color'      => '',
			'inactive_color'    => '',
			'size'              => '',
			'title'             => '',
			'title_tag'         => 'h4',
			'title_color'       => '',
			'text'              => '',
			'text_color'        => ''
		);

		$params = shortcode_atts($args, $atts);
		
		$params['pie_chart_data'] = $this->getPieChartData($params);
		$params['title_tag'] = !empty($params['title_tag']) ? $params['title_tag'] : $args['title_tag'];
		$params['percent_styles'] = $this->getPercentStyles($params);
		$params['title_styles'] = $this->getTitleStyles($params);
		$params['text_styles'] = $this->getTextStyles($params);

		$html = eltd_core_get_shortcode_module_template_part('templates/pie-chart', 'pie-chart', '', $params);

		return $html;
	}

	/**
	 * Return data attributes for Pie Chart
	 *
	 * @param $params
	 * @return array
	 */
	private function getPieChartData($params) {
		$data = array();
		
		if(!empty($params['percent'])) {
			$data['data-percent'] = $params['percent'];
		}
		if(!empty($params['size'])) {
			$data['data-size'] = $params['size'];
		}
        if(!empty($params['active_color'])) {
	        $data['data-bar-color'] = $params['active_color'];
        }
        if(!empty($params['inactive_color'])) {
	        $data['data-track-color'] = $params['inactive_color'];
        }

		return $data;
	}
	
	private function getPercentStyles($params) {
		$styles = array();
		
		if (!empty($params['percent_color'])) {
			$styles[] = 'color: '.$params['percent_color'];
		}
		
		return implode(';', $styles);
	}
	
	private function getTitleStyles($params) {
		$styles = array();
		
		if (!empty($params['title_color'])) {
			$styles[] = 'color: '.$params['title_color'];
		}
		
		return implode(';', $styles);
	}
	
	private function getTextStyles($params) {
		$styles = array();
		
		if (!empty($params['text_color'])) {
			$styles[] = 'color: '.$params['text_color'];
		}
		
		return implode(';', $styles);
	}
}