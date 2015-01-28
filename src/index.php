
<?php get_header(); ?>
<div class="content-top">
<!-- Carousel-->
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="item">
          <img src="<?php bloginfo('template_directory') ?>/default/slide1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item active">
          <img src="<?php bloginfo('template_directory') ?>/default/slide1.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php bloginfo('template_directory') ?>/default/slide1.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<div class="content">
   <!-- Row Images -->
   <div class="row">
      <div class=" col-md-4 col-sm-6 col-xs-12">
         <a href="#">
            <img src="<?php bloginfo('template_directory'); ?>/default/350X350.jpg" class=" img-responsive">
         </a>
         <h4 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
         <a class="btn btn-default" href="#" role="button">View details »</a>
      </div>
      <div class=" col-md-4 col-sm-6 col-xs-12">
         <a href="#">
            <img src="<?php bloginfo('template_directory'); ?>/default/350X350.jpg" class=" img-responsive">
         </a>
         <h4 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
         <a class="btn btn-default" href="#" role="button">View details »</a>
      </div>
      <div class=" col-md-4 col-sm-6 col-xs-12">
         <a href="#">
            <img src="<?php bloginfo('template_directory');  ?>/default/350X350.jpg" class=" img-responsive">
         </a>
         <h4 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
         <a class="btn btn-default" href="#" role="button">View details »</a>
      </div>     
   </div>
   <hr/>
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
               <p><?php the_excerpt(); ?></p><a class="btn btn-default" style="float:right;" href="<?php the_permalink(); ?>">Read More »</a>
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
</div>

<?php get_footer(); ?>
