<?php
function dog_theme_files() {
    wp_enqueue_style('dog_theme_main_styles', get_stylesheet_uri());
}

add_image_size( 'post-thumbnail size', 800, 240 );
add_image_size( 'homepage-thumb size', 220, 180 );
add_image_size( 'fullpage-thumb size', 590, 9999 );

add_action('wp_enqueue_scripts','dog_theme_files');

function wpb_add_google_fonts() {
 
wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

add_action('wp_enqueue_scripts', 'dog_theme_files');

function dog_theme_features() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  add_theme_support('title-tag');
}

  function register_my_menus() {
      register_nav_menus(
      	array(
      		'header-menu' => __('Header Menu'),
      		'extra-menu' => __('Extra Menu')
      	)
      );
    }
add_action('init', 'register_my_menus'); 

function create_custom_post_types() {
	register_post_type('new_litter', 
			array(
				'labels' => array(
					'name' => ('New Litter'),
					'singular_name' => _('Puppy')
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array(
					'slug' => 'new-litter'
				),
			)
);

}

add_action('init', 'create_custom_post_types');
