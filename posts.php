<?php theme_include('header'); ?>

  <div class="col-lg-6 col-lg-offset-3 centered heading">
    <h2><?php echo page_title(); ?></h2>
    <hr>
    <?php echo marth_pagetag(page_slug()); ?>
  </div>
  <div class="col-lg-10 col-lg-offset-1">
    <?php if(has_posts()): ?>
      <?/*
      $count = 1;
      while (posts() && $count <= 4):
      */?>
      <?php posts(); ?>
        <article>
          <div class="panel panel-default">
            <div class="panel-heading">
              <?php echo article_title(); ?>
            </div>
            <div class="panel-body">
              <?php echo article_description(); ?>
            </div>
            <div class="panel-footer">
              <a class="pull-right" href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><span class="glyphicon glyphicon-chevron-right"></span></a>
              <div class="clearfix"></div>
            </div>
          </div>
        </article>
      <?php $i = 0; while(posts()): ?>
      <?php $bg = sprintf('background: hsl(215, 28%%, %d%%);', round(((++$i / posts_per_page()) * 20) + 20)); ?>
        <article>
          <div class="panel panel-default">
            <div class="panel-heading">
              <?php echo article_title(); ?>
            </div>
            <div class="panel-body">
              <?php echo article_description(); ?>
            </div>
            <div class="panel-footer">
              <a class="pull-right" href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><span class="glyphicon glyphicon-chevron-right"></span></a>
              <div class="clearfix"></div>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
      <?php if(has_pagination()): ?>
        <div id="prev"class="col-lg-2">
          <?php echo posts_prev(); ?>
        </div>
        <div class="col-lg-2 col-lg-offset-8">
          <div id="next" class="pull-right">
            <?php echo posts_next(); ?>
          </div>
        </div>
      <?php endif; ?>
    <?php else: ?>
      <p>Looks like I have some writing to do!</p>
    <?php endif; ?>
  </div>

<?php theme_include('footer'); ?>
