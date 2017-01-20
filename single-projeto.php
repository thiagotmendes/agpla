<?php get_header() ?>
  <div class="wrapper-content">
    <div class="container-fluid">
      <div class="row conteudo-single">
        <?php if (have_posts()): ?>
          <?php while(have_posts()): the_post()  ?>
            <div class="col-md-7">
              <?php
              /* VIDEO */
                while(have_rows('campo_de_videos')): the_row();
                  echo '<div class="embed-responsive embed-responsive-16by9">';
                    the_sub_field('videos');
                  echo "</div>";
                endwhile;
                /* /VIDEO */
              $galeria = get_field('galeria');
              if(!empty($galeria)):
                echo "<div class='galeria-single'>";
                foreach ($galeria as $galImagem) {
                ?>
                  <img src="<?php echo $galImagem['url'] ?>" alt="<?php echo $galImagem['alt'] ?>" class="img-responsive">
                <?php
                }
                echo "</div>";
              else:
                the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) );
              endif;
              ?>
            </div>
            <div class="col-md-5">
              <h1><?php the_title() ?></h1>
              <?php the_content() ?>
            </div>
          <?php endwhile ?>
        <?php endif; ?>
      </div>

    </div>
  </div>
<?php get_footer() ?>
