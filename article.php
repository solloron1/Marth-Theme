<?php theme_include('header'); ?>

  <div class="col-lg-10 col-lg-offset-1"> 
    <section id="article-<?php echo article_id(); ?>">
      <h2><?php echo article_title(); ?></h2>
      <article>
        <?php echo article_markdown(); ?>
      </article>
    </section>
  </div>

<?php theme_include('footer'); ?>
