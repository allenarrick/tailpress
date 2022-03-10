<?php get_header(); ?>

<div class="container mx-auto my-8">
<?php if ( is_user_logged_in() ) : ?>
				<h2 class="px-2 py-1 bg-gray-300 text-sm rounded-sm inline">page.php</h2>
			<?php endif; ?>
	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();
