<div class="row-fluid">
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
</div>
