<?php /** * Template Name: Shop Template */

 get_header(); ?>

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

		<div class="entry-header mb-4 relative z-30 flex flex-col justify-end md:bg-fixed bg-cover bg-no-repeat bg-center" style="background-image: url(<?php echo $thumb; ?>);">
            <div style="height: 15vh">
            </div>
            <div class="bg-gradient-to-r from-gray-700">
                <?php the_title( sprintf( '<h1 class="entry-title text-4xl md:text-5xl lg:text-6xl font-Lato leading-loose my-5"><a href="%s" class="p-3 leading-loose bg-opacity-80 bg-yellow-300 text-white" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

            </div>
        </div>

	<?php if ( is_search() || is_archive() ) : ?>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>

	<?php else : ?>

		<div class="entry-content">

		<div class="entry-content container mx-auto p-5 lg:p-10 lg:px-32">

           
			
			<!--
			<p class="pt-5"><time datetime="<?php # echo get_the_date( 'c' ); ?>" itemprop="datePublished"
                    class="text-sm text-gray-700 my-5"><?php # echo get_the_date(); ?></time></p> -->

			<?php
			
			/* translators: %s: Name of current post */
			the_content(
				sprintf(
					__( 'Continue reading %s', 'tailpress' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				)
			);

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

<!-- <time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-gray-700">Published <?php echo get_the_date(); ?></time> -->
		</div>

	<?php endif; ?>

</article>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();
