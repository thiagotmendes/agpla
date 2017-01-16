<?php
/* ----------------------------------------------------- */
/* Post Types */
/* ----------------------------------------------------- */
/* Criando um Post Type Personalizado */
add_action('init', 'produtos_register');
function produtos_register() {
	 $labels = array(
			'name' => 'Projetos',
			'singular_name' => 'Post',
			'all_items' => 'Todos',
			'add_new' => 'Adicionar',
			'add_new_item' => 'Adicionar',
			'edit_item' => 'Editar ',
			'new_item' => 'Novo',
			'view_item' => 'Ver',
			'search_items' => 'Procurar',
			'not_found' =>  'Nada encontrado',
			'not_found_in_trash' => 'Nada encontrado no lixo',
			'parent_item_colon' => '',
			'menu_icon'   => 'teste',
	);
	$args = array(
 			'menu_icon' => 'dashicons-portfolio',
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'hierarchical' => true,
			'has_archive' => true,
			'taxonomy' => array('categoria-projeto'),
			'menu_position' => 6,
			'supports' => array('title','editor','comments','thumbnail','category','gallery','page-attributes'),
			'rewrite' => array('slug' => 'projeto')
	  );
	register_post_type('projeto',$args);
}


/* -----------------------------------------------------
/* Taxonomias */
/* -----------------------------------------------------
/* Criando uma Taxonomia Personalizada */
register_taxonomy("categoria-projeto", array("projeto"),
	array(
		"hierarchical" => true,
		"label" => "categoria",
		"singular_label" => "categoria projeto",
		'rewrite' => array( 'slug' => 'categoria-projeto' )
	)
);
