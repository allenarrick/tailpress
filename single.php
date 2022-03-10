<?php get_header(); ?>

	<div class="container my-8 mx-auto">

	<?php if ( have_posts() ) : ?>

		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<?php if ( is_user_logged_in() ) : ?>
				<h2 class="px-2 py-1 bg-gray-300 text-sm rounded-sm inline">single.php</h2>
			<?php endif; ?>
			
			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

		<?php endwhile; ?>

	<?php endif; ?>

	</div>

<?php
get_footer();
