<div class="logo">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo_site.png" alt="<?php bloginfo() ?>" class="img-responsive">
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
  <div class="social">
    <a href="https://www.facebook.com/ageplanpropagandaintegrada/?fref=ts" target="_blank">
      <i class="fa fa-facebook-official" aria-hidden="true"></i>
    </a>
    <a href="https://www.instagram.com/ageplanpropaganda/" target="_blank">
      <i class="fa fa-instagram" aria-hidden="true"></i>
    </a>
  </div>
  <div class="endereco">
    Rua Alagoas, 1314, conjunto 1308/1318 <br>
    Savassi <br>
    Belo Horizonte | MG
  </div>
</div>
