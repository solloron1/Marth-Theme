<?php theme_include('header'); ?>

  <div class="col-lg-10 col-lg-offset-1">
    <?php if(has_posts()): ?>
      <?
      $count = 1;
      while (posts() && $count <= 4):
      ?>
        <article>
          <div class="panel panel-default">
            <div class="panel-heading">
              <?php echo article_title(); ?>
            </div>
            <div class="panel-body">
              <?php echo article_markdown(); ?>
            </div>
            <div class="panel-footer">
              <a class="pull-right" href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><span class="glyphicon glyphicon-chevron-right"></span></a>
              <div class="clearfix"></div>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
      <?php if(has_pagination()): ?>
        <div class="pagination col-lg-2">
          <?php echo posts_prev(); ?>
        </div>
        <div class="pagination col-lg-2 col-lg-offset-8">
          <div class="pull-right">
            <?php echo posts_next(); ?>
          </div>
        </div>
      <?php endif; ?>
    <?php else: ?>
      <p>Looks like I have some writing to do!</p>
    <?php endif; ?>
  </div>

<?php theme_include('footer'); ?>
