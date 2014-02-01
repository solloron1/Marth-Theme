<?php theme_include('header'); ?>

  <section id="article-<?php echo article_id(); ?>">
    <h1><?php echo article_title(); ?></h1>
    <article>
      <?php echo article_markdown(); ?>
    </article>
  </section>

<?php theme_include('footer'); ?>
