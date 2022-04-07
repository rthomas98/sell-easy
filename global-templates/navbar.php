<nav id="main-nav" class="fixed-top navbar navbar-expand-lg navbar-light">
  <div class="container d-flex align-items-center">
    <a class="navbar-brand mt-3" href="<?php echo site_url("/"); ?>">
		<img class="img-fluid mb-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/SellEasyLogo-white.png" alt="" width="150">
	</a>
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