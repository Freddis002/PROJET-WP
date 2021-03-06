<?php

function notretheme_assets() {
    wp_enqueue_style('twentytwenty/app_css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('notretheme/app.css', get_stylesheet_directory_uri() . '/assets/css/app.css', [], '1.0');
}


// Pour le css
add_action('wp_enqueue_scripts', 'notretheme_assets');	



// Pour mettre image en avant

add_action('after_setup_theme', function() {
    add_theme_support('post-thumbnails');
}
);

function wpc_excerpt_pages() {
    add_meta_box('postexcerpt', __('Extrait'), 'post_excerpt_meta_box', 'page', 'normal', 'core');
    }
    add_action( 'admin_menu', 'wpc_excerpt_pages' );
    

// Pour le livre

/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_book_init() {
    $labels = array(
        'name'                  => _x( 'Livres', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Livres', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Livres', 'Admin Menu text', 'textdomain' ),
        
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Livres' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'livres', $args );
}

add_action( 'init', 'wpdocs_codex_book_init' );



add_image_size('livre-image', 100, 100, true);
    
    function my_related_livres_block($ids = [])
{
	$args = [
		'post_type' => 'Livres', // slug du type de contenu personnalis√©
		'posts_per_page' =>4 ,
		'orderby' => 'post_date',
		'post__in' => $ids,
        'meta_query' => array(
            array(
                'key' => 'mis_en_avant',
                'value' => '1',
            )
        )
	];

	return new WP_Query($args); // appel de la requ√®te en base de donn√©es
}

function my_related_contact_block($ids = [])
{
	$args = [
		'post_type' => 'Contact', // slug du type de contenu personnalis√©
		'post__in' => $ids,
        'meta_query' => array(
            array(
                'key' => 'adresse',
                
                'value' =>'1',
                
            ),
            array (
                'key' => 'numero_de_telephone',
                'value' => '1',
            )
        )
	];

	return new WP_Query($args); // appel de la requ√®te en base de donn√©es
}


    // Mis en avant du livre
    acf_register_block_type([
        'name' => 'related-livres',
        'title' => 'Livres mis en avant',
        'render_template' => get_stylesheet_directory() . '/parts/block/livres.php',
        //'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/blocks/related-event.css',
        'supports' => [
            'jsx' => true,
        ]
    ]);

     // Contact
     acf_register_block_type([
        'name' => 'related-contact',
        'title' => 'Contact',
        'render_template' => get_stylesheet_directory() . '/parts/block/contact.php',
        //'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/blocks/related-event.css',
        'supports' => [
            'jsx' => true,
        ]
    ]);
    
    // Pour le menu
add_action('init', function() {
    register_nav_menu('livre-menu', 'Menu livre');
});