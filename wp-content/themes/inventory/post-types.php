<?php

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Blocks', // основное название для типа записи
			'singular_name'      => 'Block', // название для одной записи этого типа
			'add_new'            => 'Add block', // для добавления новой записи
			'add_new_item'       => 'Add block', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit block', // для редактирования типа записи
			'new_item'           => 'New block', // текст новой записи
			'view_item'          => 'View block', // для просмотра записи этого типа.
			'search_items'       => 'Search block', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Blocks', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'enrich_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Enrich, Transform', // основное название для типа записи
			'singular_name'      => 'Enrich, Transform', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Enrich Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
//		'capability_type' => 'post',
//		'capabilities' => [
//			'create_posts' => false,
//			'delete_posts' => false,
//			'delete_published_posts' => false,
//			'delete_private_posts' => false,
//		],
//		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'unique_value_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Unique Value', // основное название для типа записи
			'singular_name'      => 'Unique Value', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Unique Value Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'what_we_know_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'What We Know', // основное название для типа записи
			'singular_name'      => 'What We Know', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'What We Know Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'technology_now_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Technology Now', // основное название для типа записи
			'singular_name'      => 'Technology Now', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Technology Now Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'enterprise_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Where Enterprise', // основное название для типа записи
			'singular_name'      => 'Where Enterprise', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Where Enterprise Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'value_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Value We Deliver', // основное название для типа записи
			'singular_name'      => 'Value We Deliver', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Value We Deliver Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'problems_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Problems We Solve', // основное название для типа записи
			'singular_name'      => 'Problems We Solve', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Problems We Solve Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'platform_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Platform and Solutions', // основное название для типа записи
			'singular_name'      => 'Platform and Solutions', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Platform and Solutions Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'features_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Key features', // основное название для типа записи
			'singular_name'      => 'Key features', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Key Features Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'solution_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Solutions for FinTech', // основное название для типа записи
			'singular_name'      => 'Solutions for FinTech', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Solutions for FinTech Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'business_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Business Model', // основное название для типа записи
			'singular_name'      => 'Business Model', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Business Model Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'success_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Success Story', // основное название для типа записи
			'singular_name'      => 'Success Story', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Success Story Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'invest_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Why Invest', // основное название для типа записи
			'singular_name'      => 'Why Invest', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Why Invest Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'investory_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Org Chart', // основное название для типа записи
			'singular_name'      => 'Org Chart', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Org Chart Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'market_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Market Overview', // основное название для типа записи
			'singular_name'      => 'Market Overview', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Market Overview Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'fintech_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'FinTech Venture', // основное название для типа записи
			'singular_name'      => 'FinTech Venture', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'FinTech Venture Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'start_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Start New Era', // основное название для типа записи
			'singular_name'      => 'Start New Era', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Start New Era Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'key_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Key Leadership', // основное название для типа записи
			'singular_name'      => 'Key Leadership', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Key Leadership Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'global_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Global Data', // основное название для типа записи
			'singular_name'      => 'Global Data', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Global Data Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'project_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Success Projects', // основное название для типа записи
			'singular_name'      => 'Success Projects', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Success Projects Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
//		'capability_type' => 'post',
//		'capabilities' => [
//			'create_posts' => false,
//			'delete_posts' => false,
//			'delete_published_posts' => false,
//			'delete_private_posts' => false,
//		],
//		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'architecture_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Architecture', // основное название для типа записи
			'singular_name'      => 'Architecture', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Architecture Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'table_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Tables', // основное название для типа записи
			'singular_name'      => 'Tables', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Tables Blocks', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
//		'capability_type' => 'post',
//		'capabilities' => [
//			'create_posts' => false,
//			'delete_posts' => false,
//			'delete_published_posts' => false,
//			'delete_private_posts' => false,
//		],
//		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'footer_block', [
		'label'  => null,
		'labels' => [
			'name'               => 'Footer', // основное название для типа записи
			'singular_name'      => 'Footer', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Footer Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
//		'capability_type' => 'post',
//		'capabilities' => [
//			'create_posts' => false,
//			'delete_posts' => false,
//			'delete_published_posts' => false,
//			'delete_private_posts' => false,
//		],
//		'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}