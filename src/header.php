<!DOCTYPE html>
<html lang="en">
   <head>

      <!-- WP Head -->
      <?php wp_head(); ?>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Page Title -->
      <title><?php wp_title(' | ', true, 'right'); ?></title>

      <!-- Theme Icon -->
      <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

      <!-- Theme Style -->
      <link href="<?php bloginfo('stylesheet_url'); ?>"  rel="stylesheet">

      <!-- Jquery -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

      <!-- Bootstrap 3 -->
      <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>

      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <?php echo '<body class="' . join(' ', get_body_class()) . '">' . PHP_EOL; ?>

   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img class="navbar-logo"  style="max-height:40px;max-width:40px;display:inline; margin-top: -7px;margin-right:10px;" src="<?php bloginfo('template_directory');?>/default/theayboxbw.svg"/>The Ay Box</a>
         </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="navbar-collapse">

            <?php
            wp_nav_menu(array(
                'menu' => 'primary',
                'theme_location' => 'primary',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'bs-example-navbar-collapse-1',
                'menu_class' => 'nav navbar-nav',
                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                'walker' => new wp_bootstrap_navwalker())
            );
            ?>

         </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
   </nav>
   <div class="container">