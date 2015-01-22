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
function tsdrpg_class_summary() {

	$labels = array(
		'name'                => _x( 'Class Summaries', 'Post Type General Name', 'tsdrpg' ),
		'singular_name'       => _x( 'Class Summary', 'Post Type Singular Name', 'tsdrpg' ),
		'menu_name'           => __( 'Class Summaries', 'tsdrpg' ),
		'parent_item_colon'   => __( 'Parent Class:', 'tsdrpg' ),
		'all_items'           => __( 'All Class Summaries', 'tsdrpg' ),
		'view_item'           => __( 'View Class Summary', 'tsdrpg' ),
		'add_new_item'        => __( 'Add New Class Summary', 'tsdrpg' ),
		'add_new'             => __( 'Add New', 'tsdrpg' ),
		'edit_item'           => __( 'Edit Class Summary', 'tsdrpg' ),
		'update_item'         => __( 'Update Class Summary', 'tsdrpg' ),
		'search_items'        => __( 'Search Class Summaries', 'tsdrpg' ),
		'not_found'           => __( 'Not found', 'tsdrpg' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsdrpg' ),
	);
	$args = array(
		'label'               => __( 'tsdrpg_class_summary', 'tsdrpg' ),
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
	register_post_type( 'tsdrpg_class_summary', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_class_summary', 0 );

// Register Custom Post Type
function tsdrpg_species_summary() {

	$labels = array(
		'name'                => _x( 'Species Summaries', 'Post Type General Name', 'tsdrpg' ),
		'singular_name'       => _x( 'Species Summary', 'Post Type Singular Name', 'tsdrpg' ),
		'menu_name'           => __( 'Species Summaries', 'tsdrpg' ),
		'parent_item_colon'   => __( 'Parent Species:', 'tsdrpg' ),
		'all_items'           => __( 'All Species Summaries', 'tsdrpg' ),
		'view_item'           => __( 'View Species Summary', 'tsdrpg' ),
		'add_new_item'        => __( 'Add New Species Summary', 'tsdrpg' ),
		'add_new'             => __( 'Add New', 'tsdrpg' ),
		'edit_item'           => __( 'Edit Species Summary', 'tsdrpg' ),
		'update_item'         => __( 'Update Species Summary', 'tsdrpg' ),
		'search_items'        => __( 'Search Species Summaries', 'tsdrpg' ),
		'not_found'           => __( 'Not found', 'tsdrpg' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsdrpg' ),
	);
	$args = array(
		'label'               => __( 'tsdrpg_species_summary', 'tsdrpg' ),
		'description'         => __( 'Basic summary page for a given species', 'tsdrpg' ),
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
		'menu_icon'           => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'tsdrpg_species_summary', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_species_summary', 0 );
