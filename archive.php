<?php
    get_header();
    if (have_posts()){
?>

    <header class="masthead" style="background-image: url('<?php header_image(); ?>')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
                <h1>Archive For</h1>
                <h2><?php the_archive_title(); ?></h2>
            </div>
          </div>
        </div>
      </div>
    </header>

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

        <div class="clearfix">

<?php
    if (function_exists("fellowtuts_wpbs_pagination"))
    {
        fellowtuts_wpbs_pagination();
    }
?>
            </div>
        </div>
    </div>
</div>

<?php
        } else {
            echo "No page Found";
        }
    get_footer();
?>