<div class="<?php if(!isset($args["preview"])) echo "hidden"; ?> noselect services-carousel-card" <?php if(!isset($args["preview"])) echo "id=\"card-".$args["it"]."\""; ?>>
    <img src="<?php echo get_field("service_image")["url"] ?>" width="150" height="150">
    <h3><?php echo get_the_title(); ?></h3>
    <p><?php echo get_field("service_short_desc") ?></p>
</div>