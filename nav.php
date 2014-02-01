<nav class="collapse navbar-collapse" id="mainnav">
  <?php if(has_menu_items()): ?>
    <ul class="nav navbar-nav navbar-right">
    <?php while(menu_items()): ?>
      <li>
        <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
          <?php echo menu_name(); ?>
        </a>
      </li>
    <?php endwhile; ?>
    </ul>
  <?php endif; ?>
</nav>
