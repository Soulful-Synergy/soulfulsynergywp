<?php

function soulfulsynergy_register_custom_taxonomies() {
    register_taxonomy(
        'pathways', 
        array( 'service' ), 
        array(
            'labels' => array(
                'name'          => __('Pathways', 'soulfulsynergy'),
                'singular_name' => __('Pathway', 'soulfulsynergy'),
                'search_items'  => __('Search Pathways', 'soulfulsynergy'),
                'parent_item'   => __('Parent Pathway', 'soulfulsynergy'),
                'edit_item'     => __('Edit Pathway', 'soulfulsynergy'),
                'update_item'   => __('Update Pathway', 'soulfulsynergy'),
                'add_new_item'  => __('Add New Pathways', 'soulfulsynergy'),
                'new_item_name' => __('New Pathway Name', 'soulfulsynergy'),
                'menu_name'     => __('Pathways', 'soulfulsynergy'),
            ),
            'hierarchical'   => true,
        ),
    );

    register_taxonomy(
        'course_cats', 
        array( 'training' ), 
        array(
            'labels' => array(
                'name'          => __('Course Types', 'soulfulsynergy'),
                'singular_name' => __('Course Type', 'soulfulsynergy'),
                'search_items'  => __('Search Course Types', 'soulfulsynergy'),
                'parent_item'   => __('Parent Course Type', 'soulfulsynergy'),
                'edit_item'     => __('Edit Course Type', 'soulfulsynergy'),
                'update_item'   => __('Update Course Type', 'soulfulsynergy'),
                'add_new_item'  => __('Add New Course Type', 'soulfulsynergy'),
                'new_item_name' => __('New Course Type', 'soulfulsynergy'),
                'menu_name'     => __('Course Types', 'soulfulsynergy'),
            ),
            'hierarchical'   => true,
        ),
    );
}

add_action('init', 'soulfulsynergy_register_custom_taxonomies');