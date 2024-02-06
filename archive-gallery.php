<?php get_header(); ?>

	<div class="grid grid-cols-4 gap-5 pt-20 pb-10 container mx-auto">

	<?php if ( have_posts() ) : ?>
        
      <?php
		while ( have_posts() ) :
			the_post();
			?>

    <div class="h-80 bg-cover bg-no-repeat bg-center" style="background-image: url(<?php
                $image = get_field('gallery-image');
                echo $image['url'];  ?>)"></div>

<?php endwhile; ?>

        
      </div>
   
    </div>

		
        </div>

	<?php endif; ?>




<?php
get_footer();
