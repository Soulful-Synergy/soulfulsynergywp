<?php
get_header();
?>

<style>
    .set {
        font-size: 20px;
    }
    .set img {
        margin-bottom: 20px;
    }
</style>

<div style="width: 100%; height: 500px; display: flex; background: #33808A;">
 
<div style="margin: 50px auto; text-align: center;">
    <?php get_template_part('./template-parts/content', 'testimonial'); ?>
    </div>
</div>
<?php
get_footer();
?>