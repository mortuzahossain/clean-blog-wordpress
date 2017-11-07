<header class="masthead" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1><h1><?php the_title(); ?></h1>
          <?php if (! empty(get_post_meta( get_the_ID(), '_clean_blogsubtitle', true )) ){ ?>
          <h2 class="subheading"><?php echo get_post_meta( get_the_ID(), '_clean_blogsubtitle', true ); ?></h2>
          <?php } ?>
          <span class="meta">Posted by
            <a href="<?php the_author_link() ?>"><?php the_author() ?></a>
            on <?php the_date(); ?></span>
        </div>
      </div>
    </div>
  </div>
</header>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="container">
    <div class="row">
      <div class="container">
        <blockquote class="quote-card blue-card">
          <?php the_content(); ?>
        </blockquote>
      </div>
    </div>
  </div>
</article>