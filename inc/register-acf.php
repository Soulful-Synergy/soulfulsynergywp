<?php
/**
 * soulfulsynergy Theme Customizer
 *
 * @package soulfulsynergy
 */

/**
 * Register Advanced Custom Fields for Post Types
*
*/
if( function_exists('acf_add_local_field_group') ):
    soulfulsynergy_register_fields();
endif;

function soulfulsynergy_register_fields() {
    // Register Testimonial Fields
    acf_add_local_field_group(array (
        'key' => 'testimonials_group',
        'title' => 'Testimonials Group',
        'fields' => array (
            array (
                'key' => 'testimonial_image',
                'label' => 'Image',
                'type' => 'image',
                'instructions' => 'Enter a Square Headshot Image',
                'required' => 1,
                // 'default_value' => 'https://via.placeholder.com/50x50' // TODO: Add Deafault Icon Image
            ),
            array (
                'key' => 'testimonial_body',
                'label' => 'Testimonial',
                'type' => 'textarea',
                'required' => 1,
                'placeholder' => 'Reasons they Love This Company...',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'testimonial'
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'label_placement' => 'top'
    ));

    // Register Services Fields
    acf_add_local_field_group(array (
        'key' => 'services_group',
        'title' => 'Services Group',
        'fields' => array (
            array (
                'key' => 'service_image',
                'label' => 'Image',
                'name'  => 'service_image',
                'type' => 'image',
                'instructions' => 'Enter a Square Image to Represent the Service',
                'required' => 1,
                // 'default_value' => 'https://via.placeholder.com/200x200' // TODO: Add Deafault Icon Image
            ),
            array (
                'key' => 'service_short_desc',
                'label' => 'Short Description',
                'name'  => 'service_short_desc',
                'type' => 'text',
                'required' => 1,
                'instructions' => 'Enter a Short Description of the Service Here',
            ),
            array (
                'key' => 'service_full_desc',
                'label' => 'Full Description',
                'name'  => 'service_full_desc',
                'type' => 'wysiwyg',
                'required' => 1,
                'instructions' => 'Enter the Full Description of the Service Here',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'service'
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'label_placement' => 'top'
    ));

    // Register Training and Courses Fields
    acf_add_local_field_group(array (
        'key' => 'training_courses_group',
        'title' => 'Training & Courses Group',
        'fields' => array (
            array (
                'key' => 'tc_image',
                'label' => 'Image',
                'name'  => 'tc_image',
                'type' => 'image',
                'instructions' => 'Enter a Square Image To Represent the Training/Course',
                'required' => 1,
                // 'default_value' => 'https://via.placeholder.com/50x50' // TODO: Add Deafault Icon Image
            ),
            array (
                'key' => 'tc_link',
                'label' => 'Link',
                'name'  => 'tc_link',
                'type' => 'link',
                'instructions' => 'Enter the Link that Can Be Used to Register/Access the Course',
                'required' => 1,
            ),
            array (
                'key' => 'tc_short_desc',
                'label' => 'Short Description',
                'name'  => 'tc_short_desc',
                'type' => 'text',
                'required' => 1,
                'placeholder' => 'Let Me Grab Your Attention...',
            ),
            array (
                'key' => 'tc_full_desc',
                'label' => 'Full Description',
                'name'  => 'tc_full_desc',
                'type' => 'wysiwyg',
                'required' => 1,
                'placeholder' => 'In This Course...',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'training'
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'label_placement' => 'top'
    ));

    // Register Team Member Fields
    acf_add_local_field_group(array (
        'key' => 'team_members_group',
        'title' => 'Team Members Group',
        'fields' => array (
            array (
                'key' => 'tm_image',
                'label' => 'Image',
                'name'  => 'tm_image',
                'type' => 'image',
                'instructions' => 'Enter a Square Image to Represent the Team Member',
                'required' => 1,
                // 'default_value' => 'https://via.placeholder.com/50x50' // TODO: Add Deafault Icon Image
            ),
            array (
                'key' => 'tm_title',
                'label' => 'Title',
                'name'  => 'tm_title',
                'type' => 'text',
                'instructions' => 'Enter Job Title',
                'required' => 0,
            ),
            array (
                'key' => 'tm_instagram',
                'label' => 'Instagram Link',
                'name'  => 'tm_instagram',
                'type' => 'link',
                'instructions' => 'Enter Instagram Link',
                'required' => 0,
            ),
            array (
                'key' => 'tm_facebook',
                'label' => 'Facebook Link',
                'name'  => 'tm_facebook',
                'type' => 'link',
                'instructions' => 'Enter Facebook Link',
                'required' => 0,
            ),
            array (
                'key' => 'tm_linkedin',
                'label' => 'LinkedIn Link',
                'name'  => 'tm_linkedin',
                'type' => 'link',
                'instructions' => 'Enter LinkedIn Link',
                'required' => 0,
            ),
            array (
                'key' => 'tm_email',
                'label' => 'Email',
                'name'  => 'tm_email',
                'type' => 'email',
                'instructions' => 'Enter Email',
                'required' => 0,
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'team_member'
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'label_placement' => 'top'
    ));

    // Register Awards Fields
    acf_add_local_field_group(array (
        'key' => 'awards_group',
        'title' => 'Awards Group',
        'fields' => array (
            array (
                'key' => 'awards_image',
                'label' => 'Image',
                'name'  => 'awards_image',
                'type' => 'image',
                'instructions' => 'Enter an Image for the Award',
                'required' => 1,
                // 'default_value' => 'https://via.placeholder.com/50x50' // TODO: Add Deafault Icon Image
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'award'
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'label_placement' => 'top'
    ));

    // Register Partners Fields
    acf_add_local_field_group(array (
        'key' => 'partners_group',
        'title' => 'Partners Group',
        'fields' => array (
            array (
                'key' => 'partner_image',
                'label' => 'Image',
                'name'  => 'partner_image',
                'type' => 'image',
                'instructions' => 'Enter an Image for the Partner',
                'required' => 1,
                // 'default_value' => 'https://via.placeholder.com/50x50' // TODO: Add Deafault Icon Image
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'partner'
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'label_placement' => 'top'
    ));
}