<?php
add_action('acf/init', function (){
	$data = [
		'name' => 'four-posts',
		'title' => __('Four posts features', 'tt'),
		'description' => __('Four posts, four columns', 'tt'),
		'category' => 'embed',
		'icon' => 'book-alt',
		'keywords' => ['four', 'Four', 'columns', 'Columns', 'posts', 'four-columns'],
		'post_types' => ['page'],
		'mode' => 'edit',
		'align' => 'full',
		'render_template' => getGbSection('four-posts'),
		'supports' => [
			'align' => false,
			'multiple' => true,
			'mode' => true
		]
	];
	acf_register_block_type($data);
});