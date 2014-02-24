<?php theme_include('header'); ?>
  
  <div class="col-lg-6 col-lg-offset-3 centered contact-heading">
    <h2><?php echo page_title(); ?></h2>
    <hr>
    <?php echo page_content(); ?>
  </div>
  <div class="col-lg-8 col-lg-offset-2 contact-form">
    <form method="post" action="<?php echo current_url(); ?>" role="form">
      <div class="form-group">
        <input type="text" class="form-control" name="InputName" value="<?php echo Input::previous('InputName'); ?>" placeholder="Your Name">
      </div>
      <div class="form-group">
        <input type="email" class="form-control" name="InputEmail" value="<?php echo Input::previous('InputEmail'); ?>" placeholder="Your Email">
      </div>
      <textarea class="form-control" rows="5" name="InputMessage" placeholder="Your Message"><?php echo Input::previous('InputMessage'); ?></textarea>
      <br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

<?php theme_include('footer'); ?>
