<?php

    // Forked from https://gist.github.com/hitautodestruct/4345363

    $menu_name = 'primary';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );

?>

<nav id="primary-menu" class="hidden p-4 mt-4 bg-gray-100 lg:mt-0 lg:p-0 lg:bg-transparent lg:block"
    >
<ul class="main-nav lg:flex lg:-mx-4">
    <?php
    $count = 0;
    $submenu = false;

    foreach( $menuitems as $item ):

        $link = $item->url;
        $title = $item->title;
        $id = $item->ID;
        $current_post = $post->post_title;

        if($title == $current_post) { $active = true;}
        
        // item does not have a parent so menu_item_parent equals 0 (false)
        if ( !$item->menu_item_parent ):

        // save this id for later comparison with sub-menu items
        $parent_id = $item->ID;
    ?>

    <li x-data="{dropdown : false}" @mouseleave="dropdown = false" class="relative lg:mx-4 <?php if($active): ?> text-primary font-bold <? endif; ?>"
        >
        <a href="<?php echo $link; ?>" class="title hover:text-primary" @mouseover="dropdown = true" >
            <?php echo $title; ?>
        </a>
    <?php endif; ?>

        <?php if ( $parent_id == $item->menu_item_parent ): ?>

            <?php if ( !$submenu ): $submenu = true; ?>
            <div class="absolute py-4" x-show="dropdown" x-cloak>
                <ul class="bg-gray-500 sub-menu w-36 " >
                <?php endif; ?>

                    <li class="item menu-item menu-item-type-post_type lg:mx-4">
                        <a href="<?php echo $link; ?>" class="title "><?php echo $title; ?></a>
                    </li>

                <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                </ul>
            </div>
            <?php $submenu = false; endif; ?>

        <?php endif; ?>

    <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
    </li>                           
    <?php $submenu = false; endif; ?>

<?php $count++; endforeach; ?>

</ul>
</nav>
