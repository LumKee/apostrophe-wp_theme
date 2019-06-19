<?php

/*** Ajouter un script ou un fichier CSS de la bonne façon */
function wpdocs_theme_name_scripts() {
    
    wp_register_style('main-style', get_template_directory_uri().'/main.css', array(), true);
    wp_enqueue_style('main-style');
    
    wp_register_style('bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), true);
    wp_enqueue_style('bootstrap-style');
    
    wp_enqueue_script( 'javascript', get_template_directory_uri() . '/main.js', array('jquery') );

}

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

register_nav_menus( array ('menu-principal' => 'Menu principal') );


define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images' );
