<?php

function soulfulsynergy_register_categories() {
    wp_insert_term('Individual','pathways');

    wp_insert_term('Business','pathways');

    wp_insert_term('Government','pathways');

    wp_insert_term('Non-Profit','pathways');
}

add_action('admin_init', 'soulfulsynergy_register_categories');