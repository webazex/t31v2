<?php
function themeScripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri().'/src/js/jQuery3-7-1.min.js', [], '', [
		'in_footer' => true,
	]);
	wp_enqueue_script( 'jquery' );
	if (is_single() AND is_singular(['works'])){
		wp_enqueue_script('slick-single-works', get_template_directory_uri() . '/inc/acf-gutenberg-blocks/front-page-slider/slick/slick.min.js', ['jquery']);
	}
    wp_enqueue_script('browser', get_template_directory_uri().'/src/js/browser.min.js', ['jquery'], false, [
        'in_footer' => true
    ]);
    wp_enqueue_script('breakpoints', get_template_directory_uri().'/src/js/breakpoints.min.js', ['jquery', 'browser'], false, [
        'in_footer' => true
    ]);
    wp_enqueue_script('util', get_template_directory_uri().'/src/js/util.js', ['jquery', 'browser', 'breakpoints'], false, [
        'in_footer' => true
    ]);
    wp_enqueue_script('main', get_template_directory_uri().'/src/js/main.js', ['jquery', 'browser', 'breakpoints', 'util'], false, [
        'in_footer' => true
    ]);
}
add_action( 'wp_enqueue_scripts', 'themeScripts', 11 );

function themeStyles() {
    wp_enqueue_style('slick-single',get_template_directory_uri() .'/src/css/main.css');
	if (is_single() AND is_singular(['works'])){
		wp_enqueue_style('slick-single',get_template_directory_uri() .'/inc/acf-gutenberg-blocks/front-page-slider/slick/slick.css');
		wp_enqueue_style('slick-theme-single',get_template_directory_uri() .'/inc/acf-gutenberg-blocks/front-page-slider/slick/slick-theme.css');
	}
}
add_action( 'wp_enqueue_scripts', 'themeStyles' );