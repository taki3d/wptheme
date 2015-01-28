<div class="row">
      <div class="posts col-lg-8 col-md-8 col-sm-8 col-xs-12">
         <h2>Latest from <?php bloginfo('site_title') ?></h2>
         <br/>
         <?php
         query_posts('posts_per_page=3');
         while (have_posts()):the_post();
            ?>
            <div class="well">           
               <h3><?php the_title(); ?></h3>
               <p><?php the_post(); ?></p><a class="btn btn-default" style="float:right;" href="<?php the_permalink(); ?>">Read More »</a>
               <p class="text-muted">Posted on <?php the_date(); ?></p>
            </div>
         <?php endwhile;
         wp_reset_query();
         ?>
      </div>
      <div class="sidebar col-lg-4 col-md-4 col-sm-4 col-xs-12">
         <h3>News Categories</h3>
         <div class="nav nav-pills nav-stacked">
            <?php wp_list_categories('orderby=name&title_li=');?>
         </div>
      </div>
   </div>