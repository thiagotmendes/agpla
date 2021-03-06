<?php
if (is_front_page()) {
  $argsProjetos = array(
    'post_type' => 'projeto',
    'posts_per_page' => 6,
    'offset' => -3
  );
} else {
  $argsProjetos = array(
    'post_type' => 'projeto',
    'posts_per_page' => 30
  );
}

$projetoHome = new wp_query($argsProjetos);
if($projetoHome->have_posts()):
  while($projetoHome->have_posts()): $projetoHome->the_post();
   $termoPostCorrent = get_the_terms($post->ID,'categoria-projeto');
  ?>
    <div class="col-md-4 <?php echo $termoPostCorrent[0]->term_id ?> grid-item">
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
wp_reset_query();
?>
