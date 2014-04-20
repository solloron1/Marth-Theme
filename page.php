<?php theme_include('header'); ?>
  
  <div class="col-lg-6 col-lg-offset-3 centered heading">
    <h2><?php echo page_title(); ?></h2>
    <hr>
    <?php echo marth_pagetag(page_slug()); ?>
  </div>
  <div class="col-lg-10 col-lg-offset-1">
    <?php echo page_content(); ?>
  </div>

<?php theme_include('footer'); ?>
