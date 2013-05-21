<?php // ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_post_thumbnail(); ?>
        <h2 class="entry-title"><?php the_title(); ?></h2>

        <?php if ( comments_open() ) : ?>
        <div class="comments-link">
            <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'pure_bootstrap' ) . '</span>', __( '1 Reply', 'pure_bootstrap' ), __( '% Replies', 'pure_bootstrap' ) ); ?>
        </div>
        <?php endif; ?>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array(
            'before'    => '<ul class="pager" id="pager-'.get_the_ID().'">',
            'after'     => '</ul>',
            'next_or_number'    => 'number',
            'nextpagelink'  =>  __( 'Next page' ) . '&rarr;',
            'previouspagelink'  => '&larr;', __( 'Previous page' ),
        ) ); ?>
        <script>
        $("#pager-<?php the_ID(); ?> a").wrap('<li></li>');
        </script>
    </div>
    
    <footer class="entry-meta">
        <?php pbs_entry_meta(); ?>
        <?php edit_post_link( __( 'Edit', 'pure_bootstrap' ), '<span class="edit-link">', '</span>' ); ?>

