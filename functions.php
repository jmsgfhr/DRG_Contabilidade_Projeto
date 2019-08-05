<?php
function add_styles_and_scripts() {
    
	// all styles
    wp_enqueue_style( 'style', get_template_directory_uri() . '/reset.css');
    wp_enqueue_style( 'style1', get_template_directory_uri('style') . '/style.css', array());

	// all scripts
	wp_enqueue_script( 'jquery-3.4.1', get_template_directory_uri() . '/assets/js/jquery-3.4.1.js');
    
}
add_action( 'wp_enqueue_scripts', 'add_styles_and_scripts' );

function custom_post_type_artigo() {
	register_post_type('artigo', array(
		'label' => 'Artigo',
        'description' => 'Artigo',
        'menu_position' =>  4,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'query_var' => true,
		'supports' => array('title', 'editor'),

		'labels' => array (
			'name' => 'Artigo',
			'singular_name' => 'Artigo',
			'menu_name' => 'Artigo',
			'add_new' => 'Artigo Novo',
			'add_new_item' => 'Adicionar Novo Artigo',
			'edit' => 'Editar',
			'edit_item' => 'Editar Artigo',
			'new_item' => 'Novo Artigo',
			'view' => 'Ver Artigo',
			'view_item' => 'Ver Artigo',
			'search_items' => 'Procurar Artigo',
			'not_found' => 'Nenhum Artigo Encontrado',
			'not_found_in_trash' => 'Nenhum Artigo Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_artigo');

?>