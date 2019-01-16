<!DOCTYPE html>
<html lang="no">
<head>
  <meta charset="UTF-8"/>
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>


  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>> 

  	<header id="header" class="center clearfix">
  	<div><h1>hello git</h1></div>
		<a href="<?php echo home_url(); ?>" class="logo_link left">
			<img src="<?php if (get_theme_mod( 'logo' )) : echo get_theme_mod( 'logo'); else: echo get_template_directory_uri().'/build/images/logo.png'; endif; ?>" class="logo"/>
 		</a><!--.logo_link -->
		
		<div class="right header_text">
			<?php
				if ( function_exists('dynamic_sidebar') )
					dynamic_sidebar('header_text');
			?>	
		</div><!--.header_text -->

	</header><!-- #header -->

    



	