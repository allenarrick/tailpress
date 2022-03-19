<!-- Header Logo -->
<div>
    <?php if ( has_custom_logo() ) { ?>
        <img src="<?php echo get_custom_logo_url();?>" width="200">
    <?php } else { ?>
        <div class="text-lg uppercase">
            <a href="<?php echo get_bloginfo( 'url' ); ?>" class="text-lg font-extrabold uppercase">
                <?php echo get_bloginfo( 'name' ); ?>
            </a>
        </div>

        <p class="text-sm font-light text-gray-600">
            <?php echo get_bloginfo( 'description' ); ?>
        </p>

    <?php } ?>
</div>
