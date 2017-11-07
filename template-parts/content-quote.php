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
</article>