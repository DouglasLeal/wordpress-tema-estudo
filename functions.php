<?php

function exemplo_recursos_tema(){
	add_theme_support( 'post-thumbnails' );
	add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'exemplo_recursos_tema');

function exemplo_tamanho_excerpt() { return 50; }
add_filter("excerpt_length", "exemplo_tamanho_excerpt");

function exemplo_register_nav_menu(){
	register_nav_menu('menu_principal', "Menu Principal");
}

add_action('after_setup_theme', 'exemplo_register_nav_menu');

function exemplo_register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'exemplo_register_navwalker' );