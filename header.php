<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="author" content="<?php bloginfo('name'); ?>">

<!-- Bootstrap 4.0.0 -->
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome 5.0.6 -->
<script defer src="<?php bloginfo('template_url'); ?>/js/fontawesome.js"></script>

<!-- Custom Styles -->
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

<?php wp_head(); ?>

</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav">

      </ul>
      <ul class="navbar-nav ml-auto">
        <?php
          wp_nav_menu(array(
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker()
          ));
        ?>
      </ul>
    </div>
  </div>
</nav>





