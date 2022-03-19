<?php 
	$phone_number 	= 	get_theme_mod( 'phone_number' );
	$email 			= 	sanitize_email( get_theme_mod( 'email_address' ) );
	$facebook_url 	= 	get_theme_mod( 'facebook_url' );
	$instagram_url 	= 	get_theme_mod( 'instagram_url' );
?>

<section 
    class="fixed inset-y-0 right-0 flex" 
    x-show="open" 
    @click.away="open = false" 
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="translate-x-full" 
    style="z-index: 999999;" 
    x-cloak>
    <div class="w-screen sm:max-w-xs">
        <div class="flex flex-col justify-between h-full bg-white divide-y divide-gray-200 shadow-xl">
        <div class="space-y-6 ">
            <header class="p-8 bg-primary">
            <div class="flex items-center justify-between space-x-3">
                <span class="text-2xl font-bold text-white">MENU</span>

                <button aria-label="Close menu" class="p-2 text-white bg-white rounded bg-opacity-10" type="button" @click="open = false">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                </button>
            </div>
            </header>

            <div class="flex-1 p-8">

                <nav>
                    <?php
                    wp_nav_menu(
                        array(
                            'container_id'    => 'primary',
                            'container_class' => 'text-xl',
                            'menu_class'      => ' ',
                            'theme_location'  => 'mobile',
                            'li_class'        => 'my-3',
                            'fallback_cb'     => false,
                            'depth'           => 2,
                        )
                    );
                    ?>
                </nav>

                <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
                    <div class="flex flex-row items-center mt-10 gap-x-2">
                        <input focus class="w-5/6 search-field" type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Search..."/>
                        <button type="submit" class="search-submit bg-primary" name="submit" value="<?php _e('Search');?>"  aria-label="search"><i class="fa fa-search" alt="search"></i></button>
                    </div>
                </form>

                <ul class="mt-12 text-xl font-medium text-primary">
                    <li>
                    <a href="tel: <?= esc_url($phone_number); ?>"><?= $phone_number; ?></a>
                    </li>

                    <li class="mt-2">
                    <a href="mailto: <?= $email; ?>"><?= $email; ?></a>
                    </li>
                </ul>

                <!-- Facebook Icon -->
                <div class="flex mt-6 space-x-3">
                    <a href="<?= get_theme_mod( 'facebook_url' );?>" class="p-2 border border-blue-600 border-opacity-25 rounded-full text-primary">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                        fill-rule="evenodd"
                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                        clip-rule="evenodd"
                        />
                    </svg>
                    </a>

                    <!-- Instagram Icon -->
                    <a href="<?= get_theme_mod( 'instagram_url' );?>" class="p-2 border border-opacity-25 rounded-full text-primary border-primary">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                        fill-rule="evenodd"
                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                        clip-rule="evenodd"
                        />
                    </svg>
                    </a>

                </div>
     
        </div>

    </div>

        <!-- <div class="p-6">
            <a
            href=""
            class="relative block w-full px-8 py-4 overflow-hidden text-center transition-colors border-2 text-peach border-peach hover:text-white group"
            >
            <span
                class="absolute inset-0 transition-transform origin-left transform scale-x-0 bg-peach group-hover:scale-x-100"
            >
            </span>
            
            <span class="relative text-xl font-medium tracking-widest uppercase">Donate</span>
            </a>
        </div>		 -->
        
        </div>
    </div>
            
</section>
