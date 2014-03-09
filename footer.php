      </div>
      <!-- Used to push footer to the bottom of page -->
      <div class="push"></div>
    </div>
    <footer class="navbar navbar-default">
      <div class="container">
        <p class="navbar-text"><small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?></small></p>
        <?php theme_include('social'); ?>
      </div>
    </footer>
    <!-- Added JS to the bottom for faster loading -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php echo theme_url('/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo theme_url('/js/bootstrap-lightbox.min.js'); ?>"></script>
    <script src="<?php echo theme_url('/js/jBootValidator.min.js'); ?>"></script>
  </body>
</html>
