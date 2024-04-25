<?php
add_action('acf/init', function (){
	$data = [
		'name' => 'homepage-welcome',
		'title' => __('Frontpage welcome', 'dwt'),
		'description' => __('Welcome section for homepage'),
		'category' => 'embed',
		'icon' => 'book-alt',
		'keywords' => ['Welcome', 'welcome', 'головна', 'Головна', 'Главная', 'главная'],
		'post_types' => ['page'],
		'mode' => 'edit',
		'align' => 'full',
		'render_template' => getGbSection('front-page-welcome'),
		'enqueue_assets' => function(){
			wp_enqueue_style( 'welcome-frontpage', get_template_directory_uri() .'/inc/acf-gutenberg-blocks/front-page-welcome/welcome.css' );
		},
		'supports' => [
			'align' => false,
			'multiple' => false,
			'mode' => true
		]
	];
	acf_register_block_type($data);
});