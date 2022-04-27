<div class="d-flex justify-content-between flex-wrap mt-awe-11 align-items-end">
                    <span class="fz-16 fw-light text-prata lh-160">filtre ou pesquise</span>
                    <div class="
                        input-posts 
                        border
                        border-2
                        border-gray
                        rounded-1 
                        ps-awe-48 pe-awe-24">
                        <form class="d-flex align-items-center" action="<?php echo home_url('/');?>" method="GET">
                        <input class="form-control bg-transparent rounded-0 border-0 p-0 text-prata fz-18"
                            placeholder="sua pesquisa" type="search" aria-label="Search" value="<?php echo get_search_query();?>" name="s">
                        <button class="btn" type="submit">
                            <img src="<?php echo get_template_directory_uri();?>/dist/img/icons/search-posts.svg" alt="">
                        </button>
                        </form>
                    </div>
                </div>