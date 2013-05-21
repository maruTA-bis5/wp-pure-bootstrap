<?php $pbs_dir = get_template_directory_uri();
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>
<?get_header(); ?>
<body <?php body_class(); ?>>
    <?php get_header( 'menu' ); ?>

	<div class="container">
        <?php get_header( 'unit' ); ?>
		<div class="row-fluid">
            <?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>
            <?php get_sidebar( 'main' ); ?>
            <div class="span10">
            <?php else : ?>
            <div class="span12">
            <?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>
            </div>
        </div>
    <hr>
    <?php get_footer(); ?>
</div>
<script src="<?php echo $pbs_dir; ?>/js/bootstrap.js"></script>
<?php wp_footer(); ?>
</body>
</html>
