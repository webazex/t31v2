<?php
add_action('acf/init', function (){
	$data = [
		'name' => 'features',
		'title' => __('Frontpage features slider', 'tt'),
		'description' => __('Features slider section', 'tt'),
		'category' => 'embed',
		'icon' => 'book-alt',
		'keywords' => ['features', 'Features', 'slider'],
		'post_types' => ['page'],
		'mode' => 'edit',
		'align' => 'full',
		'render_template' => getGbSection('features-section'),
		'enqueue_assets' => function(){
			wp_enqueue_style( 'slider-features', get_template_directory_uri() .'/inc/acf-gutenberg-blocks/features-section/style.css' );
			wp_enqueue_style( 'slick-frontpage', get_template_directory_uri() .'/inc/acf-gutenberg-blocks/front-page-slider/slick/slick.css' );
			wp_enqueue_style( 'slick-theme-frontpage', get_template_directory_uri() .'/inc/acf-gutenberg-blocks/front-page-slider/slick/slick-theme.css' );
			wp_enqueue_script( 'slick-frontpage', get_template_directory_uri() . '/inc/acf-gutenberg-blocks/front-page-slider/slick/slick.min.js', ['jquery'], '', true );
			wp_enqueue_script( 'slider-features', get_template_directory_uri() . '/inc/acf-gutenberg-blocks/features-section/scripts.js', ['jquery', 'slick-frontpage'], '', true );
		},
		'supports' => [
			'align' => false,
			'multiple' => true,
			'mode' => true
		]
	];
	acf_register_block_type($data);
});