<?php

/*** Child Theme Function  ***/

function findme_elated_child_theme_enqueue_scripts() {
	
	$parent_style = 'findme_elated_default_style';
	
	wp_enqueue_style('findme_elated_child_style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
}
add_action( 'wp_enqueue_scripts', 'findme_elated_child_theme_enqueue_scripts' );
 
 //wp_enqueue_script('findme_elated_modules', ELATED_ASSETS_ROOT . '/js/modules.min.js', array('jquery'), false, false);
     //  wp_enqueue_script('findme_elated_modules', ELATED_ASSETS_ROOT . '/js/modules.js', array('jquery'), false, true);

 //overrdie Job title field


add_filter( 'submit_job_form_fields', 'custom_submit_job_form_fields' );

// This is your function which takes the fields, modifies them, and returns them
// You can see the fields which can be changed here: https://github.com/mikejolley/WP-Job-Manager/blob/master/includes/forms/class-wp-job-manager-form-submit-job.php
function custom_submit_job_form_fields( $fields ) {

    // Here we target one of the job fields (job_title) and change it's label
    $fields['job']['job_title']['label'] = "Small Business Name <small>(Please provide the name you trade by)</small>";
 $fields['job']['job_location']['label'] = "Location <small>(Please provide the location of your business)</small>";
   // $fields['job']['job_location']['required'] = true;
    // And return the modified fields
 $fields['job']['job_type']['label'] = "Business type";
 $fields['job']['job_description']['label'] = " Small Business Description";

 // $fields['job']['job_location']['priority'] = 14;

    return $fields;
}





add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
    ) );
}










//$hook=eltd_listing_add_listing_field;

//add_action('eltd_listing_add_listing_field','custom_eltd' 2);




//end job title

//remove_filter( 'short_description', 'submit_job_form_company_fields_start' ,15);

//add_filter( 'short_description', 'submit_job_form_company_fields_start' ,2);

// This is your function which takes the fields, modifies them, and returns them
// You can see the fields which can be changed here: https://github.com/mikejolley/WP-Job-Manager/blob/master/includes/forms/class-wp-job-manager-form-submit-job.php
/*function submit_job_form_company_fields( $fields ) {

 
  $fields['eltd_listing_add_listing_field']['short_description']['priority'] = 2;
    return $fields;
}*/

