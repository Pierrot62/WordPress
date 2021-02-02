<?php /** ** activation theme **/
// pour ajouter une feuille de style, le parametre 15 permet de faire passer cette feuille de style après les autres (10 pour les autres) 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' ,15); function theme_enqueue_styles() 
{ 
// pour fixer la feuille de style parent
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
//pour fixer la feuille de style enfant
wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/style.css' ); 
}