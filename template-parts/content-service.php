<div class="<?php if(!isset($args["preview"])) echo "hidden"; ?> card-body" <?php if(!isset($args["preview"])) echo "id=\"card-body-".$args["it"]."\""; ?>>
    <h1><?php echo get_the_title(); ?></h1>
    <?php echo get_field("service_full_desc"); ?>
</div>