<?php

if(!function_exists('findme_elated_content_responsive_styles')) {
    /**
     * Generates content responsive custom styles
     */
    function findme_elated_content_responsive_styles() {
        $content_style = array();
	    
	    $padding_top_mobile = findme_elated_options()->getOptionValue('content_top_padding_mobile');
	    if ($padding_top_mobile !== '') {
            $content_style['padding-top'] = findme_elated_filter_px($padding_top_mobile) . 'px!important';
        }
        
        $content_selector = array(
            '.eltd-content .eltd-content-inner > .eltd-container > .eltd-container-inner',
            '.eltd-content .eltd-content-inner > .eltd-full-width > .eltd-full-width-inner',
        );
	    
        echo findme_elated_dynamic_css($content_selector, $content_style);
    }

    add_action('findme_elated_style_dynamic_responsive_1024', 'findme_elated_content_responsive_styles');
}

if (!function_exists('findme_elated_h1_responsive_styles3')) {

    function findme_elated_h1_responsive_styles3() {

        $h1_styles = array();

        if(findme_elated_options()->getOptionValue('h1_responsive_fontsize3') !== '') {
            $h1_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h1_responsive_fontsize3')).'px';
        }
        if(findme_elated_options()->getOptionValue('h1_responsive_lineheight3') !== '') {
            $h1_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h1_responsive_lineheight3')).'px';
        }
        if(findme_elated_options()->getOptionValue('h1_responsive_letterspacing3') !== '') {
            $h1_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h1_responsive_letterspacing3')).'px';
        }

        $h1_selector = array(
            'h1'
        );

        if (!empty($h1_styles)) {
            echo findme_elated_dynamic_css($h1_selector, $h1_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_768_1024', 'findme_elated_h1_responsive_styles3');
}

if (!function_exists('findme_elated_h2_responsive_styles3')) {

    function findme_elated_h2_responsive_styles3() {

        $h2_styles = array();

        if(findme_elated_options()->getOptionValue('h2_responsive_fontsize3') !== '') {
            $h2_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h2_responsive_fontsize3')).'px';
        }
        if(findme_elated_options()->getOptionValue('h2_responsive_lineheight3') !== '') {
            $h2_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h2_responsive_lineheight3')).'px';
        }
        if(findme_elated_options()->getOptionValue('h2_responsive_letterspacing3') !== '') {
            $h2_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h2_responsive_letterspacing3')).'px';
        }

        $h2_selector = array(
            'h2'
        );

        if (!empty($h2_styles)) {
            echo findme_elated_dynamic_css($h2_selector, $h2_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_768_1024', 'findme_elated_h2_responsive_styles3');
}

if (!function_exists('findme_elated_h3_responsive_styles3')) {

    function findme_elated_h3_responsive_styles3() {

        $h3_styles = array();

        if(findme_elated_options()->getOptionValue('h3_responsive_fontsize3') !== '') {
            $h3_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h3_responsive_fontsize3')).'px';
        }
        if(findme_elated_options()->getOptionValue('h3_responsive_lineheight3') !== '') {
            $h3_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h3_responsive_lineheight3')).'px';
        }
        if(findme_elated_options()->getOptionValue('h3_responsive_letterspacing3') !== '') {
            $h3_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h3_responsive_letterspacing3')).'px';
        }

        $h3_selector = array(
            'h3'
        );

        if (!empty($h3_styles)) {
            echo findme_elated_dynamic_css($h3_selector, $h3_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_768_1024', 'findme_elated_h3_responsive_styles3');
}

if (!function_exists('findme_elated_h4_responsive_styles3')) {

    function findme_elated_h4_responsive_styles3() {

        $h4_styles = array();

        if(findme_elated_options()->getOptionValue('h4_responsive_fontsize3') !== '') {
            $h4_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h4_responsive_fontsize3')).'px';
        }
        if(findme_elated_options()->getOptionValue('h4_responsive_lineheight3') !== '') {
            $h4_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h4_responsive_lineheight3')).'px';
        }
        if(findme_elated_options()->getOptionValue('h4_responsive_letterspacing3') !== '') {
            $h4_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h4_responsive_letterspacing3')).'px';
        }

        $h4_selector = array(
            'h4'
        );

        if (!empty($h4_styles)) {
            echo findme_elated_dynamic_css($h4_selector, $h4_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_768_1024', 'findme_elated_h4_responsive_styles3');
}

if (!function_exists('findme_elated_h5_responsive_styles3')) {

    function findme_elated_h5_responsive_styles3() {

        $h5_styles = array();

        if(findme_elated_options()->getOptionValue('h5_responsive_fontsize3') !== '') {
            $h5_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h5_responsive_fontsize3')).'px';
        }
        if(findme_elated_options()->getOptionValue('h5_responsive_lineheight3') !== '') {
            $h5_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h5_responsive_lineheight3')).'px';
        }
        if(findme_elated_options()->getOptionValue('h5_responsive_letterspacing3') !== '') {
            $h5_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h5_responsive_letterspacing3')).'px';
        }

        $h5_selector = array(
            'h5'
        );

        if (!empty($h5_styles)) {
            echo findme_elated_dynamic_css($h5_selector, $h5_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_768_1024', 'findme_elated_h5_responsive_styles3');
}

if (!function_exists('findme_elated_h6_responsive_styles3')) {

    function findme_elated_h6_responsive_styles3() {

        $h6_styles = array();

        if(findme_elated_options()->getOptionValue('h6_responsive_fontsize3') !== '') {
            $h6_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h6_responsive_fontsize3')).'px';
        }
        if(findme_elated_options()->getOptionValue('h6_responsive_lineheight3') !== '') {
            $h6_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h6_responsive_lineheight3')).'px';
        }
        if(findme_elated_options()->getOptionValue('h6_responsive_letterspacing3') !== '') {
            $h6_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h6_responsive_letterspacing3')).'px';
        }

        $h6_selector = array(
            'h6'
        );

        if (!empty($h6_styles)) {
            echo findme_elated_dynamic_css($h6_selector, $h6_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_768_1024', 'findme_elated_h6_responsive_styles3');
}

if (!function_exists('findme_elated_h1_responsive_styles')) {

    function findme_elated_h1_responsive_styles() {

        $h1_styles = array();

        if(findme_elated_options()->getOptionValue('h1_responsive_fontsize') !== '') {
            $h1_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h1_responsive_fontsize')).'px';
        }
        if(findme_elated_options()->getOptionValue('h1_responsive_lineheight') !== '') {
            $h1_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h1_responsive_lineheight')).'px';
        }
        if(findme_elated_options()->getOptionValue('h1_responsive_letterspacing') !== '') {
            $h1_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h1_responsive_letterspacing')).'px';
        }

        $h1_selector = array(
            'h1'
        );

        if (!empty($h1_styles)) {
            echo findme_elated_dynamic_css($h1_selector, $h1_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_480_768', 'findme_elated_h1_responsive_styles');
}

if (!function_exists('findme_elated_h2_responsive_styles')) {

    function findme_elated_h2_responsive_styles() {

        $h2_styles = array();

        if(findme_elated_options()->getOptionValue('h2_responsive_fontsize') !== '') {
            $h2_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h2_responsive_fontsize')).'px';
        }
        if(findme_elated_options()->getOptionValue('h2_responsive_lineheight') !== '') {
            $h2_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h2_responsive_lineheight')).'px';
        }
        if(findme_elated_options()->getOptionValue('h2_responsive_letterspacing') !== '') {
            $h2_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h2_responsive_letterspacing')).'px';
        }

        $h2_selector = array(
            'h2'
        );

        if (!empty($h2_styles)) {
            echo findme_elated_dynamic_css($h2_selector, $h2_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_480_768', 'findme_elated_h2_responsive_styles');
}

if (!function_exists('findme_elated_h3_responsive_styles')) {

    function findme_elated_h3_responsive_styles() {

        $h3_styles = array();

        if(findme_elated_options()->getOptionValue('h3_responsive_fontsize') !== '') {
            $h3_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h3_responsive_fontsize')).'px';
        }
        if(findme_elated_options()->getOptionValue('h3_responsive_lineheight') !== '') {
            $h3_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h3_responsive_lineheight')).'px';
        }
        if(findme_elated_options()->getOptionValue('h3_responsive_letterspacing') !== '') {
            $h3_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h3_responsive_letterspacing')).'px';
        }

        $h3_selector = array(
            'h3'
        );

        if (!empty($h3_styles)) {
            echo findme_elated_dynamic_css($h3_selector, $h3_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_480_768', 'findme_elated_h3_responsive_styles');
}

if (!function_exists('findme_elated_h4_responsive_styles')) {

    function findme_elated_h4_responsive_styles() {

        $h4_styles = array();

        if(findme_elated_options()->getOptionValue('h4_responsive_fontsize') !== '') {
            $h4_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h4_responsive_fontsize')).'px';
        }
        if(findme_elated_options()->getOptionValue('h4_responsive_lineheight') !== '') {
            $h4_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h4_responsive_lineheight')).'px';
        }
        if(findme_elated_options()->getOptionValue('h4_responsive_letterspacing') !== '') {
            $h4_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h4_responsive_letterspacing')).'px';
        }

        $h4_selector = array(
            'h4'
        );

        if (!empty($h4_styles)) {
            echo findme_elated_dynamic_css($h4_selector, $h4_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_480_768', 'findme_elated_h4_responsive_styles');
}

if (!function_exists('findme_elated_h5_responsive_styles')) {

    function findme_elated_h5_responsive_styles() {

        $h5_styles = array();

        if(findme_elated_options()->getOptionValue('h5_responsive_fontsize') !== '') {
            $h5_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h5_responsive_fontsize')).'px';
        }
        if(findme_elated_options()->getOptionValue('h5_responsive_lineheight') !== '') {
            $h5_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h5_responsive_lineheight')).'px';
        }
        if(findme_elated_options()->getOptionValue('h5_responsive_letterspacing') !== '') {
            $h5_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h5_responsive_letterspacing')).'px';
        }

        $h5_selector = array(
            'h5'
        );

        if (!empty($h5_styles)) {
            echo findme_elated_dynamic_css($h5_selector, $h5_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_480_768', 'findme_elated_h5_responsive_styles');
}

if (!function_exists('findme_elated_h6_responsive_styles')) {

    function findme_elated_h6_responsive_styles() {

        $h6_styles = array();

        if(findme_elated_options()->getOptionValue('h6_responsive_fontsize') !== '') {
            $h6_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h6_responsive_fontsize')).'px';
        }
        if(findme_elated_options()->getOptionValue('h6_responsive_lineheight') !== '') {
            $h6_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h6_responsive_lineheight')).'px';
        }
        if(findme_elated_options()->getOptionValue('h6_responsive_letterspacing') !== '') {
            $h6_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h6_responsive_letterspacing')).'px';
        }

        $h6_selector = array(
            'h6'
        );

        if (!empty($h6_styles)) {
            echo findme_elated_dynamic_css($h6_selector, $h6_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_480_768', 'findme_elated_h6_responsive_styles');
}

if (!function_exists('findme_elated_text_responsive_styles')) {

    function findme_elated_text_responsive_styles() {

        $text_styles = array();

        if(findme_elated_options()->getOptionValue('text_fontsize_res1') !== '') {
            $text_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('text_fontsize_res1')).'px';
        }
        if(findme_elated_options()->getOptionValue('text_lineheight_res1') !== '') {
            $text_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('text_lineheight_res1')).'px';
        }
        if(findme_elated_options()->getOptionValue('text_letterspacing_res1') !== '') {
            $text_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('text_letterspacing_res1')).'px';
        }

        $text_selector = array(
            'body',
            'p'
        );

        if (!empty($text_styles)) {
            echo findme_elated_dynamic_css($text_selector, $text_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_480_768', 'findme_elated_text_responsive_styles');
}

if (!function_exists('findme_elated_h1_responsive_styles2')) {

    function findme_elated_h1_responsive_styles2() {

        $h1_styles = array();

        if(findme_elated_options()->getOptionValue('h1_responsive_fontsize2') !== '') {
            $h1_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h1_responsive_fontsize2')).'px';
        }
        if(findme_elated_options()->getOptionValue('h1_responsive_lineheight2') !== '') {
            $h1_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h1_responsive_lineheight2')).'px';
        }
        if(findme_elated_options()->getOptionValue('h1_responsive_letterspacing2') !== '') {
            $h1_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h1_responsive_letterspacing2')).'px';
        }

        $h1_selector = array(
            'h1'
        );

        if (!empty($h1_styles)) {
            echo findme_elated_dynamic_css($h1_selector, $h1_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_480', 'findme_elated_h1_responsive_styles2');
}

if (!function_exists('findme_elated_h2_responsive_styles2')) {

    function findme_elated_h2_responsive_styles2() {

        $h2_styles = array();

        if(findme_elated_options()->getOptionValue('h2_responsive_fontsize2') !== '') {
            $h2_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h2_responsive_fontsize2')).'px';
        }
        if(findme_elated_options()->getOptionValue('h2_responsive_lineheight2') !== '') {
            $h2_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h2_responsive_lineheight2')).'px';
        }
        if(findme_elated_options()->getOptionValue('h2_responsive_letterspacing2') !== '') {
            $h2_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h2_responsive_letterspacing2')).'px';
        }

        $h2_selector = array(
            'h2'
        );

        if (!empty($h2_styles)) {
            echo findme_elated_dynamic_css($h2_selector, $h2_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_480', 'findme_elated_h2_responsive_styles2');
}

if (!function_exists('findme_elated_h3_responsive_styles2')) {

    function findme_elated_h3_responsive_styles2() {

        $h3_styles = array();

        if(findme_elated_options()->getOptionValue('h3_responsive_fontsize2') !== '') {
            $h3_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h3_responsive_fontsize2')).'px';
        }
        if(findme_elated_options()->getOptionValue('h3_responsive_lineheight2') !== '') {
            $h3_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h3_responsive_lineheight2')).'px';
        }
        if(findme_elated_options()->getOptionValue('h3_responsive_letterspacing2') !== '') {
            $h3_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h3_responsive_letterspacing2')).'px';
        }

        $h3_selector = array(
            'h3'
        );

        if (!empty($h3_styles)) {
            echo findme_elated_dynamic_css($h3_selector, $h3_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_480', 'findme_elated_h3_responsive_styles2');
}

if (!function_exists('findme_elated_h4_responsive_styles2')) {

    function findme_elated_h4_responsive_styles2() {

        $h4_styles = array();

        if(findme_elated_options()->getOptionValue('h4_responsive_fontsize2') !== '') {
            $h4_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h4_responsive_fontsize2')).'px';
        }
        if(findme_elated_options()->getOptionValue('h4_responsive_lineheight2') !== '') {
            $h4_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h4_responsive_lineheight2')).'px';
        }
        if(findme_elated_options()->getOptionValue('h4_responsive_letterspacing2') !== '') {
            $h4_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h4_responsive_letterspacing2')).'px';
        }

        $h4_selector = array(
            'h4'
        );

        if (!empty($h4_styles)) {
            echo findme_elated_dynamic_css($h4_selector, $h4_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_480', 'findme_elated_h4_responsive_styles2');
}

if (!function_exists('findme_elated_h5_responsive_styles2')) {

    function findme_elated_h5_responsive_styles2() {

        $h5_styles = array();

        if(findme_elated_options()->getOptionValue('h5_responsive_fontsize2') !== '') {
            $h5_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h5_responsive_fontsize2')).'px';
        }
        if(findme_elated_options()->getOptionValue('h5_responsive_lineheight2') !== '') {
            $h5_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h5_responsive_lineheight2')).'px';
        }
        if(findme_elated_options()->getOptionValue('h5_responsive_letterspacing2') !== '') {
            $h5_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h5_responsive_letterspacing2')).'px';
        }

        $h5_selector = array(
            'h5'
        );

        if (!empty($h5_styles)) {
            echo findme_elated_dynamic_css($h5_selector, $h5_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_480', 'findme_elated_h5_responsive_styles2');
}

if (!function_exists('findme_elated_h6_responsive_styles2')) {

    function findme_elated_h6_responsive_styles2() {

        $h6_styles = array();

        if(findme_elated_options()->getOptionValue('h6_responsive_fontsize2') !== '') {
            $h6_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h6_responsive_fontsize2')).'px';
        }
        if(findme_elated_options()->getOptionValue('h6_responsive_lineheight2') !== '') {
            $h6_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h6_responsive_lineheight2')).'px';
        }
        if(findme_elated_options()->getOptionValue('h6_responsive_letterspacing2') !== '') {
            $h6_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('h6_responsive_letterspacing2')).'px';
        }

        $h6_selector = array(
            'h6'
        );

        if (!empty($h6_styles)) {
            echo findme_elated_dynamic_css($h6_selector, $h6_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_480', 'findme_elated_h6_responsive_styles2');
}

if (!function_exists('findme_elated_text_responsive_styles2')) {

    function findme_elated_text_responsive_styles2() {

        $text_styles = array();

        if(findme_elated_options()->getOptionValue('text_fontsize_res2') !== '') {
            $text_styles['font-size'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('text_fontsize_res2')).'px';
        }
        if(findme_elated_options()->getOptionValue('text_lineheight_res2') !== '') {
            $text_styles['line-height'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('text_lineheight_res2')).'px';
        }
        if(findme_elated_options()->getOptionValue('text_letterspacing_res2') !== '') {
            $text_styles['letter-spacing'] = findme_elated_filter_px(findme_elated_options()->getOptionValue('text_letterspacing_res2')).'px';
        }

        $text_selector = array(
            'body',
            'p'
        );

        if (!empty($text_styles)) {
            echo findme_elated_dynamic_css($text_selector, $text_styles);
        }
    }

    add_action('findme_elated_style_dynamic_responsive_480', 'findme_elated_text_responsive_styles2');
}