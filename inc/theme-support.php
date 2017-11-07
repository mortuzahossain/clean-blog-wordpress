<?php
function clean_blog_setup() {
	add_theme_support( 'custom-background' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-formats', array(
		'quote'
	) );

	add_theme_support( 'menus' );
	
	register_nav_menu( 'top_menu', 'Top Navigation Menu' );
	register_nav_menu( 'social_bottom', 'Bottom Social Menu' );


	add_filter('nav_menu_css_class','social_bottom_menu_classes',110,3);

	function social_bottom_menu_classes($classes, $item, $args) {
		if($args->theme_location == 'social_bottom') { 
			$classes[] = 'list-inline-item';
		}
		return $classes;
	}

	$args = array(
		'flex-width'    => true,
		'width'         => 980,
		'flex-height'    => true,
		'height'        => 400,
		'default-image' => BASE . '/img/home-bg.jpg',
	);
	add_theme_support( 'custom-header', $args );

}
add_action( 'after_setup_theme', 'clean_blog_setup' ); 