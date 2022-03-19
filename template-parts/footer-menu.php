<?php
if ( $args['menu_location'] ) {
    $menu_location = $args['menu_location'];
  }
?>
<div>
    
    <p class="font-medium">
        <?= wp_get_nav_menu_name( $menu_location ) ?>
    </p>
    <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
    
        <?php if ( has_nav_menu( $menu_location ) ): ?>

            <?php $menu_items = wp_get_nav_menu_items( wp_get_nav_menu_name( $menu_location ) ); ?>

            <?php foreach ( $menu_items as $menu_item ): ?>

                <a href="<?= esc_url( $menu_item->url ) ?>"
                target="<?= esc_attr( $menu_item->target ?: '_self' ) ?>"
                class="hover:opacity-75 <?= esc_attr( implode( ' ', $menu_item->classes ) ) ?>"><?= esc_html( $menu_item->title ) ?></a>

            <?php endforeach; ?>

        <?php endif; ?>
    </nav>
</div>
