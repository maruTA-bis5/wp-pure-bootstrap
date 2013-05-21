<?php $pbs_dir = get_template_directory_uri(); ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

    <?php get_template_part( 'header', 'menu' ); ?>

    <div class="container">
        <?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>
        <div class="span10">
        <?php else: ?>
        <div class="span12">
        <?php endif; ?>
            <?php while ( have_posts() ) : the_post(); //TODO 記事がない場合?>
	        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		        <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		        <div class="featured-post">
			        <?php _e( 'Featured post', 'pure_bootstrap' ); ?>
		        </div>
		        <?php endif; ?>
		        <header class="entry-header">
			        <?php the_post_thumbnail(); ?>
			        <?php if ( is_single() ) : ?>
			        <h1 class="entry-title"><?php the_title(); ?></h1>
			        <?php else: ?>
			        <h1 class="entry-title">
				        <a href="<?php the_permalink(); ?>"
				        title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'pure_bootstrap' ), the_title_attribute( 'echo=0' ) ) ); ?>"
	                    rel="bookmark"><?php the_title(); ?></a>
			        </h1>
			        <?php endif; ?>
		        </header>
	        </article>
            <?php endwhile; ?>

        </div>

        <hr>
        <?php get_footer(); ?>
    </div>
    <script src="<?php echo $pbs_dir; ?>/js/bootstrap.js"></script>
    <?php wp_footer(); ?>
</body>
</html>
