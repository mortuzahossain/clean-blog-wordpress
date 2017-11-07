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
            <?php echo get_the_tag_list(' <div class=""><p><span class="post-tags"><strong><i class="fa fa-tags"></i> Tags:</strong> ',', ','</p></div>');  ?>
        </div>
      </div>
    </div>
  </div>
</header>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="container" >
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php the_content(); ?>
        <?php wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink=page %'); ?>
        <div class="navigation">
          <div class="alignleft"><?php previous_posts_link( '&laquo; Previous Entries' ); ?></div>
          <div class="alignright"><?php next_posts_link( 'Next Entries &raquo;', '' ); ?></div>
        </div>
        <nav role="navigation" class="navigation posts-navigation">
                <div class="nav-links">
<?php
    the_post_navigation(array(
            'screen_reader_text' => ' ',
            'next_text' => 'Older',
            'prev_text' => 'Newer'
        ));
?>              </div>
            </nav>
      </div>
    </div>
  </div>
</article>