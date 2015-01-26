<?php
/**
 * Plugin Name: Team Snow Day RPG
 * Plugin URI:  http://pitfallsandpenguins.com
 * Description: A set of custom post types and taxonomies for RPG development
 * Version:     0.1.0
 * Author:      Joe Hills
 * Author URI:  twitter.com/joehills
 * License:     GPLv2+
 * Text Domain: tsdrpg
 * Domain Path: /languages
 */

/**
 * Copyright (c) 2014 Joe Hills (email : joe@teamsnowday.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/**
 * Built using grunt-wp-plugin
 * Copyright (c) 2013 10up, LLC
 * https://github.com/10up/grunt-wp-plugin
 */

// Useful global constants
define( 'TSDRPG_VERSION', '0.1.0' );
define( 'TSDRPG_URL',     plugin_dir_url( __FILE__ ) );
define( 'TSDRPG_PATH',    dirname( __FILE__ ) . '/' );

/**
 * Default initialization for the plugin:
 * - Registers the default textdomain.
 */
function tsdrpg_init() {
	$locale = apply_filters( 'plugin_locale', get_locale(), 'tsdrpg' );
	load_textdomain( 'tsdrpg', WP_LANG_DIR . '/tsdrpg/tsdrpg-' . $locale . '.mo' );
	load_plugin_textdomain( 'tsdrpg', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

/**
 * Activate the plugin
 */
function tsdrpg_activate() {
	// First load the init scripts in case any rewrite functionality is being loaded
	tsdrpg_init();

	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'tsdrpg_activate' );

/**
 * Deactivate the plugin
 * Uninstall routines should be in uninstall.php
 */
function tsdrpg_deactivate() {

}
register_deactivation_hook( __FILE__, 'tsdrpg_deactivate' );

// Wireup actions
add_action( 'init', 'tsdrpg_init' );

// Wireup filters

// Wireup shortcodes

// Declare Custom Post Types
// Register Custom Post Type
function tsdrpg_armor() {

	$labels = array(
		'name'                => _x( 'Armor', 'Post Type General Name', 'tsdrpg' ),
		'singular_name'       => _x( 'Armor', 'Post Type Singular Name', 'tsdrpg' ),
		'menu_name'           => __( 'Armor', 'tsdrpg' ),
		'parent_item_colon'   => __( 'Parent Armor:', 'tsdrpg' ),
		'all_items'           => __( 'All Armor', 'tsdrpg' ),
		'view_item'           => __( 'View Armor', 'tsdrpg' ),
		'add_new_item'        => __( 'Add New Armor', 'tsdrpg' ),
		'add_new'             => __( 'Add New', 'tsdrpg' ),
		'edit_item'           => __( 'Edit Armor', 'tsdrpg' ),
		'update_item'         => __( 'Update Armor', 'tsdrpg' ),
		'search_items'        => __( 'Search Armor', 'tsdrpg' ),
		'not_found'           => __( 'Not found', 'tsdrpg' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsdrpg' ),
	);
	$rewrite = array(
		'slug'                => 'armor',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'tsdrpg_armor', 'tsdrpg' ),
		'description'         => __( 'Items you wear to prevent injury', 'tsdrpg' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( 'category', 'post_tag', ' tsdrpg_sizes', ' tsdrpg_classes' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-shield-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'tsdrpg_armor', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_armor', 0 );

// Register Custom Post Type
function tsdrpg_chapter_intro() {

	$labels = array(
		'name'                => _x( 'Chapter Introductions', 'Post Type General Name', 'tsdrpg' ),
		'singular_name'       => _x( 'Chapter Introduction', 'Post Type Singular Name', 'tsdrpg' ),
		'menu_name'           => __( 'Chapter Intros', 'tsdrpg' ),
		'parent_item_colon'   => __( 'Parent Intro:', 'tsdrpg' ),
		'all_items'           => __( 'All Intros', 'tsdrpg' ),
		'view_item'           => __( 'View Chapter Intro', 'tsdrpg' ),
		'add_new_item'        => __( 'Add New Intro', 'tsdrpg' ),
		'add_new'             => __( 'Add New', 'tsdrpg' ),
		'edit_item'           => __( 'Edit Intro', 'tsdrpg' ),
		'update_item'         => __( 'Update Intro', 'tsdrpg' ),
		'search_items'        => __( 'Search Chapter Introductions', 'tsdrpg' ),
		'not_found'           => __( 'Not found', 'tsdrpg' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsdrpg' ),
	);
	$args = array(
		'label'               => __( 'tsdrpg_chapter_intro', 'tsdrpg' ),
		'description'         => __( 'Introductory text of a chapter', 'tsdrpg' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( 'category', 'post_tag', ' tsdrpg_chapters' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-analytics',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'tsdrpg_chapter_intro', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_chapter_intro', 0 );
// Register Custom Post Type
function tsdrpg_class_page() {

	$labels = array(
		'name'                => _x( 'Class Pages', 'Post Type General Name', 'tsdrpg' ),
		'singular_name'       => _x( 'Class Page', 'Post Type Singular Name', 'tsdrpg' ),
		'menu_name'           => __( 'Class Pages', 'tsdrpg' ),
		'parent_item_colon'   => __( 'Parent Class:', 'tsdrpg' ),
		'all_items'           => __( 'All Class', 'tsdrpg' ),
		'view_item'           => __( 'View Class Page', 'tsdrpg' ),
		'add_new_item'        => __( 'Add New Class Page', 'tsdrpg' ),
		'add_new'             => __( 'Add New', 'tsdrpg' ),
		'edit_item'           => __( 'Edit Class Page', 'tsdrpg' ),
		'update_item'         => __( 'Update Class Page', 'tsdrpg' ),
		'search_items'        => __( 'Search Class Pages', 'tsdrpg' ),
		'not_found'           => __( 'Not found', 'tsdrpg' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsdrpg' ),
	);
	$args = array(
		'label'               => __( 'tsdrpg_class_page', 'tsdrpg' ),
		'description'         => __( 'Post Type Description', 'tsdrpg' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-businessman',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'tsdrpg_class_page', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_class_page', 0 );

// Register Custom Post Type
function tsdrpg_feat() {

	$labels = array(
		'name'                => _x( 'Feats', 'Post Type General Name', 'tsdrpg' ),
		'singular_name'       => _x( 'Feat', 'Post Type Singular Name', 'tsdrpg' ),
		'menu_name'           => __( 'Feats', 'tsdrpg' ),
		'parent_item_colon'   => __( 'Parent Feat:', 'tsdrpg' ),
		'all_items'           => __( 'All Feats', 'tsdrpg' ),
		'view_item'           => __( 'View Feat', 'tsdrpg' ),
		'add_new_item'        => __( 'Add New Feat', 'tsdrpg' ),
		'add_new'             => __( 'Add New', 'tsdrpg' ),
		'edit_item'           => __( 'Edit Feat', 'tsdrpg' ),
		'update_item'         => __( 'Update Feat', 'tsdrpg' ),
		'search_items'        => __( 'Search Feats', 'tsdrpg' ),
		'not_found'           => __( 'Not found', 'tsdrpg' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsdrpg' ),
	);
	$args = array(
		'label'               => __( 'tsdrpg_feat', 'tsdrpg' ),
		'description'         => __( 'Feats allow additional character customization', 'tsdrpg' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( 'category', 'post_tag', ' tsdrpg_classes' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-awards',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'tsdrpg_feat', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_feat', 0 );

// Register Custom Post Type
function tsdrpg_item() {

	$labels = array(
		'name'                => _x( 'Items', 'Post Type General Name', 'tsdrpg' ),
		'singular_name'       => _x( 'Item', 'Post Type Singular Name', 'tsdrpg' ),
		'menu_name'           => __( 'Items', 'tsdrpg' ),
		'parent_item_colon'   => __( 'Parent Item:', 'tsdrpg' ),
		'all_items'           => __( 'All Items', 'tsdrpg' ),
		'view_item'           => __( 'View Item', 'tsdrpg' ),
		'add_new_item'        => __( 'Add New Item', 'tsdrpg' ),
		'add_new'             => __( 'Add New', 'tsdrpg' ),
		'edit_item'           => __( 'Edit Item', 'tsdrpg' ),
		'update_item'         => __( 'Update Item', 'tsdrpg' ),
		'search_items'        => __( 'Search Item', 'tsdrpg' ),
		'not_found'           => __( 'Not found', 'tsdrpg' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsdrpg' ),
	);
	$rewrite = array(
		'slug'                => 'items',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'tsdrpg_item', 'tsdrpg' ),
		'description'         => __( 'Generic items go here', 'tsdrpg' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'tsdrpg_item', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_item', 0 );

// Register Custom Post Type
function tsdrpg_person() {

	$labels = array(
		'name'                => _x( 'People', 'Post Type General Name', 'tsdrpg' ),
		'singular_name'       => _x( 'Person', 'Post Type Singular Name', 'tsdrpg' ),
		'menu_name'           => __( 'People', 'tsdrpg' ),
		'parent_item_colon'   => __( 'Parent Person:', 'tsdrpg' ),
		'all_items'           => __( 'All People', 'tsdrpg' ),
		'view_item'           => __( 'View People', 'tsdrpg' ),
		'add_new_item'        => __( 'Add New Person', 'tsdrpg' ),
		'add_new'             => __( 'Add New', 'tsdrpg' ),
		'edit_item'           => __( 'Edit Person', 'tsdrpg' ),
		'update_item'         => __( 'Update Person', 'tsdrpg' ),
		'search_items'        => __( 'Search People', 'tsdrpg' ),
		'not_found'           => __( 'Not found', 'tsdrpg' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsdrpg' ),
	);
	$rewrite = array(
		'slug'                => 'people',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'tsdrpg_person', 'tsdrpg' ),
		'description'         => __( 'Someone in your setting', 'tsdrpg' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( 'category', 'post_tag', ' tsdrpg_species', ' tsdrpg_classes' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-id-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'tsdrpg_person', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_person', 0 );

// Register Custom Post Type
function tsdrpg_species_page() {

	$labels = array(
		'name'                => _x( 'Species Pages', 'Post Type General Name', 'tsdrpg' ),
		'singular_name'       => _x( 'Species Page', 'Post Type Singular Name', 'tsdrpg' ),
		'menu_name'           => __( 'Species Pages', 'tsdrpg' ),
		'parent_item_colon'   => __( 'Parent Species:', 'tsdrpg' ),
		'all_items'           => __( 'All Species', 'tsdrpg' ),
		'view_item'           => __( 'View Species Page', 'tsdrpg' ),
		'add_new_item'        => __( 'Add New Species Page', 'tsdrpg' ),
		'add_new'             => __( 'Add New', 'tsdrpg' ),
		'edit_item'           => __( 'Edit Species Page', 'tsdrpg' ),
		'update_item'         => __( 'Update Species Page', 'tsdrpg' ),
		'search_items'        => __( 'Search Species Pages', 'tsdrpg' ),
		'not_found'           => __( 'Not found', 'tsdrpg' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsdrpg' ),
	);
	$args = array(
		'label'               => __( 'tsdrpg_species_page', 'tsdrpg' ),
		'description'         => __( 'Basic page page for a given species', 'tsdrpg' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 21,
		'menu_icon'           => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'tsdrpg_species_page', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_species_page', 0 );

// Register Custom Post Type
function tsdrpg_skill() {

	$labels = array(
		'name'                => _x( 'Skills', 'Post Type General Name', 'tsdrpg' ),
		'singular_name'       => _x( 'Skill', 'Post Type Singular Name', 'tsdrpg' ),
		'menu_name'           => __( 'Skills', 'tsdrpg' ),
		'parent_item_colon'   => __( 'Parent Skills:', 'tsdrpg' ),
		'all_items'           => __( 'All Skills', 'tsdrpg' ),
		'view_item'           => __( 'View Skills', 'tsdrpg' ),
		'add_new_item'        => __( 'Add New Skill', 'tsdrpg' ),
		'add_new'             => __( 'Add New', 'tsdrpg' ),
		'edit_item'           => __( 'Edit Skill', 'tsdrpg' ),
		'update_item'         => __( 'Update Skill', 'tsdrpg' ),
		'search_items'        => __( 'Search Skills', 'tsdrpg' ),
		'not_found'           => __( 'Not found', 'tsdrpg' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsdrpg' ),
	);
	$rewrite = array(
		'slug'                => 'skills',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'tsdrpg_skill', 'tsdrpg' ),
		'description'         => __( 'These are talents you might need', 'tsdrpg' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( 'category', 'post_tag', ' tsdrpg_place_types' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-art',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'tsdrpg_skill', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_skill', 0 );

// Register Custom Post Type
function tsdrpg_place() {

	$labels = array(
		'name'                => _x( 'Places', 'Post Type General Name', 'tsdrpg' ),
		'singular_name'       => _x( 'Place', 'Post Type Singular Name', 'tsdrpg' ),
		'menu_name'           => __( 'Places', 'tsdrpg' ),
		'parent_item_colon'   => __( 'Parent Places:', 'tsdrpg' ),
		'all_items'           => __( 'All Places', 'tsdrpg' ),
		'view_item'           => __( 'View Places', 'tsdrpg' ),
		'add_new_item'        => __( 'Add New Place', 'tsdrpg' ),
		'add_new'             => __( 'Add New', 'tsdrpg' ),
		'edit_item'           => __( 'Edit Place', 'tsdrpg' ),
		'update_item'         => __( 'Update Place', 'tsdrpg' ),
		'search_items'        => __( 'Search Places', 'tsdrpg' ),
		'not_found'           => __( 'Not found', 'tsdrpg' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsdrpg' ),
	);
	$rewrite = array(
		'slug'                => 'places',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'tsdrpg_place', 'tsdrpg' ),
		'description'         => __( 'Settings for adventures and fun', 'tsdrpg' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( 'category', 'post_tag', ' tsdrpg_place_types' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-location-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'tsdrpg_place', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_place', 0 );

// Register Custom Post Type
function tsdrpg_spell() {

	$labels = array(
		'name'                => _x( 'Spells', 'Post Type General Name', 'tsdrpg' ),
		'singular_name'       => _x( 'Spell', 'Post Type Singular Name', 'tsdrpg' ),
		'menu_name'           => __( 'Spells', 'tsdrpg' ),
		'parent_item_colon'   => __( 'Parent Spell:', 'tsdrpg' ),
		'all_items'           => __( 'All Spells', 'tsdrpg' ),
		'view_item'           => __( 'View Spell', 'tsdrpg' ),
		'add_new_item'        => __( 'Add New Spell', 'tsdrpg' ),
		'add_new'             => __( 'Add New', 'tsdrpg' ),
		'edit_item'           => __( 'Edit Spell', 'tsdrpg' ),
		'update_item'         => __( 'Update Spell', 'tsdrpg' ),
		'search_items'        => __( 'Search Spells', 'tsdrpg' ),
		'not_found'           => __( 'Not found', 'tsdrpg' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsdrpg' ),
	);
	$rewrite = array(
		'slug'                => 'spells',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'tsdrpg_spell', 'tsdrpg' ),
		'description'         => __( 'Learnable magic abilities', 'tsdrpg' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( 'category', 'post_tag', ' tsdrpg_schools' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-visibility',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'tsdrpg_spell', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_spell', 0 );

// Register Custom Post Type
function tsdrpg_vehicle() {

	$labels = array(
		'name'                => _x( 'Vehicles', 'Post Type General Name', 'tsdrpg' ),
		'singular_name'       => _x( 'Vehicle', 'Post Type Singular Name', 'tsdrpg' ),
		'menu_name'           => __( 'Vehicles', 'tsdrpg' ),
		'parent_item_colon'   => __( 'Parent Vehicles:', 'tsdrpg' ),
		'all_items'           => __( 'All Vehicles', 'tsdrpg' ),
		'view_item'           => __( 'View Vehicle', 'tsdrpg' ),
		'add_new_item'        => __( 'Add New Vehicle', 'tsdrpg' ),
		'add_new'             => __( 'Add New', 'tsdrpg' ),
		'edit_item'           => __( 'Edit Vehicle', 'tsdrpg' ),
		'update_item'         => __( 'Update Vehicle', 'tsdrpg' ),
		'search_items'        => __( 'Search Vehicles', 'tsdrpg' ),
		'not_found'           => __( 'Not found', 'tsdrpg' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsdrpg' ),
	);
	$rewrite = array(
		'slug'                => 'vehicles',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'tsdrpg_vehicle', 'tsdrpg' ),
		'description'         => __( 'Objects that move you', 'tsdrpg' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( 'category', 'post_tag', '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-cart',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'tsdrpg_vehicle', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_vehicle', 0 );

// Register Custom Post Type
function tsdrpg_weapon() {

	$labels = array(
		'name'                => _x( 'Weapon', 'Post Type General Name', 'tsdrpg' ),
		'singular_name'       => _x( 'Weapon', 'Post Type Singular Name', 'tsdrpg' ),
		'menu_name'           => __( 'Weapons', 'tsdrpg' ),
		'parent_item_colon'   => __( 'Parent Weapon:', 'tsdrpg' ),
		'all_items'           => __( 'All Weapons', 'tsdrpg' ),
		'view_item'           => __( 'View Weapon', 'tsdrpg' ),
		'add_new_item'        => __( 'Add New Weapon', 'tsdrpg' ),
		'add_new'             => __( 'Add New', 'tsdrpg' ),
		'edit_item'           => __( 'Edit Weapon', 'tsdrpg' ),
		'update_item'         => __( 'Update Weapon', 'tsdrpg' ),
		'search_items'        => __( 'Search Weapons', 'tsdrpg' ),
		'not_found'           => __( 'Not found', 'tsdrpg' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsdrpg' ),
	);
	$rewrite = array(
		'slug'                => 'weapons',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'tsdrpg_weapon', 'tsdrpg' ),
		'description'         => __( 'Items optimized for inducing harm', 'tsdrpg' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( 'category', 'post_tag', ' tsdrpg_weapon_types' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-hammer',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'tsdrpg_weapon', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_weapon', 0 );

// Register Custom Taxonomy
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


