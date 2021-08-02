<?php
/**
 * soulfulsynergy Theme Customizer
 *
 * @package soulfulsynergy
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function soulfulsynergy_customize_register( $wp_customize ) {

	// Register Mission Statement Section
	$wp_customize->add_section('mission', array(
		'title'			=> 'Mission Statement',
		'description'	=> '',
		'priority'		=> '120',
	));
	
	$wp_customize->add_setting('mission_statement');

	$wp_customize->add_control( 'mission_statement', array( 
		'type'			=> 'textarea',
		'section'		=> 'mission',
		'label'			=> 'Mission Statement',
		'description'	=> ''
	 ) );

	// Register Pathways Section for Images and Verbiage
	$wp_customize->add_section('pathways', array(
		'title'			=> 'Pathways',
		'description'	=> '',
		'priority'		=> '120',
	));
	
	$wp_customize->add_setting('business_pathways_images');
	
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'business_pathways_images', array(
		'label'		=> 'Upload Business Pathway Image',
		'section'	=> 'pathways',
		'settings'	=> 'business_pathways_images'
	) ));

	$wp_customize->add_setting( 'business_verbiage', array( 
		'capability'	=> 'edit_theme_options',
		'default'		=> '',
		'sanitize_callback'	=> 'sanitize_textarea_field',
	 ) );

	 $wp_customize->add_control( 'business_verbiage', array( 
		'type'			=> 'textarea',
		'section'		=> 'pathways',
		'label'			=> 'Business Verbiage',
		'description'	=> ''
	 ) );
	
	$wp_customize->add_setting('individual_pathways_images');

	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'individualpathways_images', array(
		'label'		=> 'Upload Individual Pathway Image',
		'section'	=> 'pathways',
		'settings'	=> 'individual_pathways_images'
	) ));

	$wp_customize->add_setting( 'individual_verbiage', array( 
		'capability'	=> 'edit_theme_options',
		'default'		=> '',
		'sanitize_callback'	=> 'sanitize_textarea_field',
	 ) );

	 $wp_customize->add_control( 'individual_verbiage', array( 
		'type'			=> 'textarea',
		'section'		=> 'pathways',
		'label'			=> 'Individual Verbiage',
		'description'	=> ''
	 ) );
	
	$wp_customize->add_setting('non-profit_pathways_images');

	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'non-profit_pathways_images', array(
		'label'		=> 'Upload Non-Profit Pathway Image',
		'section'	=> 'pathways',
		'settings'	=> 'non-profit_pathways_images'
	) ));

	$wp_customize->add_setting( 'non-profit_verbiage', array( 
		'capability'	=> 'edit_theme_options',
		'default'		=> '',
		'sanitize_callback'	=> 'sanitize_textarea_field',
	 ) );

	 $wp_customize->add_control( 'non-profit_verbiage', array( 
		'type'			=> 'textarea',
		'section'		=> 'pathways',
		'label'			=> 'Non-Profit Verbiage',
		'description'	=> ''
	 ) );
	
	$wp_customize->add_setting('government_pathways_images');

	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'governmentpathways_images', array(
		'label'		=> 'Upload Government Pathway Image',
		'section'	=> 'pathways',
		'settings'	=> 'government_pathways_images'
	) ));

	$wp_customize->add_setting( 'government_verbiage', array( 
		'capability'	=> 'edit_theme_options',
		'default'		=> '',
		'sanitize_callback'	=> 'sanitize_textarea_field',
	 ) );

	 $wp_customize->add_control( 'government_verbiage', array( 
		'type'			=> 'textarea',
		'section'		=> 'pathways',
		'label'			=> 'Government Verbiage',
		'description'	=> ''
	 ) );


	// Underscores Code
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'soulfulsynergy_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'soulfulsynergy_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'soulfulsynergy_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function soulfulsynergy_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function soulfulsynergy_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function soulfulsynergy_customize_preview_js() {
	wp_enqueue_script( 'soulfulsynergy-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), SOULFULSYNERGY_VERSION, true );
}
add_action( 'customize_preview_init', 'soulfulsynergy_customize_preview_js' );