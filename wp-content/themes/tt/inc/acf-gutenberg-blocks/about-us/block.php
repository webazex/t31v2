<?php
add_action('acf/init', function (){
	$data = [
		'name' => 'about-us',
		'title' => __('About us', 'tt'),
		'description' => __('About us, section', 'tt'),
		'category' => 'embed',
		'icon' => 'book-alt',
		'keywords' => ['about', 'About', 'about us', 'про нас', 'о нас'],
		'post_types' => ['page'],
		'mode' => 'edit',
		'align' => 'full',
		'render_template' => getGbSection('about-us'),
		'supports' => [
			'align' => false,
			'multiple' => true,
			'mode' => true
		]
	];
	acf_register_block_type($data);
});