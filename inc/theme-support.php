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
		'quote',
		'link',
	) );
	add_theme_support( 'menus' );
	register_nav_menu( 'top_menu', 'Top Navigation Menu' );


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