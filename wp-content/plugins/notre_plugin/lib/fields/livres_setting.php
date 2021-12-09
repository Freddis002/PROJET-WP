<?php
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_61a0f0ab2ecae',
		'title' => 'Livres',
		'fields' => array(
			array(
				'key' => 'field_61a0f0e26c762',
				'label' => 'Référence du livre',
				'name' => 'reference_du_livre',
				'type' => 'taxonomy',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'taxonomy' => 'category',
				'field_type' => 'checkbox',
				'add_term' => 0,
				'save_terms' => 0,
				'load_terms' => 0,
				'return_format' => 'id',
				'multiple' => 0,
				'allow_null' => 0,
			),
			array(
				'key' => 'field_61a0f0ff2d707',
				'label' => 'Mis en avant',
				'name' => 'mis_en_avant',
				'type' => 'taxonomy',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'taxonomy' => 'category',
				'field_type' => 'checkbox',
				'add_term' => 1,
				'save_terms' => 0,
				'load_terms' => 0,
				'return_format' => 'id',
				'multiple' => 0,
				'allow_null' => 0,
			),
			array(
				'key' => 'field_61ab95ac0cb0a',
				'label' => 'Titre du livre',
				'name' => 'titre_du_livre',
				'type' => 'page_link',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => '',
				'taxonomy' => '',
				'allow_null' => 0,
				'allow_archives' => 1,
				'multiple' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'livres',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));
	
	endif;		
?>