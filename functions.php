<?php

if(!defined('AGENCY_THEME_DIR')) {
	//define('AGENCY_THEME_DIR', ABSPATH.'wp-content/themes/'.get_template().'/');
	define('AGENCY_THEME_DIR', get_theme_root().'/'.get_template().'/');
}

if(!defined('AGENCY_THEME_URL')) {
	define('AGENCY_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
}


function register_my_menus() {
  register_nav_menus(
    array(
			'home-menu' => __( 'Home Menu' ),
      'new-menu' => __( 'New Menu' ),
      'another-menu' => __( 'Another Menu' ),
      'an-extra-menu' => __( 'An Extra Menu' )
    )
  );
}

add_action( 'init', 'register_my_menus' );

//miniaturki
add_theme_support( 'post-thumbnails' );
add_image_size ('home-img-work', 398, 398, true);

// mapa google
function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyDM0fX-JGe55tgGjkB3FlOaTf0D4Z6UO3Q';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


//widgety
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
		register_sidebar( array(
				'name' => __( 'Twitter', 'theme-slug' ),
				'id' => 'twitter',
				'description' => __( 'Widgets in this area will be shown on single news page.', 'theme-slug' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>',
				 ) );
}

//realizacje
add_action('init','init_stronywww');
	function init_stronywww(){
						$stronywww = array(
								'labels' => array (
										'name' => 'Strony www',
										'sungular_name' => 'Strony www',
										'all_items' => 'Wszystkie realizacje',
										'add_new' => 'Dodaj realizację',
										'add_new_item' => 'Dodaj nową',
										'edit_item' => 'Edytuj',
										'new_item' => 'Nowa',
										'view_item' => 'Zobacz zmiany',
										'search_items' => 'Szukaj',
										'not_found' => 'Nie znaleziono',
										'not_found_in_trash' => 'Nie znaleziono',
										'parent_item_colon' => ''
								),
								'public' => true,
								'public_queryable' => true,
								'show_ui' => true,
								'query_var' => true,
								'menu_icon' => 'dashicons-format-aside',
								'capatility_type' => 'post',
								'hierarchical' => true,
								'menu_position' => 5,
								'supports' => array(
										'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields'
								),
								'has_archive' => false,
								'taxonomies' => array('category', 'post_tag'),
						);
						register_post_type('stronywww', $stronywww);
	}


add_action('init','init_portfolio');
	function init_portfolio(){
						$portfolio = array(
								'labels' => array (
										'name' => 'Projekty graficzne',
										'sungular_name' => 'Projekty graficzne',
										'all_items' => 'Wszystkie realizacje',
										'add_new' => 'Dodaj realizację',
										'add_new_item' => 'Dodaj nową',
										'edit_item' => 'Edytuj',
										'new_item' => 'Nowa',
										'view_item' => 'Zobacz zmiany',
										'search_items' => 'Szukaj',
										'not_found' => 'Nie znaleziono',
										'not_found_in_trash' => 'Nie znaleziono',
										'parent_item_colon' => ''
								),
								'public' => true,
								'public_queryable' => true,
								'show_ui' => true,
								'query_var' => true,
								'menu_icon' => 'dashicons-format-aside',
								'capatility_type' => 'post',
								'hierarchical' => true,
								'menu_position' => 5,
								'supports' => array(
										'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields'
								),
								'has_archive' => false,
								'taxonomies' => array('category', 'post_tag'),
						);
						register_post_type('portfolio', $portfolio);
	}

	add_action('init','init_sklepyint');
		function init_sklepyint(){
							$sklepyint = array(
									'labels' => array (
											'name' => 'Sklepy internetowe',
											'sungular_name' => 'Sklepy internetowe',
											'all_items' => 'Wszystkie realizacje',
											'add_new' => 'Dodaj realizację',
											'add_new_item' => 'Dodaj nową',
											'edit_item' => 'Edytuj',
											'new_item' => 'Nowa',
											'view_item' => 'Zobacz zmiany',
											'search_items' => 'Szukaj',
											'not_found' => 'Nie znaleziono',
											'not_found_in_trash' => 'Nie znaleziono',
											'parent_item_colon' => ''
									),
									'public' => true,
									'public_queryable' => true,
									'show_ui' => true,
									'query_var' => true,
									'menu_icon' => 'dashicons-format-aside',
									'capatility_type' => 'post',
									'hierarchical' => true,
									'menu_position' => 5,
									'supports' => array(
											'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields'
									),
									'has_archive' => false,
									'taxonomies' => array('category', 'post_tag'),
							);
							register_post_type('sklepyint', $sklepyint);
		}

		add_action('init','init_aplikacjemobilne');
			function init_aplikacjemobilne(){
								$aplikacjemobilne = array(
										'labels' => array (
												'name' => 'Aplikacje mobilne',
												'sungular_name' => 'Aplikacje mobilne',
												'all_items' => 'Wszystkie realizacje',
												'add_new' => 'Dodaj realizację',
												'add_new_item' => 'Dodaj nową',
												'edit_item' => 'Edytuj',
												'new_item' => 'Nowa',
												'view_item' => 'Zobacz zmiany',
												'search_items' => 'Szukaj',
												'not_found' => 'Nie znaleziono',
												'not_found_in_trash' => 'Nie znaleziono',
												'parent_item_colon' => ''
										),
										'public' => true,
										'public_queryable' => true,
										'show_ui' => true,
										'query_var' => true,
										'menu_icon' => 'dashicons-format-aside',
										'capatility_type' => 'post',
										'hierarchical' => true,
										'menu_position' => 5,
										'supports' => array(
												'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields'
										),
										'has_archive' => false,
										'taxonomies' => array('category', 'post_tag'),
								);
								register_post_type('aplikacjemobilne', $aplikacjemobilne);
			}

			add_action('init','init_aplikacjeded');
				function init_aplikacjeded(){
									$aplikacjeded = array(
											'labels' => array (
													'name' => 'Aplikacje dedykowane',
													'sungular_name' => 'Aplikacje dedykowane',
													'all_items' => 'Wszystkie realizacje',
													'add_new' => 'Dodaj realizację',
													'add_new_item' => 'Dodaj nową',
													'edit_item' => 'Edytuj',
													'new_item' => 'Nowa',
													'view_item' => 'Zobacz zmiany',
													'search_items' => 'Szukaj',
													'not_found' => 'Nie znaleziono',
													'not_found_in_trash' => 'Nie znaleziono',
													'parent_item_colon' => ''
											),
											'public' => true,
											'public_queryable' => true,
											'show_ui' => true,
											'query_var' => true,
											'menu_icon' => 'dashicons-format-aside',
											'capatility_type' => 'post',
											'hierarchical' => true,
											'menu_position' => 5,
											'supports' => array(
													'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields'
											),
											'has_archive' => false,
											'taxonomies' => array('category', 'post_tag'),
									);
									register_post_type('aplikacjeded', $aplikacjeded);
				}


	//Opinie klientów
	add_action('init','init_opinie');
		function init_opinie(){
							$opinie = array(
									'labels' => array (
											'name' => 'Opinie klientów',
											'sungular_name' => 'Opinie klientów',
											'all_items' => 'Wszystkie opinie',
											'add_new' => 'Dodaj opinie',
											'add_new_item' => 'Dodaj nową',
											'edit_item' => 'Edytuj',
											'new_item' => 'Nowa',
											'view_item' => 'Zobacz zmiany',
											'search_items' => 'Szukaj',
											'not_found' => 'Nie znaleziono',
											'not_found_in_trash' => 'Nie znaleziono',
											'parent_item_colon' => ''
									),
									'public' => true,
									'public_queryable' => true,
									'show_ui' => true,
									'query_var' => true,
									'menu_icon' => 'dashicons-format-aside',
									'capatility_type' => 'post',
									'hierarchical' => true,
									'menu_position' => 5,
									'supports' => array(
											'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields'
									),
									'has_archive' => false,
									'taxonomies' => array('category', 'post_tag'),
							);
							register_post_type('opinie', $opinie);
		}



?>
