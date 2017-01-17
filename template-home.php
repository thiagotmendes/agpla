<?php /* template name: Home */ ?>
<?php get_header() ?>
  <div class="wrapper-content">
    <div class="container-fluid">
      <div class="row">
        <?php echo do_shortcode('[rev_slider alias="home"]') ?>
      </div>

      <div class="row grid">
        <?php get_template_part('parts/content','gridProjetos') ?>
      </div>
    </div>
  </div>
<?php get_footer() ?>
