<?php get_header(); ?>

<div>
<?php if ( is_user_logged_in() ) : ?>
				<h2 class="inline px-2 py-1 text-sm bg-gray-300 rounded-sm">page.php</h2>
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
