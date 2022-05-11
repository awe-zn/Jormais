<form class="search-form" action="<?php echo home_url('/'); ?>" method="GET">
  <input type="search" placeholder="sua pesquisa" value="<?php echo get_search_query(); ?>" name="s">
  <button type="submit">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/search.svg" alt="">
  </button>
</form>