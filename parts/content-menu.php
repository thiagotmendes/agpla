<div class="logo">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="<?php bloginfo() ?>">
  </a>
</div>

<div class="menu-lateral">
  <?php
    $args = array(
      'theme_location' => 'top-bar',
      'menu_class' => 'nav navbar-nav menu-site',
      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
      'walker'	 => new wp_bootstrap_navwalker()
    );
    wp_nav_menu( $args );
  ?>
</div>
