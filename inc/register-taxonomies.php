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
}

add_action('init', 'soulfulsynergy_register_custom_taxonomies');