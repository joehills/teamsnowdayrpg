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
require 'custom_post_types.php';

// Register Custom Taxonomy
require 'custom_taxonomies.php';


/**
 * Get the CMB2 bootstrap!
 */
if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {
  require_once  __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once  __DIR__ . '/CMB2/init.php';
}

add_filter( 'cmb2_meta_boxes', 'cmb2_tsdrpg_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb2_tsdrpg_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_tsdrpg_';
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$meta_boxes['abilities_metabox'] = array(
		'id'            => 'abilities_metabox',
		'title'         => __( 'Abilities', 'tsdrpg' ),
		'object_types'  => array( 'tsdrpg_species_page', 'tsdrpg_class_page', 'tsdrpg_monster' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		'fields'        => array(
			array(
				'name'    => __( '', 'tsdrpg' ),
				'desc'    => __( 'Include abilities here.', 'tsdrpg' ),
				'id'      => $prefix . 'abilities_wysiwyg',
				'type'    => 'wysiwyg',
				'options' => array( 'textarea_rows' => 15, ),
			),
		),
	);

	$meta_boxes['feats_metabox'] = array(
		'id'            => 'abilities_metabox',
		'title'         => __( 'Feat Details', 'tsdrpg' ),
		'object_types'  => array( 'tsdrpg_feat' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		'fields'        => array(
			array(
				'name'    => __( 'Prequisites', 'tsdrpg' ),
				'desc'    => __( '', 'tsdrpg' ),
				'id'      => $prefix . 'prerequisites_wysiwyg',
				'type'    => 'wysiwyg',
				'options' => array( 'textarea_rows' => 5, ),
			),
			array(
				'name'    => __( 'Benefits', 'tsdrpg' ),
				'desc'    => __( '', 'tsdrpg' ),
				'id'      => $prefix . 'benefits_wysiwyg',
				'type'    => 'wysiwyg',
				'options' => array( 'textarea_rows' => 5, ),
			),
			array(
				'name'    => __( 'Normal', 'tsdrpg' ),
				'desc'    => __( '', 'tsdrpg' ),
				'id'      => $prefix . 'normal_wysiwyg',
				'type'    => 'wysiwyg',
				'options' => array( 'textarea_rows' => 5, ),
			),
			array(
				'name'    => __( 'Special', 'tsdrpg' ),
				'desc'    => __( '', 'tsdrpg' ),
				'id'      => $prefix . 'special_wysiwyg',
				'type'    => 'wysiwyg',
				'options' => array( 'textarea_rows' => 5, ),
			),
		),
	);


	$meta_boxes['stats_metabox'] = array(
		'id'            => 'stats_metabox',
		'title'         => __( 'Stat block', 'tsdrpg' ),
		'object_types'  => array( 'tsdrpg_person', 'tsdrpg_monster' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => 'true', // Show field names on the left
		'fields'        => array(
			array(
				'name'    => __( 'STR', 'tsdrpg' ),
				'desc'    => __( 'Strength', 'tsdrpg' ),
				'id'      => $prefix . 'stats_str',
				'type'    => 'text_small',
			),
			array(
				'name'    => __( 'DEX', 'tsdrpg' ),
				'desc'    => __( 'Dexterity', 'tsdrpg' ),
				'id'      => $prefix . 'stats_dex',
				'type'    => 'text_small',
			),
			array(
				'name'    => __( 'CON', 'tsdrpg' ),
				'desc'    => __( 'Constitution', 'tsdrpg' ),
				'id'      => $prefix . 'stats_con',
				'type'    => 'text_small',
			),
			array(
				'name'    => __( 'INT', 'tsdrpg' ),
				'desc'    => __( 'Intelligence', 'tsdrpg' ),
				'id'      => $prefix . 'stats_int',
				'type'    => 'text_small',
			),
			array(
				'name'    => __( 'WIS', 'tsdrpg' ),
				'desc'    => __( 'Wisdom', 'tsdrpg' ),
				'id'      => $prefix . 'stats_wis',
				'type'    => 'text_small',
			),
			array(
				'name'    => __( 'CHA', 'tsdrpg' ),
				'desc'    => __( 'Charisma', 'tsdrpg' ),
				'id'      => $prefix . 'stats_cha',
				'type'    => 'text_small',
			)
		),
	);

	
	$meta_boxes['monster_metabox'] = array(
		'id'            => 'monster_metabox',
		'title'         => __( 'Monster info', 'tsdrpg' ),
		'object_types'  => array( 'tsdrpg_person', 'tsdrpg_monster' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => 'true', // Show field names on the left
		'fields'        => array(
			array(
				'name'     => __( 'Size', 'cmb2' ),
				'desc'     => __( '', 'cmb2' ),
				'id'       => $prefix . 'size_taxonomy_select',
				'type'     => 'taxonomy_select',
				'taxonomy' => 'tsdrpg_sizes', // Taxonomy Slug
			),
			array(
				'name' => __( 'Space', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_space',
				'type' => 'text_small',
			),
			array(
				'name' => __( 'Type', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_type',
				'type' => 'text_small',
			),
			array(
				'name' => __( 'Hit Die', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_hit_die',
				'type' => 'text_small',
			),
			array(
				'name' => __( 'Initiative', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_initiative',
				'type' => 'text_small',
			),
			array(
				'name' => __( 'AC', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_ac',
				'type' => 'text_small',
			),
			array(
				'name' => __( 'BAM/Uncommon', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_bam_uncommon',
				'type' => 'text_small',
			),
			array(
				'name' => __( 'Attacks', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_attacks',
				'type' => 'text_small',
			),
			array(
				'name' => __( 'Full Attack', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_full_attack',
				'type' => 'textarea_small',
			),
			array(
				'name' => __( 'Special Attacks', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_special _attacks',
				'type' => 'textarea_small',
			),
			array(
				'name' => __( 'Saves', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_saves',
				'type' => 'text_small',
			),
			array(
				'name' => __( 'Skills', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_skills',
				'type' => 'textarea_small',
			),
			array(
				'name' => __( 'Skills', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_skills',
				'type' => 'textarea_small',
			),
			array(
				'name' => __( 'Feats', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_feats',
				'type' => 'textarea_small',
			),
			array(
				'name' => __( 'Environment', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_environment',
				'type' => 'text_medium',
			),
			array(
				'name' => __( 'Organizations', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_organizations',
				'type' => 'text_medium',
			),
			array(
				'name' => __( 'CR', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_cr',
				'type' => 'text_small',
			),
			array(
				'name' => __( 'Advancement', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_advancement',
				'type' => 'textarea_small',
			),
			array(
				'name' => __( 'Items Carried', 'cmb2' ),
				'desc' => __( '', 'cmb2' ),
				'id'   => $prefix . 'monster_items_carried',
				'type' => 'textarea_small',
			),
		),
	);

	return $meta_boxes;
}
