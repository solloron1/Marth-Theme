<?php theme_include('header'); ?>

  <div class="col-lg-10 col-lg-offset-1">
    <?php while(categories()): ?>
      <?php if(category_title() == page_title()): ?>
        <? /*<h1><?php echo category_title(); ?></h1>*/?>
        <?php while(marth_latest_posts(category_id())): ?>
          <h2>
            <?php echo article_title(); ?>
          </h2>
          <?php echo article_markdown(); ?>
        <? endwhile; ?>
      <?php endif; ?>
    <?php endwhile; ?>
  </div>

<?php theme_include('footer'); ?>
