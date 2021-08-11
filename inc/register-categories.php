<?php

function soulfulsynergy_register_categories() {
    // Pathways
    if(!term_exists('individual')) wp_insert_term('Individual','pathways');
    if(!term_exists('business')) wp_insert_term('Business','pathways');
    if(!term_exists('government')) wp_insert_term('Government','pathways');
    if(!term_exists('non-profit')) wp_insert_term('Non-Profit','pathways');

    // Course Categories
    if(!term_exists('in-person')) wp_insert_term('In-Person','course_cats');
    if(!term_exists('online')) wp_insert_term('Online','course_cats');
    if(!term_exists('hybrid')) wp_insert_term('Hybrid','course_cats');

}

add_action('admin_init', 'soulfulsynergy_register_categories');