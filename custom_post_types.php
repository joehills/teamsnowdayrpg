<?php
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
		'supports'            => array( 'title', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
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
		'menu_icon'           => 'dashicons-products',
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
function tsdrpg_monsters() {

	$labels = array(
		'name'                => _x( 'Monsters', 'Post Type General Name', 'tsdrpg' ),
		'singular_name'       => _x( 'Monster', 'Post Type Singular Name', 'tsdrpg' ),
		'menu_name'           => __( 'Monsters', 'tsdrpg' ),
		'parent_item_colon'   => __( 'Parent Monster:', 'tsdrpg' ),
		'all_items'           => __( 'All Monsters', 'tsdrpg' ),
		'view_item'           => __( 'View Monster', 'tsdrpg' ),
		'add_new_item'        => __( 'Add New Monster', 'tsdrpg' ),
		'add_new'             => __( 'Add New', 'tsdrpg' ),
		'edit_item'           => __( 'Edit Monster', 'tsdrpg' ),
		'update_item'         => __( 'Update Monster', 'tsdrpg' ),
		'search_items'        => __( 'Search Monster', 'tsdrpg' ),
		'not_found'           => __( 'Not found', 'tsdrpg' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsdrpg' ),
	);
	$rewrite = array(
		'slug'                => 'monsters',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'tsdrpg_monster', 'tsdrpg' ),
		'description'         => __( 'Monsters in your game', 'tsdrpg' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'taxonomies'          => array( 'category', 'post_tag', 'tsdrpg_species', ' tsdrpg_class' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-share-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'tsdrpg_monster', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsdrpg_monsters', 0 );

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

