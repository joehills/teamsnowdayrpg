<?php

function tsdrpg_chapters() {

	$labels = array(
		'name'                       => _x( 'Chapters', 'Taxonomy General Name', 'tsdrpg' ),
		'singular_name'              => _x( 'Chapter', 'Taxonomy Singular Name', 'tsdrpg' ),
		'menu_name'                  => __( 'Chapter', 'tsdrpg' ),
		'all_items'                  => __( 'All Chapters', 'tsdrpg' ),
		'parent_item'                => __( 'Parent Chapter', 'tsdrpg' ),
		'parent_item_colon'          => __( 'Parent Chapter:', 'tsdrpg' ),
		'new_item_name'              => __( 'New Chapter Name', 'tsdrpg' ),
		'add_new_item'               => __( 'Add New Chapter', 'tsdrpg' ),
		'edit_item'                  => __( 'Edit Chapter', 'tsdrpg' ),
		'update_item'                => __( 'Update Chapter', 'tsdrpg' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'tsdrpg' ),
		'search_items'               => __( 'Search Chapters', 'tsdrpg' ),
		'add_or_remove_items'        => __( 'Add or remove chapters', 'tsdrpg' ),
		'choose_from_most_used'      => __( 'Choose from the most used chapters', 'tsdrpg' ),
		'not_found'                  => __( 'Not Found', 'tsdrpg' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'tsdrpg_chapter', array( 'post', ' page', 'tsdrpg_chapter_intro', ' ' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_chapters', 0 );

// Register Custom Taxonomy
function tsdrpg_crit_types() {

	$labels = array(
		'name'                       => _x( 'Crit Types', 'Taxonomy General Name', 'tsdrpg' ),
		'singular_name'              => _x( 'Crit Type', 'Taxonomy Singular Name', 'tsdrpg' ),
		'menu_name'                  => __( 'Crit Types', 'tsdrpg' ),
		'all_items'                  => __( 'All Crit Types', 'tsdrpg' ),
		'parent_item'                => __( 'Parent Crit Type', 'tsdrpg' ),
		'parent_item_colon'          => __( 'Parent Crit Type:', 'tsdrpg' ),
		'new_item_name'              => __( 'New Crit Type', 'tsdrpg' ),
		'add_new_item'               => __( 'Add New Crit Type', 'tsdrpg' ),
		'edit_item'                  => __( 'Edit Crit Type', 'tsdrpg' ),
		'update_item'                => __( 'Update Crit Type', 'tsdrpg' ),
		'separate_items_with_commas' => __( 'Separate Crit Types with commas', 'tsdrpg' ),
		'search_items'               => __( 'Search Crit Types', 'tsdrpg' ),
		'add_or_remove_items'        => __( 'Add or Remove Crit Types', 'tsdrpg' ),
		'choose_from_most_used'      => __( 'Choose from the most used Crit Types', 'tsdrpg' ),
		'not_found'                  => __( 'Not Found', 'tsdrpg' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => false,
	);
	register_taxonomy( 'tsdrpg_crit_types', array( 'post', ' page', ' tsdrpg_spell', ' tsdrpg_weapon' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_crit_types', 0 );

// Register Custom Taxonomy
function tsdrpg_dice() {

	$labels = array(
		'name'                       => _x( 'Dice', 'Taxonomy General Name', 'tsdrpg' ),
		'singular_name'              => _x( 'Die', 'Taxonomy Singular Name', 'tsdrpg' ),
		'menu_name'                  => __( 'Taxonomy', 'tsdrpg' ),
		'all_items'                  => __( 'All Dice', 'tsdrpg' ),
		'parent_item'                => __( 'Parent Die', 'tsdrpg' ),
		'parent_item_colon'          => __( 'Parent Die:', 'tsdrpg' ),
		'new_item_name'              => __( 'New Die Name', 'tsdrpg' ),
		'add_new_item'               => __( 'Add New Die', 'tsdrpg' ),
		'edit_item'                  => __( 'Edit Die', 'tsdrpg' ),
		'update_item'                => __( 'Update Die', 'tsdrpg' ),
		'separate_items_with_commas' => __( 'Separate dice with commas', 'tsdrpg' ),
		'search_items'               => __( 'Search Dice', 'tsdrpg' ),
		'add_or_remove_items'        => __( 'Add or remove Dice', 'tsdrpg' ),
		'choose_from_most_used'      => __( 'Choose from the most used Dice', 'tsdrpg' ),
		'not_found'                  => __( 'Not Found', 'tsdrpg' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'tsdrpg_dice', array( 'post', ' page', ' ' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_dice', 0 );

// Register Custom Taxonomy
function tsdrpg_place_types() {

	$labels = array(
		'name'                       => _x( 'Place Types', 'Taxonomy General Name', 'tsdrpg' ),
		'singular_name'              => _x( 'Place Type', 'Taxonomy Singular Name', 'tsdrpg' ),
		'menu_name'                  => __( 'Place Types', 'tsdrpg' ),
		'all_items'                  => __( 'All Place Types', 'tsdrpg' ),
		'parent_item'                => __( 'Parent Place Type', 'tsdrpg' ),
		'parent_item_colon'          => __( 'Parent Place Type:', 'tsdrpg' ),
		'new_item_name'              => __( 'New Place Type', 'tsdrpg' ),
		'add_new_item'               => __( 'Add New Place Type', 'tsdrpg' ),
		'edit_item'                  => __( 'Edit Place Type', 'tsdrpg' ),
		'update_item'                => __( 'Update Place Type', 'tsdrpg' ),
		'separate_items_with_commas' => __( 'Separate Place Types with commas', 'tsdrpg' ),
		'search_items'               => __( 'Search Place Types', 'tsdrpg' ),
		'add_or_remove_items'        => __( 'Add or Remove Place Types', 'tsdrpg' ),
		'choose_from_most_used'      => __( 'Choose from the most used Place Types', 'tsdrpg' ),
		'not_found'                  => __( 'Not Found', 'tsdrpg' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => false,
	);
	register_taxonomy( 'tsdrpg_place_types', array( 'post', ' page', ' tsdrpg_place' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_place_types', 0 );

// Register Custom Taxonomy
function tsdrpg_spell_schools() {

	$labels = array(
		'name'                       => _x( 'Spell Schools', 'Taxonomy General Name', 'tsdrpg' ),
		'singular_name'              => _x( 'Spell School', 'Taxonomy Singular Name', 'tsdrpg' ),
		'menu_name'                  => __( 'Spell Schools', 'tsdrpg' ),
		'all_items'                  => __( 'All Schools', 'tsdrpg' ),
		'parent_item'                => __( 'Parent School', 'tsdrpg' ),
		'parent_item_colon'          => __( 'Parent School:', 'tsdrpg' ),
		'new_item_name'              => __( 'New School Name', 'tsdrpg' ),
		'add_new_item'               => __( 'Add New School', 'tsdrpg' ),
		'edit_item'                  => __( 'Edit School', 'tsdrpg' ),
		'update_item'                => __( 'Update School', 'tsdrpg' ),
		'separate_items_with_commas' => __( 'Separate Schools with commas', 'tsdrpg' ),
		'search_items'               => __( 'Search Schools', 'tsdrpg' ),
		'add_or_remove_items'        => __( 'Add or Remove Schools', 'tsdrpg' ),
		'choose_from_most_used'      => __( 'Choose from the most used Schools', 'tsdrpg' ),
		'not_found'                  => __( 'Not Found', 'tsdrpg' ),
	);
	$rewrite = array(
		'slug'                       => 'schools',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'tsdrpg_spell_schools', array( 'post', ' page', ' tsdrpg_spell', ' tsdrpg_class' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_spell_schools', 0 );

// Register Custom Taxonomy
function tsdrpg_sizes() {

	$labels = array(
		'name'                       => _x( 'Sizes', 'Taxonomy General Name', 'tsdrpg' ),
		'singular_name'              => _x( 'Size', 'Taxonomy Singular Name', 'tsdrpg' ),
		'menu_name'                  => __( 'Sizes', 'tsdrpg' ),
		'all_items'                  => __( 'All Sizes', 'tsdrpg' ),
		'parent_item'                => __( 'Parent Size', 'tsdrpg' ),
		'parent_item_colon'          => __( 'Parent Size:', 'tsdrpg' ),
		'new_item_name'              => __( 'New Size Name', 'tsdrpg' ),
		'add_new_item'               => __( 'Add New Size', 'tsdrpg' ),
		'edit_item'                  => __( 'Edit Size', 'tsdrpg' ),
		'update_item'                => __( 'Update Size', 'tsdrpg' ),
		'separate_items_with_commas' => __( 'Separate Sizes with commas', 'tsdrpg' ),
		'search_items'               => __( 'Search Sizes', 'tsdrpg' ),
		'add_or_remove_items'        => __( 'Add or Remove Sizes', 'tsdrpg' ),
		'choose_from_most_used'      => __( 'Choose from the most used Sizes', 'tsdrpg' ),
		'not_found'                  => __( 'Not Found', 'tsdrpg' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'tsdrpg_sizes', array( 'post', ' page', ' tsdrpg_species', ' tsdrpg_weapon', ' tsdrpg_item', ' tsdrpg_armor' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_sizes', 0 );

// Register Custom Taxonomy
function tsdrpg_weapon_types() {

	$labels = array(
		'name'                       => _x( 'Weapon Types', 'Taxonomy General Name', 'tsdrpg' ),
		'singular_name'              => _x( 'Weapon Type', 'Taxonomy Singular Name', 'tsdrpg' ),
		'menu_name'                  => __( 'Weapon Types', 'tsdrpg' ),
		'all_items'                  => __( 'All Types', 'tsdrpg' ),
		'parent_item'                => __( 'Parent Type', 'tsdrpg' ),
		'parent_item_colon'          => __( 'Parent Type:', 'tsdrpg' ),
		'new_item_name'              => __( 'New Type Name', 'tsdrpg' ),
		'add_new_item'               => __( 'Add New Type', 'tsdrpg' ),
		'edit_item'                  => __( 'Edit Type', 'tsdrpg' ),
		'update_item'                => __( 'Update Type', 'tsdrpg' ),
		'separate_items_with_commas' => __( 'Separate Types with commas', 'tsdrpg' ),
		'search_items'               => __( 'Search Weapon Types', 'tsdrpg' ),
		'add_or_remove_items'        => __( 'Add or Remove Types', 'tsdrpg' ),
		'choose_from_most_used'      => __( 'Choose from the most used Types', 'tsdrpg' ),
		'not_found'                  => __( 'Not Found', 'tsdrpg' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'tsdrpg_weapon_types', array( 'post', ' page', ' tsdrpg_weapon' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_weapon_types', 0 );

// CMB 2

