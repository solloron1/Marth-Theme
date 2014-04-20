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
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="<?php echo theme_url('/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo theme_url('/js/bootstrap-lightbox.min.js'); ?>"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <script src="<?php echo theme_url('js/contact-validate.js'); ?>"></script>
  </body>
</html>
