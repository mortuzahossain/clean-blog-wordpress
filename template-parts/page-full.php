
<header class="masthead" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1><?php the_title() ?></h1>
          <?php if (! empty(get_post_meta($post->ID,'page_meta_box_subtitle',true))) { ?>
          <span class="subheading"><?php echo get_post_meta($post->ID,'page_meta_box_subtitle',true); ?></span>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <?php the_content(); ?>
    </div>
  </div>
</div>