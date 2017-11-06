<?php
    get_header();
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/page', 'full' );

?>

<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <?php
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
        ?>

      </div>
    </div>
  </div>
</article>

<?php

        endwhile; 
    get_footer();
?>
