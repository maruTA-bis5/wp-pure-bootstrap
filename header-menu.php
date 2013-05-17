    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
          <?php if ( has_nav_menu( 'primary' ) ) : ?>
          <?php wp_nav_menu( array( 'menu' => 'primary', 'container_class' => 'nav-collapse collapse', 'menu_class' => 'nav' ) ) ; ?>
          <?php else : ?>
          <?php wp_nav_menu( array( 'menu' => 'primary', 'menu_class' => 'nav-collapse collapse NAVBAR-TOP' ) ); ?>
          <script>
          $(".NAVBAR-TOP ul").addClass('nav');
    	  </script>
    	  <?php endif; ?>
        </div>
        
      </div>
    </div>