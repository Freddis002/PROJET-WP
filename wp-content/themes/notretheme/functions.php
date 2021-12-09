<?php

function notretheme_assets() {
    wp_enqueue_style('twentytwenty/app_css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('notretheme/app.css', get_stylesheet_directory_uri() . '/assets/css/app.css', [], '1.0');
}

add_filter('the_content','formater_texte' , 90);

function formater_texte($content) {
    $content = str_replace('WordPress','<strong>WordPress</strong>', $content);
    return $content;
}

// Pour le css
add_action('wp_enqueue_scripts', 'notretheme_assets');	

// Pour le menu
add_action('init', function() {
    register_nav_menu('menu', 'Menu');
});


// Pour mettre image en avant

add_action('after_setup_theme', function() {
    add_theme_support('post-thumbnails');
}
);

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

function my_related_livres_block($ids= []) {
    
    $id = $id === 0 ? get_the_ID() : $id;
    $terms = get_the_terms(get_the_ID(), 'livre-category');
    
    if(!$terms) {
        return false;
    }
    
    $term = $terms[0]->slug;
    
    
    $args = [
        'post_type' => 'livre',
        'posts_per_page' =>1,
        'order_by' => 'post_date',
        'order' => 'DESC',
        'post__in' =>$ids,
        
    ];
    return new WP_Query($args);
    }

    // Mis en avant du livre
    acf_register_block_type([
        'name' => 'related-event',
        'title' => 'Livres mis en avant',
        'render_template' => get_stylesheet_directory() . '/parts/block/livres.php',
        //'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/blocks/related-event.css',
        'supports' => [
            'jsx' => true,
        ]
    ]);
    
    // Pour le menu
add_action('init', function() {
    register_nav_menu('livre-menu', 'Menu livre');
});