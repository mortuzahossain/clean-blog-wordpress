<form class="form-inline text-center" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input type="text" class="form-control col-md-10 col-sm-10 col-xl-10 " id="search-form" placeholder="Search Here" value="<?php echo get_search_query(); ?>" name="s">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>