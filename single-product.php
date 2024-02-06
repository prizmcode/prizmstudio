<?php get_header(); ?>

<div>

    <?php if ( have_posts() ) : ?>

    <?php
		while ( have_posts() ) :
			the_post();
			?>

<?php 
    if ( has_post_thumbnail() )  {
        $thumb = get_the_post_thumbnail_url();
    } else {
        $thumb = '';
    }
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>




        <div class="entry-content container mx-auto p-5 lg:p-10 lg:px-32 bg-white">

            
            <?php the_title( sprintf( '<h1 class="entry-title text-4xl md:text-5xl lg:text-6xl font-Lato leading-loose"><a href="%s" class="p-3 leading-loose bg-opacity-80" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

            <div class="text-black font-Lato p-5 text-2xl lg:text-4xl relative left-0 z-40 leading-10">
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

        </div>

    </article>



    <?php endwhile; ?>

    <?php endif; ?>

</div>

<?php
get_footer();