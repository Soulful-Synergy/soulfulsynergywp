<?php

function soulfulsynergy_buttons( $buttons ) {
    array_unshift( $buttons, 'fontselect' ); 
    array_unshift( $buttons, 'fontsizeselect' ); 
    return $buttons;
}

add_filter('mce_buttons', 'soulfulsynergy_buttons');

function soulfulsynergy_custom_enter_title( $input ) {
    $pt = get_post_type();
    switch($pt) {
        case 'testimonial':
            return __('Enter Name of Testimonial Author', 'soulfulsynergy');
        case 'service':
            return __('Enter Service Name', 'soulfulsynergy');
        case 'training':
            return __('Enter Course/Program Name', 'soulfulsynergy');
        case 'partner': 
            return __('Enter Partner Name', 'soulfulsynergy');
        case 'award':
            return __('Enter Award Name', 'soulfulsynergy');
        default:
            return __('Enter Title', 'soulfulsyngery');
    }   
}

add_filter( 'enter_title_here', 'soulfulsynergy_custom_enter_title' );

function soulfulsynergy_anchor_classes($classes, $item, $args)
{
    if (isset($args->anchor_class)) {
        $classes['class'] = $args->anchor_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'soulfulsynergy_anchor_classes', 1, 3);