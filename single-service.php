<?php
get_header();
get_template_part('./template-parts/intro', 'service');
?>
<div class="services-carousel">
    <div class="services-carousel-cardholder">
        <?php get_template_part('./template-parts/card', 'service', array('preview' => true)); ?>
    </div>
</div>

<div class="services-body">
    <?php get_template_part('./template-parts/content', 'service', array('preview' => true)); ?>
</div>

<?php
get_footer();
?>