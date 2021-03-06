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
	// Front-Page Hero
	$wp_customize->add_setting('front_page_hero_image');
	
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'front_page_hero_image', array(
		'label'		=> 'Upload Hero Image',
		'section'	=> 'static_front_page',
		'settings'	=> 'front_page_hero_image'
	) ));

	$wp_customize->add_setting('front_page_hero_video');
	
	$wp_customize->add_control(new WP_Customize_Media_Control( $wp_customize, 'front_page_hero_video', array(
		'label'		=> 'Upload Hero Video',
		'mime_type'	=> 'video',
		'section'	=> 'static_front_page',
		'settings'	=> 'front_page_hero_video'
	) ));

	$wp_customize->add_setting('front_page_hero_intro');

	$wp_customize->add_control( 'front_page_hero_intro', array( 
		'type'			=> 'text',
		'section'		=> 'static_front_page',
		'label'			=> 'Homepage Hero Title',
		'description'	=> ''
	) );

	$wp_customize->selective_refresh->add_partial(
		'front_page_hero_intro',
		array(
			"selector" => "#homepage-hero .tint .hero-text-container h1"
		)
	);
	
	$wp_customize->add_setting('front_page_hero_subtitle');
	
	$wp_customize->add_control( 'front_page_hero_subtitle', array( 
		'type'			=> 'textarea',
		'section'		=> 'static_front_page',
		'label'			=> 'Homepage Hero Sub-Title',
		'description'	=> ''
	) );
	
	$wp_customize->selective_refresh->add_partial(
		'front_page_hero_intro',
		array(
			"selector" => "#homepage-hero .tint .hero-text-container h3"
		)
	);
	
	$wp_customize->add_setting('front_page_pathways_intro');

	$wp_customize->add_control( 'front_page_pathways_intro', array( 
		'type'			=> 'text',
		'section'		=> 'static_front_page',
		'label'			=> 'Homepage Pathways Title',
		'description'	=> ''
	) );
	
	$wp_customize->selective_refresh->add_partial(
		'front_page_pathways_intro',
		array(
			"selector" => "#pathways h1"
		)
	);

	$wp_customize->add_setting('front_page_pathways_text');
	
	$wp_customize->add_control( 'front_page_pathways_text', array( 
		'type'			=> 'textarea',
		'section'		=> 'static_front_page',
		'label'			=> 'Homepage Pathways Text',
		'description'	=> ''
	) );
		
	$wp_customize->add_setting('front_page_services_intro');

	$wp_customize->add_control( 'front_page_services_intro', array( 
		'type'			=> 'text',
		'section'		=> 'static_front_page',
		'label'			=> 'Homepage Services Title',
		'description'	=> ''
	) );
	
	$wp_customize->selective_refresh->add_partial(
		'front_page_services_intro',
		array(
			"selector" => "#services h1"
		)
	);

	$wp_customize->add_setting('front_page_services_text');
	
	$wp_customize->add_control( 'front_page_services_text', array( 
		'type'			=> 'textarea',
		'section'		=> 'static_front_page',
		'label'			=> 'Homepage Services Text',
		'description'	=> ''
	) );

	$wp_customize->add_setting('front_page_impact_intro');

	$wp_customize->add_control( 'front_page_impact_intro', array( 
		'type'			=> 'text',
		'section'		=> 'static_front_page',
		'label'			=> 'Homepage Impact Title',
		'description'	=> ''
	) );

	$wp_customize->selective_refresh->add_partial(
		'front_page_impact_intro',
		array(
			"selector" => "#impact h1"
		)
	);
	
	$wp_customize->add_setting('front_page_impact_text');
	
	$wp_customize->add_control( 'front_page_impact_text', array( 
		'type'			=> 'textarea',
		'section'		=> 'static_front_page',
		'label'			=> 'Homepage Impact Text',
		'description'	=> ''
	) );

	$wp_customize->add_setting('front_page_testimonials_intro');

	$wp_customize->add_control( 'front_page_testimonials_intro', array( 
		'type'			=> 'text',
		'section'		=> 'static_front_page',
		'label'			=> 'Homepage Testimonials Title',
		'description'	=> ''
	) );

	$wp_customize->selective_refresh->add_partial(
		'front_page_testimonials_intro',
		array(
			"selector" => "#testimonials h1"
		)
	);
	
	$wp_customize->add_setting('front_page_upcoming_events_intro');

	$wp_customize->add_control( 'front_page_upcoming_events_intro', array( 
		'type'			=> 'text',
		'section'		=> 'static_front_page',
		'label'			=> 'Homepage Upcoming Events Title',
		'description'	=> ''
	) );

	$wp_customize->selective_refresh->add_partial(
		'front_page_upcoming_events_intro',
		array(
			"selector" => "#events h1"
		)
	);

	// Register Events Settings
	for($i = 1; $i < 5; $i++) {
		$wp_customize->add_setting('event_'.$i.'_title');
		$wp_customize->add_setting('event_'.$i.'_date');
		$wp_customize->add_setting('event_'.$i.'_description');
		$wp_customize->add_setting('event_'.$i.'_link');

		$wp_customize->add_control( 'event_'.$i.'_title', array( 
			'type'			=> 'text',
			'section'		=> 'static_front_page',
			'label'			=> 'Event '.$i.' Title',
			'description'	=> ''
		) );

		$wp_customize->add_control( 'event_'.$i.'_description', array( 
			'type'			=> 'textarea',
			'section'		=> 'static_front_page',
			'label'			=> 'Event '.$i.' Description',
			'description'	=> ''
		) );

		$wp_customize->add_control( 'event_'.$i.'_date', array( 
			'type'			=> 'datetime-local',
			'section'		=> 'static_front_page',
			'label'			=> 'Event '.$i.' Date',
			'description'	=> ''
		) );

		$wp_customize->add_control( 'event_'.$i.'_link', array( 
			'type'			=> 'url',
			'section'		=> 'static_front_page',
			'label'			=> 'Event '.$i.' Link',
			'description'	=> ''
		) );

		$wp_customize->selective_refresh->add_partial(
			'event_'.$i.'_title',
			array(
				'selector' => '.event-calendar .box:nth-of-type('.$i.') .event-meta a',
			)
		);

		$wp_customize->selective_refresh->add_partial(
			'event_'.$i.'_description',
			array(
				'selector' => '.event-calendar .box:nth-of-type('.$i.') .event-meta p.event-desc',
			)
		);

		$wp_customize->selective_refresh->add_partial(
			'event_'.$i.'_link',
			array(
				'selector' => '.event-calendar .box:nth-of-type('.$i.') .event-meta a',
			)
		);

		$wp_customize->selective_refresh->add_partial(
			'event_'.$i.'_date',
			array(
				'selector' => '.event-calendar .box:nth-of-type('.$i.') .event-date',
			)
		);
	}

	$wp_customize->add_setting('event_calendar_link');
	$wp_customize->add_control( 'event_calendar_link', array( 
		'type'			=> 'url',
		'section'		=> 'static_front_page',
		'label'			=> 'All Events Calendar Link',
		'description'	=> ''
	) );

	$wp_customize->selective_refresh->add_partial(
		'event_calendar_link',
		array(
			'selector' => '#events a.btn',
		)
	);

	// Contact Page
	$wp_customize->add_section('contact', array(
		'title'			=> 'Contact Form',
		'description'	=> '',
		'priority'		=> '120',
	));

	$wp_customize->add_setting('contact_form_id');

	$wp_customize->add_control( 'contact_form_id', array( 
		'type'			=> 'number',
		'section'		=> 'contact',
		'label'			=> 'WPForms Contact Form ID',
		'description'	=> ''
	 ) );

	 $wp_customize->add_setting('contact_hero_image');
	
	 $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'contact_hero_image', array(
		 'label'	=> 'Upload Contact Hero Image',
		 'section'	=> 'contact',
		 'settings'	=> 'contact_hero_image'
	 ) ));

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

	 // Register Footer Section
	 $wp_customize->add_section('footer', array(
		'title'			=> 'Footer',
		'description'	=> '',
		'priority'		=> '120',
	));
	
	$wp_customize->add_setting('footer_text');

	$wp_customize->add_control( 'footer_text', array( 
		'type'			=> 'textarea',
		'section'		=> 'footer',
		'label'			=> 'Footer Text',
		'description'	=> 'This will fill whitespace on larger devices'
	 ) );

	// Register Services Page Section
	$wp_customize->add_section('services', array(
		'title'			=> 'Services Page',
		'description'	=> '',
		'priority'		=> '120',
	));

	$wp_customize->add_setting('services_intro_title');
	$wp_customize->add_setting('services_intro_text');
	$wp_customize->add_setting('services_intro_image');
	
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'front_page_hero_image', array(
		'label'		=> 'Upload Hero Image',
		'section'	=> 'services',
		'settings'	=> 'services_intro_image'
	) ));

	$wp_customize->add_control( 'services_intro_title', array( 
		'type'			=> 'text',
		'section'		=> 'services',
		'label'			=> 'Services Hero Title',
		'description'	=> ''
	 ) );

	 $wp_customize->add_control( 'services_intro_text', array( 
		'type'			=> 'textarea',
		'section'		=> 'services',
		'label'			=> 'Services Hero Text',
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

	for($i = 1; $i < 4; $i++) {
		$wp_customize->add_setting( 'business_step_'.$i.'_title', array( 
			'capability'	=> 'edit_theme_options',
			'default'		=> '',
		 ) );
	
		 $wp_customize->add_control( 'business_step_'.$i.'_title', array( 
			'type'			=> 'text',
			'section'		=> 'pathways',
			'label'			=> 'Business Step '.$i.' Title',
			'description'	=> ''
		 ) );

		 $wp_customize->add_setting( 'business_step_'.$i.'_text', array( 
			'capability'	=> 'edit_theme_options',
			'default'		=> '',
		 ) );
	
		 $wp_customize->add_control( 'business_step_'.$i.'_text', array( 
			'type'			=> 'text',
			'section'		=> 'pathways',
			'label'			=> 'Business Step '.$i.' Description',
			'description'	=> ''
		 ) );
	}

	$wp_customize->add_setting( 'business_step_summary', array( 
		'capability'	=> 'edit_theme_options',
		'default'		=> '',
	 ) );

	 $wp_customize->add_control( 'business_step_summary', array( 
		'type'			=> 'text',
		'section'		=> 'pathways',
		'label'			=> 'Business Steps Summary',
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

	 for($i = 1; $i < 4; $i++) {
		$wp_customize->add_setting( 'individual_step_'.$i.'_title', array( 
			'capability'	=> 'edit_theme_options',
			'default'		=> '',
		 ) );
	
		 $wp_customize->add_control( 'individual_step_'.$i.'_title', array( 
			'type'			=> 'text',
			'section'		=> 'pathways',
			'label'			=> 'Individual Step '.$i.' Title',
			'description'	=> ''
		 ) );

		 $wp_customize->add_setting( 'individual_step_'.$i.'_text', array( 
			'capability'	=> 'edit_theme_options',
			'default'		=> '',
		 ) );
	
		 $wp_customize->add_control( 'individual_step_'.$i.'_text', array( 
			'type'			=> 'text',
			'section'		=> 'pathways',
			'label'			=> 'Individual Step '.$i.' Description',
			'description'	=> ''
		 ) );
	}

	$wp_customize->add_setting( 'individual_step_summary', array( 
		'capability'	=> 'edit_theme_options',
		'default'		=> '',
	 ) );

	 $wp_customize->add_control( 'individual_step_summary', array( 
		'type'			=> 'text',
		'section'		=> 'pathways',
		'label'			=> 'Individual Steps Summary',
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
	
	 for($i = 1; $i < 4; $i++) {
		$wp_customize->add_setting( 'non-profit_step_'.$i.'_title', array( 
			'capability'	=> 'edit_theme_options',
			'default'		=> '',
		 ) );
	
		 $wp_customize->add_control( 'non-profit_step_'.$i.'_title', array( 
			'type'			=> 'text',
			'section'		=> 'pathways',
			'label'			=> 'Non-Profit Step '.$i.' Title',
			'description'	=> ''
		 ) );

		 $wp_customize->add_setting( 'non-profit_step_'.$i.'_text', array( 
			'capability'	=> 'edit_theme_options',
			'default'		=> '',
		 ) );
	
		 $wp_customize->add_control( 'non-profit_step_'.$i.'_text', array( 
			'type'			=> 'text',
			'section'		=> 'pathways',
			'label'			=> 'Non-Profit Step '.$i.' Description',
			'description'	=> ''
		 ) );
	}

	$wp_customize->add_setting( 'non-profit_step_summary', array( 
		'capability'	=> 'edit_theme_options',
		'default'		=> '',
	 ) );

	 $wp_customize->add_control( 'non-profit_step_summary', array( 
		'type'			=> 'text',
		'section'		=> 'pathways',
		'label'			=> 'Non-Profit Steps Summary',
		'description'	=> ''
	 ) );

	$wp_customize->add_setting('government_pathways_images');

	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'government_pathways_images', array(
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

	for($i = 1; $i < 4; $i++) {
		$wp_customize->add_setting( 'government_step_'.$i.'_title', array( 
			'capability'	=> 'edit_theme_options',
			'default'		=> '',
		 ) );
	
		 $wp_customize->add_control( 'government_step_'.$i.'_title', array( 
			'type'			=> 'text',
			'section'		=> 'pathways',
			'label'			=> 'Government Step '.$i.' Title',
			'description'	=> ''
		 ) );

		 $wp_customize->add_setting( 'government_step_'.$i.'_text', array( 
			'capability'	=> 'edit_theme_options',
			'default'		=> '',
		 ) );
	
		 $wp_customize->add_control( 'government_step_'.$i.'_text', array( 
			'type'			=> 'text',
			'section'		=> 'pathways',
			'label'			=> 'Government Step '.$i.' Description',
			'description'	=> ''
		 ) );
	}
	
	$wp_customize->add_setting( 'government_step_summary', array( 
		'capability'	=> 'edit_theme_options',
		'default'		=> '',
	 ) );

	 $wp_customize->add_control( 'government_step_summary', array( 
		'type'			=> 'text',
		'section'		=> 'pathways',
		'label'			=> 'Government Steps Summary',
		'description'	=> ''
	 ) );

	// About Section
	$wp_customize->add_section('about', array(
		'title'			=> 'About Page',
		'description'	=> '',
		'priority'		=> '120',
	));

	$wp_customize->add_setting('about_intro_image');
	
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'about_intro_image', array(
		'label'		=> 'About Page Hero Image',
		'section'	=> 'about',
		'settings'	=> 'about_intro_image'
	) ));

	$wp_customize->add_setting( 'about_subtitle', array( 
		'capability'	=> 'edit_theme_options',
		'default'		=> '',
	 ) );

	 $wp_customize->add_control( 'about_subtitle', array( 
		'type'			=> 'text',
		'section'		=> 'about',
		'label'			=> 'About Subtitle',
		'description'	=> ''
	 ) );

	 $wp_customize->add_setting( 'our_history_left', array( 
		'capability'	=> 'edit_theme_options',
		'default'		=> '',
		'sanitize_callback'	=> 'sanitize_textarea_field',
	 ) );

	 $wp_customize->add_control( 'our_history_left', array( 
		'type'			=> 'textarea',
		'section'		=> 'about',
		'label'			=> 'History Statement (Left Col)',
		'description'	=> ''
	 ) );

	 $wp_customize->add_setting( 'our_history_right', array( 
		'capability'	=> 'edit_theme_options',
		'default'		=> '',
		'sanitize_callback'	=> 'sanitize_textarea_field',
	 ) );

	 $wp_customize->add_control( 'our_history_right', array( 
		'type'			=> 'textarea',
		'section'		=> 'about',
		'label'			=> 'History Statement (Right Col)',
		'description'	=> ''
	 ) );

	 $wp_customize->add_setting('history_image_1');

	 $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'history_image_1', array(
		 'label'	=> 'Upload History Banner Image 1',
		 'section'	=> 'about',
		 'settings'	=> 'history_image_1'
	 ) ));

	 $wp_customize->add_setting('history_image_2');

	 $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'history_image_2', array(
		 'label'	=> 'Upload History Banner Image 2',
		 'section'	=> 'about',
		 'settings'	=> 'history_image_2'
	 ) ));


	 $wp_customize->add_setting('about_infographic');

	 $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'about_infographic', array(
		 'label'	=> 'Upload Infographic',
		 'section'	=> 'about',
		 'settings'	=> 'about_infographic'
	 ) ));

	 $wp_customize->add_setting( 'about_prezi', array( 
		'capability'	=> 'edit_theme_options',
		'default'		=> '',
	 ) );
	 
	 $wp_customize->add_control( 'about_prezi', array( 
		'type'			=> 'url',
		'section'		=> 'about',
		'label'			=> 'Prezi Embed Link',
		'description'	=> ''
	 ) );

	 for($i = 1; $i < 7; $i++) {
		$wp_customize->add_setting('about_image_'.$i);
		$wp_customize->add_setting('about_caption_'.$i);

		$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'about_image_'.$i, array(
			'label'		=> 'Upload About Image '.$i,
			'section'	=> 'about',
			'settings'	=> 'about_image_'.$i
		) ));

		$wp_customize->add_control( 'about_caption_'.$i, array(
			'type'		 => 'text',
			'section'	 => 'about',
		   	'label'		 => 'Caption for About Image '.$i,
		   	'description'=> ''
		) );
	 }

	// Awards Banners
	$wp_customize->add_section('awards', array(
		'title'			=> 'Awards',
		'description'	=> '',
		'priority'		=> '120',
	));
	
	for($i = 1; $i < 5; $i++) {
		for($k = 1; $k < 4; $k++) {
			for($j = 1; $j < 3; $j++) {
				$wp_customize->add_setting('award_'.$i.'_row'.$j.'_col'.$k);
				$wp_customize->add_control( 'award_'.$i.'_row'.$j.'_col'.$k, array( 
					'type'			=> 'text',
					'section'		=> 'awards',
					'label'			=> 'Award Banner '.$i.' Row '.$j.' Col '.$k,
					'description'	=> ''
				) );
				
				$wp_customize->selective_refresh->add_partial(
					'award_'.$i.'_row'.$j.'_col'.$k,
					array(
						'selector'        => '#award-strip-'.$i.' .about-award-col:nth-of-type('.$k.') .about-award-row:nth-of-type('.$j.')',
						'render_callback' => 'soulfulsynergy_customize_partial_blogname',
					)
				);
			}
		}
	}

	// Why Section
	$wp_customize->add_section('why', array(
		'title'			=> 'Why Page',
		'description'	=> '',
		'priority'		=> '120',
	));
	
	$wp_customize->add_setting('why_hero_image');

	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'why_hero_image_'.$i, array(
		'label'		=> 'Upload Hero Image',
		'section'	=> 'why',
		'settings'	=> 'why_hero_image'
	) ));

	$wp_customize->add_setting('why_page_hero_intro');

	$wp_customize->add_control( 'why_page_hero_intro', array( 
		'type'			=> 'text',
		'section'		=> 'why',
		'label'			=> 'Why Hero Intro',
		'description'	=> ''
	) );

	$wp_customize->add_setting('why_page_hero_text');

	$wp_customize->add_control( 'why_page_hero_text', array( 
		'type'			=> 'text',
		'section'		=> 'why',
		'label'			=> 'Why Hero Text',
		'description'	=> ''
	) );

	$wp_customize->selective_refresh->add_partial(
		'why_page_hero_intro',
		array(
			'selector' => 'div#why-hero h1',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'why_page_hero_text',
		array(
			'selector' => 'div#why-hero h3',
		)
	);

	for($i = 1; $i <= 4; $i++) {
		$wp_customize->add_setting('why_banner_image_'.$i);
		$wp_customize->add_setting('why_section_title_'.$i);
		$wp_customize->add_setting('why_intro_text_'.$i);
		// $wp_customize->add_setting('why_full_text_'.$i);

		$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'why_banner_image_'.$i, array(
			'label'		=> 'Upload Section '.$i.' Banner Image',
			'section'	=> 'why',
			'settings'	=> 'why_banner_image_'.$i
		) ));

		$wp_customize->add_control( 'why_section_title_'.$i, array( 
			'type'			=> 'text',
			'section'		=> 'why',
			'label'			=> 'Section '.$i.' Title',
			'description'	=> ''
		) );

		$wp_customize->add_control( 'why_intro_text_'.$i, array( 
			'type'			=> 'text',
			'section'		=> 'why',
			'label'			=> 'Section '.$i.' Intro Text',
			'description'	=> ''
		) );

		// $wp_customize->add_control( 'why_full_text_'.$i, array( 
		// 	'type'			=> 'textarea',
		// 	'section'		=> 'why',
		// 	'label'			=> 'Section '.$i.' Full Text',
		// 	'description'	=> ''
		// ) );
	}

	$wp_customize->selective_refresh->add_partial(
		'why_banner_image_1',
		array(
			'selector' => 'div#why div.intro img',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'why_banner_image_2',
		array(
			'selector' => 'div#connections div.intro img',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'why_banner_image_3',
		array(
			'selector' => 'div#network div.intro img',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'why_section_title_1',
		array(
			'selector' => 'div#why div.header h1',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'why_section_title_2',
		array(
			'selector' => 'div#issues div.header h1',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'why_section_title_3',
		array(
			'selector' => 'div#connections div.header h1',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'why_section_title_4',
		array(
			'selector' => 'div#network div.header h1',
		)
	);
	
	$wp_customize->selective_refresh->add_partial(
		'why_intro_text_1',
		array(
			'selector' => 'div#why div.intro div.introduction p',
		)
	);
		
	$wp_customize->selective_refresh->add_partial(
		'why_intro_text_2',
		array(
			'selector' => 'div#issues div.intro div.introduction p',
		)
	);
		
	$wp_customize->selective_refresh->add_partial(
		'why_intro_text_3',
		array(
			'selector' => 'div#connections div.intro div.introduction p',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'why_intro_text_4',
		array(
			'selector' => 'div#network div.intro div.introduction p',
		)
	);

	// Register Courses Page Section
	$wp_customize->add_section('courses', array(
		'title'			=> 'Courses Page',
		'description'	=> '',
		'priority'		=> '120',
	));

	$wp_customize->add_setting('courses_intro_title');
	$wp_customize->add_setting('courses_intro_text');
	$wp_customize->add_setting('courses_intro_image');
	
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'front_page_hero_image', array(
		'label'		=> 'Upload Hero Image',
		'section'	=> 'courses',
		'settings'	=> 'courses_intro_image'
	) ));

	$wp_customize->add_control( 'courses_intro_title', array( 
		'type'			=> 'text',
		'section'		=> 'courses',
		'label'			=> 'Courses Hero Title',
		'description'	=> ''
		) );

	$wp_customize->add_control( 'courses_intro_text', array( 
		'type'			=> 'textarea',
		'section'		=> 'courses',
		'label'			=> 'Courses Hero Text',
		'description'	=> ''
	) );

	$wp_customize->selective_refresh->add_partial(
		'courses_intro_image',
		array(
			'selector' => 'section#courses-page #hero img',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'courses_intro_title',
		array(
			'selector' => 'section#courses-page #hero h1',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'courses_intro_text',
		array(
			'selector' => 'section#courses-page #hero h3',
		)
	);

	
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

		// Added Selective Refreshes
		$wp_customize->selective_refresh->add_partial('about_subtitle',
		array(
				'selector'			=> '.about-hero-subtitle',
				'render_callback'	=> 'soulfulsynergy_customize_partial_about_subtitle',
			)
		);

		$wp_customize->selective_refresh->add_partial('mission_statement',
		array(
				'selector'			=> '.about-mission-text',
				'render_callback'	=> 'soulfulsynergy_customize_partial_missionstatement',
			)
		);

		$wp_customize->selective_refresh->add_partial('about_infographic',
		array(
				'selector'			=> 'img#about-infographic',
				'render_callback'	=> 'soulfulsynergy_customize_partial_info_image',
			)
		);

		$wp_customize->selective_refresh->add_partial('history_image_1',
		array(
				'selector'			=> '.about-history-img img',
				'render_callback'	=> 'soulfulsynergy_customize_partial_history_image',
			)
		);

		$wp_customize->selective_refresh->add_partial('history_image_2',
		array(
				'selector'			=> '.about-history-img img',
				'render_callback'	=> 'soulfulsynergy_customize_partial_history_image',
			)
		);

		$wp_customize->selective_refresh->add_partial('our_history_left',
		array(
				'selector'			=> '.about-history-textarea-leftcol',
				'render_callback'	=> 'soulfulsynergy_customize_partial_history_left',
			)
		);

		$wp_customize->selective_refresh->add_partial('our_history_right',
		array(
				'selector'			=> '.about-history-textarea-rightcol',
				'render_callback'	=> 'soulfulsynergy_customize_partial_history_right',
			)
		);

		for($i = 1; $i < 7; $i++) {
			$selector = $i > 3 ? 2 : 1;
			$wp_customize->selective_refresh->add_partial('about_image_'.$i,
			array(
					'selector'			=> '#about-photo-'.$i.' a img',
					'render_callback'	=> 'soulfulsynergy_customize_partial_image_'.$i,
				)
			);
		 }
	}
}
add_action( 'customize_register', 'soulfulsynergy_customize_register' );

function soulfulsynergy_customize_partial_about_subtitle() {
	get_theme_mod('about_subtitle');
}

function soulfulsynergy_customize_partial_missionstatement() {
	get_theme_mod('mission_statement');
}

function soulfulsynergy_customize_partial_info_image() {
	get_theme_mod('about_infographic');
}

function soulfulsynergy_customize_partial_history_image() {
	get_theme_mod('history_image');
}

function soulfulsynergy_customize_partial_history_left() {
	get_theme_mod('our_history_left');
}

function soulfulsynergy_customize_partial_history_right() {
	get_theme_mod('our_history_right');
}

function soulfulsynergy_customize_partial_image_1() {
	get_theme_mod('about_image_1');
}

function soulfulsynergy_customize_partial_image_2() {
	get_theme_mod('about_image_2');
}

function soulfulsynergy_customize_partial_image_3() {
	get_theme_mod('about_image_3');
}

function soulfulsynergy_customize_partial_image_4() {
	get_theme_mod('about_image_4');
}

function soulfulsynergy_customize_partial_image_5() {
	get_theme_mod('about_image_5');
}

function soulfulsynergy_customize_partial_image_6() {
	get_theme_mod('about_image_6');
}



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