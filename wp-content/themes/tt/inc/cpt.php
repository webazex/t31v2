<?php
require_once get_template_directory().DS.'classes'.DS.'CPT'.DS.'CPT.php';
function registerCustomPostType()
{
	CPT::create([
		'type' => 'works',
		'name' => 'Портфоліо',
		's_name' => 'Портфоліо',
		'add_new' => 'Додати роботу',
		'add_new_item' => 'Заголовок роботи',
		'edit_item' => 'Редагувати роботу',
		'new_item' => 'Нова робота',
		'view_item' => 'Перегляд роботи',
		'search_item' => 'Знайти роботу',
		'not_found' => 'Роботу не знайдено',
		'not_found_in_trash' => 'Роботу не знайдено',
		'parent_item_colon' => '',
		'menu_name' => 'Портфоліо',
		'desc' => 'Портфоліо',
		'public' => true,
		'position' => 5,
		'icon' => '',
		'has_archive' => true,
	], 'dwt', [
		[
			'tax' => 'works-category',
			'name' => 'Категорії робіт',
			's_name' => 'Категорія роботи',
			'search_items' => 'Пошук категорії',
			'all_items' => 'Всі категорії',
			'view_item' => 'Переглянути категорію',
			'parent_item' => 'Батьківська категорія',
			'parent_item_colon' => 'Батьківська категорія',
			'edit_item' => 'Редагувати категорію',
			'update_item' => 'Оновити категорію',
			'add_new_item' => 'Додати категорію',
			'new_item_name' => 'Нова категорія',
			'menu_name' => 'Категорії робіт',
			'back_to_items' => 'Назад до категорій',
			'desc' => 'Опис категорії робіт',
			'public' => true,
			'hierarchical' => true,
			'show_admin_column' => true,
			'rest' => true,
		],
		[
			'tax' => 'works-tags',
			'name' => 'Мітки робіт',
			's_name' => 'Мітка роботи',
			'search_items' => 'Пошук міток',
			'all_items' => 'Всі мітки',
			'view_item' => 'Переглянути мітку',
			'parent_item' => '',
			'parent_item_colon' => '',
			'edit_item' => 'Редагувати мітку',
			'update_item' => 'Оновити мітку',
			'add_new_item' => 'Додати мітку',
			'new_item_name' => 'Нова мітка',
			'menu_name' => 'Мітки робіт',
			'back_to_items' => 'Назад до міток',
			'desc' => 'Опис міток робіт',
			'public' => true,
			'hierarchical' => false,
			'show_admin_column' => true,
			'rest' => true,
		],
	], [
			'name' => __('Без категорій', 'dwt'),
			'slug' => 'uncategorized-works',
			'desc' => __('Тут заходяться ті роботи яким не було присвоєно жодної категорії', 'dwt')
		]
	);

	//reviews
	CPT::create([
		'type' => 'reviews',
		'name' => 'Відгуки',
		's_name' => 'Відгук',
		'add_new' => 'Додати відгук',
		'add_new_item' => 'Заголовок відгуку',
		'edit_item' => 'Редагувати відгук',
		'new_item' => 'Новий відгук',
		'view_item' => 'Перегляд відгуку',
		'search_item' => 'Знайти відгук',
		'not_found' => 'Відгук не знайдено',
		'not_found_in_trash' => 'Відгук не знайдено',
		'parent_item_colon' => '',
		'menu_name' => 'Відгуки',
		'desc' => 'Відгуки до робіт',
		'public' => true,
		'position' => 6,
		'icon' => '',
		'has_archive' => true,
	], 'dwt'	);
	flush_rewrite_rules();
};

//registerCustomPostType();
add_action('init', 'registerCustomPostType');