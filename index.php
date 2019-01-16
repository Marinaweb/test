<?php get_header(); ?>

<div class="page_wrap center">
	<?php 
		if(have_posts() ):
			while(have_posts() ): the_post(); 
	?>
	
		<?php get_template_part("loop"); ?>

	<?php endwhile;	?>
	<?php else: ?>
	<?php endif;
		wp_reset_postdata(); 
	?>
 </div><!--.page_wrap -->

<?php get_footer(); ?>