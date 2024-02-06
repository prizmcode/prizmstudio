<?php get_header(); ?>


<div class="container mx-auto p-5">
    <h1 class="bg-yellow-400 p-5">Blog Roll ///</h1>

    <div class="grid grid-cols-2 lg:grid-cols-3 gap-5 py-5">
        <?php if ( have_posts() ) : ?>
        <?php
		while ( have_posts() ) :
			the_post();
			?>


        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="bg-cover bg-center bg-no-repeat relative"
        style="background-image: url(<?php echo the_post_thumbnail_url('medium');?>)"><a
            class="text-sm md:base lg:text-lg uppercase text-white" href="<?php the_permalink() ?>"><img class="w-full"
                src="<?php echo get_theme_file_uri('images/transparent.png'); ?>" />
            <div class="absolute top-12 bg-black opacity-60 p-3 md:p-5"><?php the_title(); ?></div>
        </a></div>


            <div class="entry-content">


                <?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
			?>


            </div>



        </article>

        <?php endwhile; ?>

        <?php endif; ?>
    </div>

</div>

<?php
get_footer();