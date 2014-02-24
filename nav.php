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
      <li class="dropdown visible-xs">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Find Me <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li>
            <a href="https://www.facebook.com/aloreaux">Facebook</a>
            <a href="https://plus.google.com/+AndrewLoreaux">Google+</a>
            <a href="https://twitter.com/andrewloreaux">Twitter</a>
            <a href="https://linkedin.com/pub/andrew-loreaux/14/6bb/7a/">Linkedin</a>
            <a href="https://last.fm/user/solloron1">Last.fm</a>
          </li>
        </ul>
      </li>
    </ul>
  <?php endif; ?>
</nav>
