    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php
            if ( has_nav_menu( 'social_bottom' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'social_bottom',
                    'container'      => false,
                    'menu_class'     => 'list-inline text-center',
                ) );
            }
            ?>
            <p class="copyright text-muted">Copyright &copy; <a href="<?php echo get_home_url(); ?>"><?php echo get_home_url(); ?></a> <b><?php echo date('Y'); ?></b></p>
          </div>
        </div>
      </div>
    </footer>



    <?php wp_footer(); ?>

  </body>

</html>
