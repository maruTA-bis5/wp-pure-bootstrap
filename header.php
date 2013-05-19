<?php $pbs_dir = get_template_directory_uri(); ?>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php 
    wp_title( '|', true, 'right' ); 
    bloginfo( 'name' );
    $site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- Le styles -->
    <?php $header_image = get_header_image();
      if ( ! empty( $header_image ) ) : ?>
    <style type="text/css">
   	  .site-custom-header {
   	  	  background-image: url(<?php echo $header_image; ?>);
   	  	  width: auto;
   	  	  height: auto;
   	  	  background-size:100% auto;
   	  	  margin:0 auto;
   	  }
	  .site-title a:hover, .site-title a {
	  	  text-decoration: none;
	  }
   	  @media screen and (max-width: 960px) {
   	  	  .site-custom-header h1, .site-custom-header h2 {
   	  	  	  display: none;
   	  	  }
   	  }
   	</style>
    <?php endif; ?>
    <link href="<?php echo $pbs_dir; ?>/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="<?php echo $pbs_dir; ?>/css/bootstrap-responsive.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
  </head>