<?php $pbs_dir = get_template_directory_uri(); ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

    <?php get_template_part( 'header', 'menu' ); ?>

    <div class="container">
        <?php get_header( 'unit' ); ?>
        <div class="row-fluid">
            <?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>
            <?php get_sidebar( 'main' ); ?>
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
			            <h2 class="entry-title"><?php the_title(); ?></h2>
			            <?php else: ?>
    			        <h2 class="entry-title">
	    			        <a href="<?php the_permalink(); ?>"
		    		        title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'pure_bootstrap' ), the_title_attribute( 'echo=0' ) ) ); ?>"
	                        rel="bookmark"><?php the_title(); ?></a>
			            </h2>
			            <?php endif; ?>

                        <?php if ( comments_open() ) : ?>
                        <div class="comments-link">
                            <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'pure_bootstrap' ) . '</span>', __( '1 Reply', 'pure_bootstrap' ), __( '% Replies', 'pure_bootstrap' ) ); ?>
                        </div>
                        <?php endif; ?>
    		        </header>
                    
                    <?php if ( is_search() ) : ?>
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>
                    <?php else : ?>
                    <div class="entry-content">
                        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'pure_bootstrap' ) ); ?>
                        <?php wp_link_pages( array(
                            'before'    => '<ul class="pager" id="pager-'.get_the_ID().'">',
                            'after'     => '</ul>',
                            'next_or_number'    => 'next',
                            'nextpagelink'  => __( 'Next page' ) . '&rarr;',
                            'previouspagelink'  => '&larr;' . __( 'Previous page' ),
                        ) ); ?>
                        <script>
                        $("#pager-<?php the_ID(); ?> a").wrap('<li></li>');
                        </script>
                    </div>
                    <?php endif; ?>
                    <footer class="entry-meta">
                        <?php pbs_entry_meta(); ?>
                        <?php edit_post_link( __( 'Edit', 'pure_bootstrap' ), '<span class="edit-link">', '</span>' ); ?>
                    </footer>
	            </article>
                <?php endwhile; ?>
            </div>

        </div>

        <hr>
        <?php get_footer(); ?>
    </div>
    <script src="<?php echo $pbs_dir; ?>/js/bootstrap.js"></script>
    <?php wp_footer(); ?>
</body>
</html>
