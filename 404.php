<?php get_header() ?>

    <header class="masthead" style="background-image: url('<?php header_image(); ?>')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>404 ERROR</h1>
              <span class="subheading">Page Not Found</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto text-center">
                <h1>You Can Go to <a href="<?php echo get_home_url() ?>">HOME PAGE</a></h1>
            </div>
        </div>
    </div>
<?php get_footer( ) ?>