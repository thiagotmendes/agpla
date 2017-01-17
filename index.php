<?php get_header() ?>
  <div class="wrapper-content">
    <div class="container-fluid">
      <div class="row grid">
        <?php
        if(have_posts()):
          while(have_posts()): the_post();
          ?>
            <div class="col-md-12">
              <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
              </a>
              <div class="conteudo-blog">
                <h2><?php the_title() ?></h2>
                <p><?php the_excerpt_limit(30) ?></p>
                <a href="<?php the_permalink() ?>" class="btn btn-info">Leia Mais</a>
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
