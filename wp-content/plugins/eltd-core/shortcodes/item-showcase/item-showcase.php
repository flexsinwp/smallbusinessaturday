<?php
namespace ElatedCore\CPT\Shortcodes\ItemShowcase;

use ElatedCore\Lib;

class ItemShowcase implements Lib\ShortcodeInterface {
	private $base; 
	
	function __construct() {
		$this->base = 'eltd_item_showcase';

		add_action('vc_before_init', array($this, 'vcMap'));
	}
	
	/**
	* Returns base for shortcode
	* @return string
    */
	public function getBase() {
		return $this->base;
	}
	
	public function vcMap() {
		if(function_exists('vc_map')) {
			vc_map(
				array(
					'name'      => esc_html__( 'Elated Item Showcase', 'eltd-core' ),
					'base'      => $this->base,
					'category'  => esc_html__( 'by ELATED', 'eltd-core' ),
					'icon'      => 'icon-wpb-item-showcase extended-custom-icon',
					'as_parent' => array( 'only' => 'eltd_item_showcase_item' ),
					'js_view'   => 'VcColumnView',
					'params'    => array(
						array(
							'type'       => 'attach_image',
							'param_name' => 'item_image',
							'heading'    => esc_html__( 'Image', 'eltd-core' )
						),
						array(
							'type'        => 'textfield',
							'param_name'  => 'image_top_offset',
							'heading'     => esc_html__( 'Image Top Offset', 'eltd-core' ),
							'value'       => '-100px',
							'save_always' => true
						)
					)
				)
			);
		}
	}

	public function render($atts, $content = null) {
		$args = array(
            'item_image'       => '',
            'image_top_offset' => '',
        );

		$params = shortcode_atts($args, $atts);

        extract($params);

        $html = '';
		
        $item_image_style = '';
		if(!empty($image_top_offset)) {
			$item_image_style = 'margin-top: '.findme_elated_filter_px($image_top_offset).'px';
		}

        $html .= '<div class="eltd-item-showcase-holder clearfix">';
			$html .= do_shortcode($content);
			$html .= '<div class="eltd-is-image" '.findme_elated_get_inline_style($item_image_style).'>';
                if (!empty($item_image)) {
                    $html .= wp_get_attachment_image($item_image, 'full');
                }
            $html .= '</div>';
        $html .= '</div>';

        return $html;
	}
}