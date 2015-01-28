<?php
require_once('wp_bootstrap_navwalker.php');
register_nav_menus(array(
    'primary' => __('Primary Menu', 'TheAyBox'),
));
?>

<?php
if (get_option('aybox_options')) {
   $carousel_options = get_option('aybox_options');
} else {
   add_option('aybox_options', array(
       'slide1' => "http://localhost/wordpress/wp-content/themes/theaybox/default/slide1.jpg"
   ));
   $carousel_options = get_option('aybox_options');
}

add_action('admin_menu', 'theme_page_add');

function theme_page_add() {
   add_submenu_page('themes.php', 'Theme Options', 'Theme Options', 8, 'themeoptions', 'theme_page_options');
}

function theme_page_options() {

   global $carousel_options;

   $new_images = array(
       'slide1' => htmlentities($_POST['carousel_image'], ENT_QUOTES)
   );

   update_option('aybox_options', $new_images);

   $carousel_options = $new_images;

   echo '<div class="wrap">';
   echo '<h2>Theme Options</h2><br/>';
   ?>

   <form action="themes.php?page=themeoptions" method="post">
      <label for="Carousel Options">Carousel Image URL:</label> <input name="carousel_image" id="carousel_image" value="<?php echo $carousel_options['slide1']; ?>"/>
      <input type="submit" value="Update Theme" name="submit"/>
   </form>

   <?php
   echo '</div>';
}

