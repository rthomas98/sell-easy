<nav id="main-nav" class="fixed-top navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#">Sell Easy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php
		wp_nav_menu(
			array(
				'theme_location'  => 'main-menu',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ms-auto mb-2 mb-lg-0',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>
  </div>
</nav>