<?php if ( post_password_required() ) 
        return; ?>

<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
    <h3 class="comments-title">
        <?php
            printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'pure_bootstrap' ),
                number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
        ?>
    </h3>

    <ol class="commentlist">
        <?php wp_list_comments( array( 'callback' => 'twentytwelve_comment', 'style' => 'ol' ) ); ?>
    </ol>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <nav id="comment-nav-below" class="navigation">
        <h3 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'pure_bootstrap' ); ?></h3>
        <ul class="pager">
            <li class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'pure_bootstrap' ) ); ?></li>
            <li class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'pure_bootstrap' ) ); ?></li>
        </ul>
    </nav>
    <?php endif; ?>

    <?php if ( ! comments_open() && get_comments_number() ) : ?>
    <p class="nocomments"><?php _e( 'Comments are closed.', 'pure_bootstrap' ); ?></p>
    <?php endif; ?>

    <?php endif; //have_comments() ?>

    <?php comment_form(); ?>
</div>
