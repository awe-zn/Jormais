<form role="search" method="GET" action="<?php echo home_url('/');?>" class="d-flex input-header me-lg-awe-32">
            <input class="
                  form-control 
                  rounded-0 
                  bg-transparent 
                  text-white
                  border-0 
                  border-1 
                  border-white 
                  border-bottom
                  px-0
                  mb-3
                  mb-sm-0" type="search" aria-label="Search" value="<?php echo get_search_query();?>" name="s"/>
            <button class="btn" type="submit"><img src="<?php echo get_template_directory_uri();?>/dist/image/icons/search.svg" alt=""></button>
</form>