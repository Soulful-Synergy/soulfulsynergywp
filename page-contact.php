<?php get_header(); ?>

<div id="contact-page" style="display: flex; flex-flow: row; flex-wrap: wrap;">
    <div id="contact-hero">
    <img style="width: 100%; height: 100%;" src="<?php echo get_theme_mod('contact_hero_image'); ?>" alt="Contact Us">
    </div>
    <div id="contact-form-wrapper">
        <h2 style="margin-top: 10px; margin-bottom: 5px;">Contact Us!</h2>
        <?php
    $form_id = get_theme_mod('contact_form_id');
    echo do_shortcode('[wpforms id="'.$form_id.'"]'); 
    ?>
    </div>
</div>
<?php get_footer(); ?>