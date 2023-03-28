<?php

function exemplo_recursos_tema(){
	add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'exemplo_recursos_tema');