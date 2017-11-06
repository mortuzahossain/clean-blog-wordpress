<?php

    if (! function_exists( 'clean_blog_style_js' )) {
        function clean_blog_style_js(){
            // For Style
            wp_enqueue_style( 'bootstrap', BASE.'/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all' );
            wp_enqueue_style( 'font-awesome', BASE.'/vendor/font-awesome/css/font-awesome.min.css', array(), '1.0.0', 'all' );
            wp_enqueue_style( 'font-Lora', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic', array(), '1.0.0', 'all' );
            wp_enqueue_style( 'font-Sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800', array(), '1.0.0', 'all' );
            wp_enqueue_style( 'clean-blog', BASE.'/css/clean-blog.css', array(), '1.0.0', 'all' );
            // For JS
            wp_enqueue_script('bootstrap', BASE.'/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script( 'clean-blog', BASE.'/js/clean-blog.min.js', array('jquery'), '1.0.0', true );

        }
        add_action( 'wp_enqueue_scripts', 'clean_blog_style_js' );
    }