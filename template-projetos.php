<?php /* template name: Projetos */ ?>
<?php get_header() ?>
<div class="wrapper-content">
  <div class="container-fluid">
    <h1><?php the_title() ?></h1>
    <div class="button-group filter-button-group">
      <button data-filter="*" class="btn btn-projeto">Todos</button>
      <?php
      $termo = get_terms(
        array(
          'taxonomy' => 'categoria-projeto',
          'hide_empty' => false,
        )
      );
      foreach ($termo as $termPort) {
        ?>
        <button data-filter=".<?php echo $termPort->term_id ?>" class="btn btn-projeto">
          <?php echo $termPort->name ?>
        </button>
        <?php
      }
      ?>
    </div>
    <div class="row grid">
      <?php get_template_part('parts/content','gridProjetos') ?>
    </div>
  </div>
</div>
<?php get_footer() ?>
