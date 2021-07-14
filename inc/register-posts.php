<?php
    function soulfulsynergy_custom_post_type() {
        register_post_type('testimonial',
            array(
                'labels'    => array(
                    'name'              => __('Testimonials', 'soulfulsynergy'),
                    'singular_name'     => __('Testimonial', 'soulfulsynergy'),
                    'add_new_item'      => __('Add New Testimonial', 'soulfulsynergy')
                ),
                    'public'        => true,
                    'has_archive'   => false,
                    'supports'      => array('title'),
                    'menu_icon'     => 'dashicons-editor-quote'
            )
        );

        register_post_type('service',
            array(
                'labels'    => array(
                    'name'              => __('Services', 'soulfulsynergy'),
                    'singular_name'     => __('Service', 'soulfulsynergy'),
                    'add_new_item'      => __('Add New Service', 'soulfulsynergy')
                ),
                    'public'        => true,
                    'has_archive'   => false,
                    'supports'      => array('title'),
                    'menu_icon'     => 'dashicons-chart-bar',
                    'taxonomies'    => array( 'pathways' )
            )
        );

        register_post_type('training',
            array(
                'labels'    => array(
                    'name'              => __('Trainings/Courses', 'soulfulsynergy'),
                    'singular_name'     => __('Training/Course', 'soulfulsynergy'),
                    'add_new_item'      => __('Add New Training/Course', 'soulfulsynergy')
                ),
                    'public'        => true,
                    'has_archive'   => false,
                    'supports'      => array('title'),
                    'menu_icon'     => 'dashicons-welcome-learn-more'
            )
        );

        register_post_type('team_member',
            array(
                'labels'    => array(
                    'name'              => __('Team Members', 'soulfulsynergy'),
                    'singular_name'     => __('Team Member', 'soulfulsynergy'),
                    'add_new_item'      => __('Add New Team Member', 'soulfulsynergy')
                ),
                    'public'        => true,
                    'has_archive'   => false,
                    'supports'      => array('title'),
                    'menu_icon'     => 'dashicons-groups'
            )
        );

        register_post_type('award',
            array(
                'labels'    => array(
                    'name'              => __('Awards', 'soulfulsynergy'),
                    'singular_name'     => __('Team Member', 'soulfulsynergy'),
                    'add_new_item'      => __('Add New Award', 'soulfulsynergy')
                ),
                    'public'        => true,
                    'has_archive'   => false,
                    'supports'      => array('title'),
                    'menu_icon'     => 'dashicons-awards'
            )
        );

        register_post_type('partner',
            array(
                'labels'    => array(
                    'name'              => __('Partners', 'soulfulsynergy'),
                    'singular_name'     => __('Partner', 'soulfulsynergy'),
                    'add_new_item'      => __('Add New Partner', 'soulfulsynergy')
                ),
                    'public'        => true,
                    'has_archive'   => false,
                    'supports'      => array('title'),
                    'menu_icon'     => 'dashicons-businessman'
            )
        );
    }

    add_action('init', 'soulfulsynergy_custom_post_type');