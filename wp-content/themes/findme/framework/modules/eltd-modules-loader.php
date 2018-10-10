<?php

if(!function_exists('findme_elated_load_modules')) {
    /**
     * Loades all modules by going through all folders that are placed directly in modules folder
     * and loads load.php file in each. Hooks to findme_elated_after_options_map action
     *
     * @see http://php.net/manual/en/function.glob.php
     */
    function findme_elated_load_modules() {
        foreach(glob(ELATED_FRAMEWORK_ROOT_DIR.'/modules/*/load.php') as $module_load) {
            include_once $module_load;
        }
    }

    add_action('findme_elated_before_options_map', 'findme_elated_load_modules');
}

if(!function_exists('findme_elated_load_widget_files')) {
	 /**
     * Loades widget class file.
     */
	function findme_elated_load_widget_files(){
		include_once ELATED_FRAMEWORK_MODULES_ROOT_DIR.'/widgets/lib/widget-class.php';
		include_once ELATED_FRAMEWORK_MODULES_ROOT_DIR.'/widgets/widget-functions.php';
	}
	
	add_action('findme_elated_before_options_map', 'findme_elated_load_widget_files');
}

if(!function_exists('findme_elated_load_widgets')) {
    /**
     * Loades all widgets by going through all folders that are placed directly in widgets folder
     * and loads load.php file in each. Hooks to findme_elated_after_options_map action
     */
    function findme_elated_load_widgets() {
		
        foreach(glob(ELATED_FRAMEWORK_ROOT_DIR.'/modules/widgets/*/load.php') as $widget_load) {
            include_once $widget_load;
        }

        include_once ELATED_FRAMEWORK_MODULES_ROOT_DIR.'/widgets/lib/widget-loader.php';
    }

    add_action('findme_elated_before_options_map', 'findme_elated_load_widgets');
}