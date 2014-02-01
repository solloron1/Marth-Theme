<?php theme_include('header'); ?>

  <div class="col-lg-10 col-lg-offset-1">
  <?php if(has_posts()): ?>
    <?
    $count = 1;
    while (posts() && $count <= 5):
    ?>
      <article>
        <h2>
          <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
        </h2>
        <?php echo article_markdown(); ?>
      </article>
    <?php endwhile; ?>
    <?php if(has_pagination()): ?>
      <?php echo posts_prev(); ?>
      <?php echo posts_next(); ?>
    <?php endif; ?>
  <?php else: ?>
    <p>Looks like I have some writing to do!</p>
  <?php endif; ?>
  </div>

<?php theme_include('footer'); ?>
