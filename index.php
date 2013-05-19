<?php $pbs_dir = get_template_directory_uri(); ?><!DOCTYPE html>
<html <?php language_attributes();?>>
<?php get_header(); ?>
<body <?php body_class( 'container-fluid' ); ?>>

      <?php get_template_part( 'header', 'menu' ); ?>
      	  
      <div class="container-fluid">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <?php $header_image = get_header_image();
      	if ( ! empty( $header_image ) ) : ?>
      <header class="hero-unit site-header site-custom-header" id="masthead">
      <?php else: ?>
      <header class="hero-unit site-header" id="masthead">
      <?php endif; ?>
      	<hgroup>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' );?></a></h1>
          <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        </hgroup>
        
        
      </header>
      	  
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
