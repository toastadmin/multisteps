<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <div id="site">
      <!--[if IE]>
        <div class="alert alert-warning">
          <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
        </div>
      <![endif]-->
      <?php get_template_part('templates/preloader'); ?>
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>
      <div id="content" class="site-content" role="document">
        <div class="content-wrap">
          <main class="main">
            <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->
        </div><!-- /.content-wrap -->
      </div><!-- /.site-content -->
      <?php
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
      ?>
      <?php if(get_field('google_map') && is_page_template( 'page-templates/page-location.php' )): ?>
          <?php get_template_part('templates/location-map-script'); ?>
      <?php endif; ?>
      <?php get_template_part('templates/google-analytics'); ?>
    </div> <!-- #site -->
  </body>
</html>
