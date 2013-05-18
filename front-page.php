<?php
/**
 * Template Name: Front Page Template
 */ ?>
<?php $pbs_dir = get_template_directory_uri(); ?><!DOCTYPE html>
<html <?php language_attributes();?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

      <?php get_template_part( 'header', 'menu' ); ?>
      	  
      <div class="container">
      
      <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', 'page' ); ?>
      <?php endwhile; ?>
      <?php get_sidebar( 'front' ); ?>
      
      <hr>

      <?php get_footer(); ?>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $pbs_dir; ?>/js/bootstrap.js"></script>
  <?php wp_footer(); ?>
  </body>
</html>
