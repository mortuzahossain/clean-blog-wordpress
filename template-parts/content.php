<header class="masthead" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1><h1><?php the_title(); ?></h1>
          
          <h2 class="subheading"><?php echo get_post_meta( get_the_ID(), '_clean_blogsubtitle', true ); ?></h2>
          
          <span class="meta">Posted by
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><?php the_author() ?></a>
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


    <?php
      $categories = get_the_category();
      $separator = ' | ';
      $output = '';
      if ( ! empty( $categories ) ) {
?>
<p class="catagory-title">Catagories:</p>
<ul>
<?php
          foreach( $categories as $category ) {
              $output .= '<a class="catagory" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
          }
          echo trim( $output, $separator );
          ?>
</ul>          
<?php } ?> 



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