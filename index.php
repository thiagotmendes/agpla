<?php get_header() ?>
  <div class="wrapper-content">
    <div class="container-fluid">
      <div class="row grid">
        <?php
        $argsProjetos = array(
          'post_type' => 'projeto'
        );
        $projetoHome = new wp_query($argsProjetos);
        if($projetoHome->have_posts()):
          while($projetoHome->have_posts()): $projetoHome->the_post();
          ?>
            <div class="col-md-4 grid-item">
              <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
              </a>
              <div class="info" onclick="location.href='<?php the_permalink() ?>'">
                <div class="info-table">
                  <div class="info-table-cell">
                      <h2 class="titulo-projeto"><?php the_title() ?></h2>
                  </div>
                </div>
              </div>
            </div>
          <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
<?php get_footer() ?>
