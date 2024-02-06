</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>




<?php 
    global $post;
    if (!is_home()) { ?>

<div class="bg-gradient-to-b from-black to-gray-900 p-5 lg:p-10 z-50 relative">
    <div class="container mx-auto">
        <h2 class="font-Lato text-white text-2xl pt-0 pb-5">Latest from the blog</h2>


        <?php
        get_template_part('/template-parts/recent-posts'); ?>
    </div>
</div>
<?php  }  ?>


<div class="bg-gradient-to-b from-black to-gray-800 p-5 lg:p-10">
    <footer id="colophon" class="site-footer container mx-auto" role="contentinfo">
        <div class="z-40 md:flex align-top">""

            <div class="mr-5">
                <img class="rounded-full m-5 w-32" src="<?php echo get_theme_file_uri('images/Crystal.jpeg'); ?>" />
            </div>

            <div class="md:px-5 text-gray-400">
                <h2 class="font-Lato text-xl">Hi, I'm Crystal</h2>


                <p>I like to create meaningful, functional, and beautiful things with code, clay, wood, watercolor, and grit.</p>

                <?php
				wp_nav_menu(
					array(
						'container_id'    => 'secondary-menu',
						'theme_location'  => 'secondary',
                        'container_class' => 'z-40 lg:mt-0 lg:block py-10',
						'menu_class'      => 'lowercase',
					)
				);
				?>


            </div>
            <div class="my-5">
            <a href="/"><img class="w-32" src="<?php echo get_theme_file_uri('images/prizm-logo-no-words.png'); ?>" /></a>
            </div>

        </div>

        <hr class="my-5 border-gray-700" />
        <p class="text-gray-400 text-sm">&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?></p>
        <?php do_action( 'tailpress_footer' ); ?>


    </footer>
</div>
</div>

<?php wp_footer(); ?>

</body>

</html>