<!DOCTYPE HTML>
<!--[if lt IE 9]>
  <script src="<?php echo theme_url('/js/html5shiv.min.js'); ?>"></script>
  <script src="<?php echo theme_url('/js/respond.js'); ?>"></script>
<![endif]-->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Andrew Loreaux - <?php echo page_title(); ?></title>
    <link rel="stylesheet" href="<?php echo theme_url('/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo theme_url('/css/bootstrap-lightbox.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
  </head>
  <body class="<?php echo body_class(); ?>">
    <!-- Added wrap so I could push footer to bottom of page -->
    <div id="wrap">
      <header class="navbar navbar-inverse navbar-static-top" role="banner">
        <div class="container">
          <div class="navbar-header">
            <!-- Used to get menu that will collaspse on mobile devices -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainnav">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>
          </div>
          <?php theme_include('nav'); ?>
        </div>
      </header>
      <div class="container pt">
