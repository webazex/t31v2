<?php
add_action( 'after_setup_theme', function(){
	add_theme_support( 'custom-background' );
	//add_theme_support( 'custom-header' );
	add_theme_support( 'menus' );
	// title
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	// возможность загрузить картинку логотипа в админке
	add_theme_support( 'custom-logo', [
		'height'      => 190,
		'width'       => 190,
		'flex-width'  => false,
		'flex-height' => false,
		'header-text' => '',
	] );
});