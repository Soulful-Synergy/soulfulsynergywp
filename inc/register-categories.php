<?php

function soulfulsynergy_register_categories() {
    // Pathways
    wp_insert_term('Individual','pathways');
    wp_insert_term('Business','pathways');
    wp_insert_term('Government','pathways');
    wp_insert_term('Non-Profit','pathways');

    // Course Categories
    wp_insert_term('In-Person','course_cats');
    wp_insert_term('Online','course_cats');
    wp_insert_term('Hybrid','course_cats');

}

add_action('admin_init', 'soulfulsynergy_register_categories');