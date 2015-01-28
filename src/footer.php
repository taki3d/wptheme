</div>
<div class="footer">
   <div class="row">
      <div class="col-md-12">
         <div class="col-md-4">
            <h4>Follow Us:</h4>
            <a href="#"><img class="img-rounded" height="40" width="40" src="<?php bloginfo('template_directory'); ?>/default/facebook_icon.svg"/></a>
            <a href="#"><img class="img-rounded" height="40" width="40" src="<?php bloginfo('template_directory'); ?>/default/twitter_icon.svg"/></a>
            <a href="#"><img class="img-rounded" height="40" width="40" src="<?php bloginfo('template_directory'); ?>/default/pinterest_icon.svg"/></a>
         </div>
         <div class="col-md-4">
            <h4>Contact Us:</h4>
            <p><b>Address:</b>123 Some Street. <br/> SomeCity, SC. 55555. U.S.A.</p>
            <p><b>TEL:</b> (555) 555-5555</p>
         </div>
         <div class="col-md-4">
            <h4>Search Our Site:</h4>
            <form class="navbar-form navbar-left" role="search">
               <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
               </div>
               <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
            </form>
         </div>
      </div>
   </div>
   <div class="well-lg row">
      <div class="col-md-8">
         <img height="40" width="40" class="img-responsive"  style="float:left;display:inline; margin-right:10px;" src="<?php bloginfo('template_directory'); ?>/default/theayboxbw.svg"/>
         <p><b><?php bloginfo('site_name') ?></b><br/><small>&copy; <?php echo date('Y') ?>, all rights reserved.</small></p>
      </div>
      <div class="col-md-4">
         <br/>
         <p><a href="#">Site Map</a> | <a href="#">Privacy Policy</a> | <a href="#">Legal</a></p>
      </div>
   </div>
</div>
<?php wp_footer() ?>
</body>