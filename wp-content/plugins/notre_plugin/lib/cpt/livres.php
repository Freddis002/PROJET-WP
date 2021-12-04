<?php
add_action('init', function () {
	// Déclaration d'un type de contenu personnalisé de type Évènement
	register_post_type('livres', [
		'labels' => [
			'name' => 'Livres',
			'singular_name' => 'Livres',
			'menu_name' => 'Livres'
		],
		'rewrite' => ['slug' => 'livres'],
		'has_archive' => true,
		'hierarchical'        => false, // de type chronologique
		'public'              => true,
		'supports' => ['title', 'editor', 'thumbnail']
	]);

	// Déclaration d'une classification de type catégorie d'évènement
	register_taxonomy(
		'livre-category',
		['livres'],
		[
			'labels' => [
				'name' => 'Catégories de livres',
				'singular_name' => 'Catégorie de livres',
				'menu_name' => 'Catégories'
			],
			'hierarchical' => true, // de type hierarchique
			'public' => true,
		],
	);
});