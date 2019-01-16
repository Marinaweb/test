<?php 

require get_template_directory() . '/customizer.php';

// Styles ************************************************************************************
// ********************************************************************************************
function my_theme_styles() {

    wp_register_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'style' ); 
    wp_register_style( 'libs.min', get_template_directory_uri() . '/build/css/libs.min.css' );
    wp_enqueue_style( 'libs.min' ); 
    wp_register_style( 'main.min', get_template_directory_uri() . '/build/css/main.min.css' );
    wp_enqueue_style( 'main.min' ); 
}
    add_action( 'wp_enqueue_scripts', 'my_theme_styles' );


// Scripts ******************************************************************************
    // **********************************************************************************
function my_theme_scripts() {      

    wp_register_script( 'libs.min', get_template_directory_uri() . '/build/js/libs.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'libs.min' );
    wp_register_script( 'custom.min', get_template_directory_uri() . '/build/js/custom.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'custom.min' );
}

    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );


// Theme support functions********************************************************************
// ********************************************************************************************
add_theme_support( 'post-thumbnails' );


// Заменить в админке название меню Posts на Products
function edit_admin_menus() {
    global $menu;
    $menu[5][0] = 'Products'; 
}
add_action( 'admin_menu', 'edit_admin_menus' );


// Sidebars registration  ********************************************************************
// *******************************************************************************************
function register_my_widgets(){

    register_sidebar( array(
        'name' => "Text in header",
        'id' => 'header_text',
        'before_title' => '<h6>',
        'after_title' => '</h6>'
    ) );

    register_sidebar( array(
        'name' => "Text in footer",
        'id' => 'footer_text',
        'before_title' => '<h6>',
        'after_title' => '</h6>'
    ) );
  
}
add_action( 'widgets_init', 'register_my_widgets' );
