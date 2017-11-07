<?php

require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';

define('BASE', get_template_directory_uri());

require_once( 'inc/theme-support.php' );

require_once( 'inc/js-css.php' );

require_once( 'inc/custom-comment-fiels.php' );

require_once( 'inc/wp_bootstrap_pagination.php' );

require_once( 'inc/cmb2.php' );

require_once (dirname(__FILE__).'/inc/plugins/class-tgm-plugin-activation.php');
require_once (dirname(__FILE__).'/inc/plugins/init.php');


add_filter('nav_menu_css_class','arg_menu_classes',110,3);

function arg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'social_bottom') { // name need menu
        $classes[] = 'list-inline-item'; // add classes
    }
    return $classes;
}