<?php
/**
 * Child theme functions
 */

// Charger le fichier style.css du thème parent
function oceanwp_child_enqueue_parent_style() {
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

// Ajouter un bouton de contact au menu de navigation
function contact_btn( $items, $args ) {
	$items .= '<a href="/contact" class="contact-btn">Nous contacter</a>';
	return $items;
}
add_filter( 'wp_nav_menu_items', 'contact_btn', 10, 2 );

// Charger un fichier JavaScript personnalisé
function oceanwp_child_enqueue_scripts() {
	// Assurez-vous de mettre à jour le chemin vers votre fichier JS
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/scripts/script.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_scripts' );
