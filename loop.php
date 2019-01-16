<div class="product clearfix">
	
	<div class="product_image left">
		<a href="<?php the_permalink(); ?>" class="small_img"><?php the_post_thumbnail('medium'); ?></a>
		<a href="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>" class="modalbox"><img class="zoom" src="<?php bloginfo('template_url') ?>/build/images/zoom.png"></a>
 	</div><!--.product_image -->
	
	<div class="product_details clearfix">
		<h3 class="product_title"><?php the_title(); ?></h3>
		<div class="excerpt"><?php the_excerpt(); ?></div>
		
		<div class="product_additional clearfix right">
			<p class="percent left"><?php echo get_post_meta($post->ID, 'sale-percentage', true); ?> %</p>
			<a class="button left" href="#">					
				<p class="button_text"><?php echo get_post_meta($post->ID, 'button-title', true); ?></p>
				<div class="border_top"></div>
			</a>
			<div class="social right">
				<script async src="https://usocial.pro/usocial/usocial.js?v=6.1.4" data-script="usocial" charset="utf-8"></script>
				<div class="uSocial-Share" data-pid="be220fe52eb863a0416dcb03305af7be" data-type="share" data-options="round-rect,style1,default,absolute,horizontal,size48,eachCounter1,counter0,nomobile" data-social="fb"></div>
			</div>

 		</div><!--.product_additional  -->

 	</div><!--.product_details -->
	
 </div><!--.product  -->

