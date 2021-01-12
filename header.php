<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Site Name</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

    <?php wp_head(); ?>
</head>
<body id="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/background.jpg');" <?php body_class(); ?>>

<header>
    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>

    <nav class="menu">
      <div class="menu-branding">
        <div class="portrait" style="background-image: url('<?php the_field('portrait') ?>"></div>
      </div>
      <ul class="menu-nav">
        <li class="nav-item current">
        <a class="nav-link" href="<?php echo get_site_url(); ?>">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo get_site_url(); ?>/about/"> About Me</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo get_site_url(); ?>/work/" class="nav-link">
            My Work
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo get_site_url(); ?>/contact/" class="nav-link">
            How To Reach Me
          </a>
        </li>
      </ul>
    </nav>
  </header>