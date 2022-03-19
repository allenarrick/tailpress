<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 ' ); ?>>



<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="flex flex-col min-h-screen">

<?php do_action( 'tailpress_header' ); ?>

<header>

	<?php get_template_part( 'template-parts/announcement', 'announcement'); ?>

		<nav class="container mx-auto" x-data="{open : false}">
			<div class="py-6 border-b lg:flex lg:justify-between lg:items-center">
				<div class="flex items-center justify-between gap-x-4">
				<?php get_template_part( 'template-parts/logo', 'logo'); ?>

					<div class="lg:hidden">
						<a href="#" aria-label="Toggle navigation" id="mobile-menu-toggle" @click.prevent="open = true">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
											  id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>
				<div class="flex items-center justify-center gap-x-4">
				<?php get_template_part('template-parts/mobile-menu', 'Mobile Menu')?>
				
				<?php get_template_part('template-parts/primary-nav', 'Nav')?>
				
				<div class="items-center hidden space-x-4 xl:flex">
					<form method="get" id="searchform" action="<?php bloginfo('url'); ?>"  class="mb-0">
						<div class="relative">
						<input
							class="h-10 px-4 pr-10 text-sm placeholder-gray-300 border-2 border-gray-200 rounded-lg focus:z-10"
							type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Search..."
						/>

						<button
							class="absolute inset-y-0 right-0 p-2 mr-px text-gray-600 rounded-r-lg"
							type="submit"
						>
							<svg
							class="w-5 h-5"
							fill="currentColor"
							viewbox="0 0 20 20"
							xmlns="http://www.w3.org/2000/svg"
							>
							<path
								clip-rule="evenodd"
								d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
								fill-rule="evenodd"
							></path>
							</svg>
						</button>
						</div>
					</form>
				</div>
				<div>
			</div>
		</nav>
	</header>


	<div id="content" class="flex-grow site-content">

		<?php if ( is_front_page() ) { ?>
			<section class="text-white bg-gray-900">
				<div class="max-w-screen-xl px-4 py-32 mx-auto lg:h-screen lg:items-center lg:flex">
					<div class="max-w-3xl mx-auto text-center">
					<h1 class="text-3xl font-extrabold text-transparent sm:text-5xl bg-clip-text bg-gradient-to-r from-green-300 via-blue-500 to-purple-600">
						Tailpress + Hyper UI

						<span class="sm:block">
						Headstart for your WP Theme
						</span>
					</h1>

					<p class="max-w-xl mx-auto mt-4 sm:leading-relaxed sm:text-xl">
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus numquam ea!
					</p>

					<div class="flex flex-wrap justify-center gap-4 mt-8">
						<a class="block w-full px-12 py-3 text-sm font-medium text-white bg-blue-600 border border-blue-600 rounded sm:w-auto active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring" href="/get-started">
						Get Started
						</a>

						<a class="block w-full px-12 py-3 text-sm font-medium text-white border border-blue-600 rounded sm:w-auto hover:bg-blue-600 active:bg-blue-500 focus:outline-none focus:ring" href="/about">
						Learn More
						</a>
					</div>
					</div>
				</div>
			</section>
		<?php } ?>

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
