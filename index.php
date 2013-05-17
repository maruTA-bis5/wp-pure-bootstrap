<?php $pbs_dir = get_template_directory_uri(); ?><!DOCTYPE html>
<html <?php language_attributes();?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

      <?php get_template_part( 'header', 'menu' ); ?>
      	  
      <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>
      	  
      <?php get_template_part( 'sidebar', 'front' ); ?>
      
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
