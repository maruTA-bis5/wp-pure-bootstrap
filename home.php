
<?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>
<div class="span10">
<?php else: ?>
<div class="span12">
<?php endif; ?>
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
				   title="<?php echo esc_attr( spintf( __( 'Permalink to %s', 'pure_bootstrap' ), the_title_attribute( 'echo=0' ) ) ); ?>"
	               rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; ?>
		</header>
	</article>
</div>