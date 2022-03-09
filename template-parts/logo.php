<!-- Header Logo -->
<div>
    <?php if ( has_custom_logo() ) { ?>
        <?php the_custom_logo(); ?>
    <?php } else { ?>
        <div class="text-lg uppercase">
            <a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
                <?php echo get_bloginfo( 'name' ); ?>
            </a>
        </div>

        <p class="text-sm font-light text-gray-600">
            <?php echo get_bloginfo( 'description' ); ?>
        </p>

    <?php } ?>
</div>
