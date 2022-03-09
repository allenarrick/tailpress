<?php
$number_of_posts = 1;

$the_query = new WP_Query( 
    array( 
        'post_type' => 'announcements',
        'posts_per_page' => $number_of_posts,
        'post_status'    => array( 'publish' ),
        'meta_key'		=> 'live',
	    'meta_value'	=> '1'
        ) 
);
?>

<?php
if ($the_query->have_posts()) {

while ($the_query->have_posts()) {
    $the_query->the_post();
    $icon = get_field('icon');
    $link = get_field('link');
    $hideable = get_field('hideable');
    if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
    <?php endif; 
    ?>

    <aside 
         class="relative flex justify-start p-3 text-base text-white md:text-center md:justify-center"  
        style="background: <?= get_field('background_color')?>;" 
        x-data="{announcement: $persist(true)}" 
        x-show="announcement" 
        x-collapse 
        <?php if($hideable == 1): ?>x-cloak data-aos="fade" data-aos-duration="1000"<?php endif; ?>
    >
        <div class="w-5/6">
            <?php if($link): ?><a  href="<?= esc_url( $link_url ); ?>"><?php endif; ?>
                
                <?php if($icon): ?>
                    <i class="self-center <?= $icon ?>"></i>
                <?php endif; ?>

                <?= get_field( 'announcement' ); ?>

                <?php if($link): ?> &rarr; <?php endif; ?>
            <?php if($link): ?></a><?php endif; ?>
        </div>
        <?php if($hideable == 1): ?>
        <button class="absolute p-1 transition-colors rounded right-3 hover:bg-white/10" type="button" @click="announcement = false">
            <span class="sr-only"> Close </span>
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <?php endif; ?>
    </aside>

<?php
    }
}

wp_reset_postdata();
?>


