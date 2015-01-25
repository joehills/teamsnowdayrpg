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
		'menu_icon'           => 'dashicons-groups',
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
		'menu_icon'           => 'dashicons-groups',
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


