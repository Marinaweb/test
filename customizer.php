<?php 
function my_customize_register( $wp_customize ) {
	


// 	****************** logo image ************************************

	$wp_customize->add_section( 'logo_section' , array(
    	'title'      => __( 'Logo', 'my_happy_theme' ),
    	'priority'   => 30,
	) );
	
	$wp_customize->add_setting( 'logo' , array(
    	'default'   => get_template_directory_uri() . '/images/logo.png',
    	'transport' => 'refresh',
	) );
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_control', array(
		'label'    => __( 'Logo image', 'my_happy_theme' ),
		'section'  => 'logo_section',
		'settings' => 'logo',
	) ) );
	
	
// 	****************** logo image END ************************************	

	
}




add_action( 'customize_register', 'my_customize_register' );
?>