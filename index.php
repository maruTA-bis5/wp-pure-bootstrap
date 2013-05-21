<?php $pbs_dir = get_template_directory_uri(); ?><!DOCTYPE html>
<html <?php language_attributes();?>>
<?php get_header(); ?>
<body <?php body_class( 'container-fluid' ); ?>>

      <?php get_template_part( 'header', 'menu' ); ?>
      	  
      <div class="container-fluid">

      <?php get_header( 'unit' ); ?>	  

      <div class="row-fluid site-content">
      	  <?php if ( have_posts() ) : ?>
      	  
      	  	<?php while ( have_posts() ) : the_post(); ?>
      	  		<?php get_template_part( 'content', get_post_format() ); ?>
      	  	<?php endwhile; ?>
      	  <?php endif; ?>
      </div>
      
      <?php get_sidebar(); ?>
      
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
