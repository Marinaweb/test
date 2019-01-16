<?php get_header(); ?>

<div class="page_wrap">
	<?php 
		if(have_posts() ):
			while(have_posts() ): the_post(); 
	?>

	<h3><?php the_title(); ?></h3>
	<?php the_content(); ?>

	<?php endwhile;	?>
	<?php else: ?>
	<?php endif;
		wp_reset_postdata(); 
	?>
</div>

<?php get_footer(); ?>