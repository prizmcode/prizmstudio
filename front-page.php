<?php get_header(); ?>

        <div>

    <?php if ( have_posts() ) : ?>

    <?php
		while ( have_posts() ) :
			the_post();
			?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php 
    if ( has_post_thumbnail() )  {
        $thumb = get_the_post_thumbnail_url();
    } else {
        $thumb = '';
    }
    ?>


        <div class="entry-header mb-4 relative z-30 flex flex-col justify-end bg-cover bg-no-repeat bg-center h-screen" style="background-image: url(<?php echo $thumb; ?>);">
            <div style="height: 30vh">
            </div>
            <div style="height: 50vh" class="bg-gradient-to-r from-gray-700">
                <?php the_title( sprintf( '<h1 class="entry-title text-4xl md:text-5xl lg:text-6xl font-Lato leading-loose my-5"><a href="%s" class="p-3 leading-loose bg-opacity-80 bg-yellow-400 text-white" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

            </div>
        </div>


        <div class="entry-content container mx-auto p-5 lg:p-10 lg:px-32">

            <div class="bg-[#22d3ee] text-black font-Lato p-5 text-2xl lg:text-4xl relative left-0 z-40 leading-10"
                style="margin-top:-6rem">
                <?php echo get_the_excerpt(); ?>
            </div>

            
            <p class="pt-5"><time datetime="<?php # echo get_the_date( 'c' ); ?>" itemprop="datePublished"
                    class="text-sm text-gray-700 my-5"><?php # echo get_the_date(); ?></time></p>

            <?php the_content();

		
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


            <?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

        </div>

    </article>



    <?php endwhile; ?>

    <?php endif; ?>

</div>


    <?php
get_footer();

?>