<?php if ( is_active_sidebar( 'sidebar-front' ) ) : ?>
  <div class="row">
  	<?php dynamic_sidebar( 'sidebar-front' ); ?>
  </div>
  <script>
	<?php
		$wig_num = wp_widget_num_class('sidebar-front','','',false);
		if ($wig_num <= 1) $wig_class = 'span12';
		else if ($wig_num == 2) $wig_class = 'span6';
		else $wig_class = 'span4';
	?>
	$(".sidebar-front-widget").addClass("<?php echo $wig_class; ?>");
  </script>
<?php endif; 