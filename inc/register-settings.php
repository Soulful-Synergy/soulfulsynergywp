<?php 
/**
 * custom option and settings
 */
function soulfulsynergy_settings_init() { 
    // Register a new section in the "soulfulsynergy" page for Metrics
    add_settings_section(
        'soulfulsynergy_section_metrics',
        __( 'Metrics', 'soulfulsynergy' ), 
        'soulfulsynergy_section_metrics_callback',
        'soulfulsynergy'
    );

    add_settings_section(
        'soulfulsynergy_section_socials',
        __( 'Social Links', 'soulfulsynergy' ), 
        'soulfulsynergy_section_socials_callback',
        'soulfulsynergy'
    );

    register_setting(
        'soulfulsynergy',
        'soulfulsynergy_socials',
        array(
            'type'  => 'array'
        )
    );

    add_settings_field(
        'soulfulsynergy_socials', 
            __( 'Social Links', 'soulfulsynergy' ),
        'soulfulsynergy_socials_input_cb',
        'soulfulsynergy',
        'soulfulsynergy_section_socials',
        array(
            'label_for' => 'soulfulsynergy_socials',
            'class'     => 'soulfulsynergy_row',
        )
    );

    $idxs = array(
        1 => "One",
        2 => "Two",
        3 => "Three",
        4 => "Four"
    );

    for( $i = 1; $i < 5; $i++) {
        register_setting( 
            'soulfulsynergy', 
            'soulfulsynergy_metric_'.$i, 
            array( 
                'type' => 'array' 
                ) 
        );

        add_settings_field(
            'soulfulsynergy_metric_'.$i, 
                __( 'Metric '.$idxs[$i], 'soulfulsynergy' ),
            'soulfulsynergy_metric_input_cb',
            'soulfulsynergy',
            'soulfulsynergy_section_metrics',
            array(
                'label_for' => 'soulfulsynergy_metric_'.$i,
                'class'     => 'soulfulsynergy_row',
            )
        );
    }
}
 
/**
 * Register our soulfulsynergy_settings_init to the admin_init action hook.
 */
add_action( 'admin_init', 'soulfulsynergy_settings_init' );
 
 
/**
 * Custom option and settings:
 *  - callback functions
 */
 
 
/**
 * Metrics section callback function.
 *
 * @param array $args  The settings array, defining title, id, callback.
 */
function soulfulsynergy_section_metrics_callback( $args ) {
    ?>
    <p id="<?php echo esc_attr( $args['id'] ); ?>">
    <?php esc_html_e( 'Statistical Numbers that Are Shown on the Website.', 'soulfulsynergy' ); ?>
    </p>
    <?php
}

function soulfulsynergy_section_socials_callback( $args ) {
    ?>
    <p id="<?php echo esc_attr( $args['id'] ); ?>">
    <?php esc_html_e( 'Social Media Links.', 'soulfulsynergy' ); ?>
    </p>
    <?php
}

function soulfulsynergy_metric_input_cb( $args ) {
    // Get the value of the setting we've registered with register_setting()
    $options = get_option( $args['label_for'] );
    ?>
    
    <div style="display:inline-block!important;">
        <label for="<?php echo esc_attr( $args['label_for'] ); ?>_title" style="display:block!important;">Title</label>
        <input 
        id="<?php echo esc_attr( $args['label_for'] ); ?>_title" 
        name="<?php echo esc_attr( $args['label_for'] ); ?>[title]"
        type="text"
        placeholder="Name"
        value="<?php echo isset($options['title']) ? $options['title'] : ''?>">
    </div>
    <div style="display:inline-block!important;width:50%!important;">
        <label for="<?php echo esc_attr( $args['label_for'] ); ?>_title" style="display:block!important;">Value</label>
        <input 
        id="<?php echo esc_attr( $args['label_for'] ); ?>_value" 
        name="<?php echo esc_attr( $args['label_for'] ); ?>[value]" 
        type="number" 
        placeholder="Value"
        value="<?php echo isset($options['value']) ? $options['value'] : ''?>">
    </div>
    <?php
}

function soulfulsynergy_socials_input_cb( $args ) {
    // Get the value of the setting we've registered with register_setting()
    $options = get_option( $args['label_for'] );
    ?>

        <label for="<?php echo esc_attr( $args['label_for'] ); ?>_facebook">Facebook</label>
        <input 
        style="display:block!important;margin-bottom:10px!important;"
        id="<?php echo esc_attr( $args['label_for'] ); ?>_facebook" 
        name="<?php echo esc_attr( $args['label_for'] ); ?>[facebook]"
        type="url"
        placeholder="https://facebook.com/"
        value="<?php echo isset($options['facebook']) ? $options['facebook'] : '' ?>">
        
        <label for="<?php echo esc_attr( $args['label_for'] ); ?>_instagram">Instagram</label>
        <input
        style="display:block!important;margin-bottom:10px!important;"
        id="<?php echo esc_attr( $args['label_for'] ); ?>_instagram" 
        name="<?php echo esc_attr( $args['label_for'] ); ?>[instagram]" 
        type="url" 
        placeholder="https://instagram.com"
        value="<?php echo isset($options['instagram']) ? $options['instagram'] : ''?>">
        
        <label for="<?php echo esc_attr( $args['label_for'] ); ?>_linkedin">LinkedIn</label>
        <input
        style="display:block!important;"
        id="<?php echo esc_attr( $args['label_for'] ); ?>_linkedin" 
        name="<?php echo esc_attr( $args['label_for'] ); ?>[linkedin]" 
        type="url" 
        placeholder="https://linkedin.com"
        value="<?php echo isset($options['linkedin']) ? $options['linkedin'] : ''?>">


    <?php
}

/**
 * Text Input callback function.
 *
 * WordPress has magic interaction with the following keys: label_for, class.
 * - the "label_for" key value is used for the "for" attribute of the <label>.
 * - the "class" key value is used for the "class" attribute of the <tr> containing the field.
 * Note: you can add custom key value pairs to be used inside your callbacks.
 *
 * @param array $args
 */
function soulfulsynergy_text_input_cb( $args ) {
    // Get the value of the setting we've registered with register_setting()
    $options = get_option( $args['setting'] );
    ?>
    
    <input 
    id="<?php echo esc_attr( $args['label_for'] ); ?>" 
    name="soulfulsynergy_options[<?php echo esc_attr( $args['label_for'] ) ?>]" 
    type="text" 
    value="<?php echo $options[esc_attr( $args['label_for'] )] ?>">
    <?php
}
 
/**
 * Numerical Input callback function.
 *
 * WordPress has magic interaction with the following keys: label_for, class.
 * - the "label_for" key value is used for the "for" attribute of the <label>.
 * - the "class" key value is used for the "class" attribute of the <tr> containing the field.
 * Note: you can add custom key value pairs to be used inside your callbacks.
 *
 * @param array $args
 */
function soulfulsynergy_numerical_input_cb( $args ) {
    // Get the value of the setting we've registered with register_setting()
    $options = get_option( 'soulfulsynergy' );
    ?>
    
    <input 
    id="<?php echo esc_attr( $args['label_for'] ); ?>" 
    name="soulfulsynergy_options[<?php echo esc_attr( $args['label_for'] ); ?>]" 
    type="number" 
    value="<?php echo $options[esc_attr( $args['label_for'] )] ?>">
    <?php
}
 
/**
 * Add the top level menu page.
 */
function soulfulsynergy_options_page() {
    add_menu_page(
        'Soulful Synergy',
        'Soulful Synergy Options',
        'manage_options',
        'soulfulsynergy',
        'soulfulsynergy_options_page_html'
    );
}
 
/**
 * Register our soulfulsynergy_options_page to the admin_menu action hook.
 */
add_action( 'admin_menu', 'soulfulsynergy_options_page' );
 
 
/**
 * Top level menu callback function
 */
function soulfulsynergy_options_page_html() {
    // check user capabilities
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
 
    // add error/update messages
 
    // check if the user have submitted the settings
    // WordPress will add the "settings-updated" $_GET parameter to the url
    if ( isset( $_GET['settings-updated'] ) ) {
        // add settings saved message with the class of "updated"
        add_settings_error( 'soulfulsynergy_messages', 'soulfulsynergy_message', __( 'Settings Saved', 'soulfulsynergy' ), 'updated' );
    }
 
    // show error/update messages
    settings_errors( 'soulfulsynergy_messages' );
    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <form action="options.php" method="post">
            <?php
            // output security fields for the registered setting "soulfulsynergy"
            settings_fields( 'soulfulsynergy' );
            // output setting sections and their fields
            // (sections are registered for "soulfulsynergy", each field is registered to a specific section)
            do_settings_sections( 'soulfulsynergy' );
            // output save settings button
            submit_button( 'Save Settings' );
            ?>
        </form>
    </div>
    <?php
}