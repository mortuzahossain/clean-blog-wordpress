<!DOCTYPE html>
<html <?php language_attributes( ) ?>>

  <head>

    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo( 'description' ) ?>">
    <meta name="author" content="<?php bloginfo( 'author_link' ) ?>">

    <title><?php wp_title( '|', false, 'right' ); ?></title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(  ); ?>>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><?php bloginfo( 'title' ) ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php
            if ( has_nav_menu( 'top_menu' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'top_menu',
                    'container'      => false,
                    'menu_class'     => 'navbar-nav ml-auto',
                    'walker'            => new WP_Bootstrap_Navwalker()
                ) );
            }
            ?>
        </div>
      </div>
    </nav>
