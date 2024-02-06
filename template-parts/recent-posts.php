<?php 
// Define our WP Query Parameters
$the_query = new WP_Query( 'posts_per_page=4' ); ?>

<div class="text-white grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 justify-between">

    <?php 
// Start our WP Query
while ($the_query -> have_posts()) : $the_query -> the_post(); 
// Display the Post Title with Hyperlink
?>


    <div class="bg-cover bg-center bg-no-repeat relative"
        style="background-image: url(<?php echo the_post_thumbnail_url('medium');?>)"><a
            class="text-sm md:base lg:text-lg uppercase text-white" href="<?php the_permalink() ?>"><img class="w-full"
                src="<?php echo get_theme_file_uri('images/transparent.png'); ?>" />
            <div class="absolute top-12 bg-black opacity-60 p-3 md:p-5"><?php the_title(); ?></div>
        </a></div>


    <?php 
// Repeat the process and reset once it hits the limit
endwhile;
wp_reset_postdata();
?>

</div>