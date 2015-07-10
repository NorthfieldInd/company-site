<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
  	<meta charset="<?php bloginfo('charset'); ?>">
  	<!--[if IE]>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<![endif]-->
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title><?php wp_title( '|', true, 'right' ); ?></title>
  	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
  	<meta name="description" content="<?php bloginfo('description'); ?>" />
  	<link rel="icon" type="image/png" href="/wp-content/themes/northfield/dist/images/favicon.png">
  	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <script src="//use.typekit.net/wvq6nbh.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <script type="text/javascript" src="http://fast.fonts.net/jsapi/c9f3d264-6f01-4b53-95af-fb374ed4a35d.js"></script>
    <?php wp_head(); ?>
  	<!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class(); ?>>
    <?php get_template_part( 'partials/svg' ); ?>

  	<div class="container">

  		<header class="header">
  		  <div class="wrapper">
    			<div class="logo">
  			  <?php if (is_single(78)) { ?>
    			  <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-hubs.svg" alt="Northfield Industries"></a>
  			  <?php } elseif (is_single(80)) { ?>
    			  <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-jacks.svg" alt="Northfield Industries"></a>
    			<?php } else { ?>
    			  <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="Northfield Industries"></a>
  			  <?php } ?>
          </div>
      		<nav class="main-nav">
      			<?php wp_nav_menu( array('menu'=>'2') ); ?>
      		</nav>
  		  </div>
  		</header>
