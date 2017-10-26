<?php get_header() ?>

    <header class="masthead" style="background-image: url('<?php echo BASE; ?>/img/home-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>



    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">


<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>    
            <div class="post-preview">
            <a href="<?php the_permalink(); ?>">
              <h2 class="post-title">
                <?php the_title(); ?>
              </h2>
              <h3 class="post-subtitle">
                <?php echo wp_trim_words( get_the_content(), $num_words = 10, $more = null ); ?>
              </h3>
            </a>
            <p class="post-meta">Posted by
              <?php the_author_posts_link(); ?>
              on <?php the_time('F jS, Y'); ?></p>
          </div>
          <hr>
  <?php endwhile; ?>
<?php endif; ?>

          <!-- Pager -->
          <div class="clearfix">

<?php
    the_posts_navigation(array(
            'screen_reader_text' => ' ',
            'next_text' => 'Older',
            'prev_text' => 'Newer'
        ));
?>

            <!-- <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a> -->
          </div>
        </div>
      </div>
    </div>

<?php get_footer( ) ?>