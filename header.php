<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9217179912739802"
     crossorigin="anonymous"></script>
</head>

<body <?php body_class( 'bg-black text-gray-900 antialiased' ); ?>>

    <?php do_action( 'tailpress_site_before' ); ?>

    <div id="page">



        <?php do_action( 'tailpress_header' ); ?>

        <header class="bg-gradient-to-b from-black to-gray-800 z-50">

            <div class="lg:flex justify-between items-center text-white container mx-auto px-3">

                <div class="flex justify-between items-center">
                    <div class="flex justify-between align-content:center py-3">
                        <?php if ( has_custom_logo() ) { ?>
                        <?php the_custom_logo(); ?>
                        <?php } else {  get_template_part( 'template-parts/logo' );  } ?>
                    </div>

                    <div class="lg:hidden">
                        <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
                            <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                    <g id="icon-shape">
                                        <path
                                            d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
                                            id="Combined-Shape"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                </div>
                <?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
						'menu_class'      => 'lg:flex lg:-mx-4',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4 text-gray-400 hover:text-white lowercase font-bold',
						'fallback_cb'     => false,
					)
				);
				?>

            </div>

        </header>

        <div id="content" class="site-content bg-white">

            <!-- Start introduction -->
            <?php if ( is_front_page() ) : ?>



            <?php endif; ?>
            <!-- End introduction -->

            <?php do_action( 'tailpress_content_start' ); ?>

            <main>