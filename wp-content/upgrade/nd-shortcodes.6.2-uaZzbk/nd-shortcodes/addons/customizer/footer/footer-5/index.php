<?php

add_action('customize_register','nd_options_customizer_footer_5');
function nd_options_customizer_footer_5( $wp_customize ) {
  

	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_footer_5_section' , array(
	  'title' => __('Footer 5','nd-shortcodes'),
	  'priority'    => 5,
	  'panel' => 'nd_options_customizer_footer_panel',
	) );


	$wp_customize->add_setting( 'nd_options_customizer_footer_5_content_page', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_footer_5_content_page', array(
	  'label' => __('Footer Page','nd-shortcodes'),
	  'type' => 'dropdown-pages',
	  'description' => __('Select the page that you want to use for your footer','nd-shortcodes'),
	  'section' => 'nd_options_customizer_footer_5_section',
	) );



}
