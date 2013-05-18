 <!-- Main hero unit for a primary marketing message or call to action -->
<article id="post-<?php the_ID(); ?>" <?php post_class( "hero-unit" )?>>
	<header class="entry-header">
  		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>
	<div class="entry-content">
	 	<?php the_content(); ?>
	 	<?php wp_link_pages( array(
	 		'before'	=> '<ul class="pager" id="pager-'.get_the_ID().'">',
	 		'after'		=> '</ul>',
	 		'next_or_number'	=> 'next',
	 		'nextpagelink'	=> __('Next page') . '&rarr;',
	 		'previouspagelink'	=> '&larr;' . __('Previous page'),
	 	) ); ?>
	 	<script>
	 	$("#pager-<?php the_ID(); ?> a").wrap('<li></li>');
		</script>
	 </div>
	
</article>