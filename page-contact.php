<?php theme_include('header'); ?>
  
  <div class="col-lg-6 col-lg-offset-3 centered heading">
    <h2><?php echo page_title(); ?></h2>
    <hr>
    <?php echo marth_pagetag(page_slug()); ?>
  </div>
  <div class="col-lg-8 col-lg-offset-2 contact-form">
    <div id="success" class="alert alert-success alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
        <span class="glyphicon glyphicon-remove"></span>
      </button>
      Thank You! Your message has been sent!
    </div>
    <div id="error" class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
        <span class="glyphicon glyphicon-remove"></span>
      </button>
      There was an error with your message!
    </div>
    <form  id="contact" name="contact" action="<?php echo current_url(); ?>" method="post" role="form">
      <div class="form-group">
        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
      </div>
      <div class="form-group">
        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
      </div>
      <div class="form-group">
        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Your Message" required></textarea>
      </div>
      <button id="submit" name="submit" type="submit" class="btn btn-primary" value="Send">Submit</button>
    </form>
  </div>

<?php theme_include('footer'); ?>
