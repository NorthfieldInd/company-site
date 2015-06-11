<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<section class="hero hero-products">
  	  <div class="wrapper">
  			<h1><?php the_field('prod_hero_title'); ?></h1>
  	  </div>
  	</section>
  	
  	<nav id="products-nav" class="products-nav">
  	  <ul>
  	    <li><a href="#products-section-1">Hubs and Spindles <span class="caret">></span></a></li>
  	    <li><a href="#products-section-2">Machining <span class="caret">></span></a></li>
  	    <li><a href="#products-section-3">Jacks <span class="caret">></span></a></li>
  	  </ul>
  	</nav>

  	<section id="products-section-1" class="products-section-1">
  	  <div class="table-row">
  			<div class="tablet-image tablet-visible">
			    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/products-hubs-spindles.jpg" alt="Hubs and Spindles">
  			</div>
  			<div class="col-1-2 col-content">
  			  <?php the_field('prod_content_section_1'); ?>
  			</div>
  			<div class="col-1-2 col-image tablet-hidden">
			    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/products-hubs-spindles.jpg" alt="Hubs and Spindles">
  			</div>
  	  </div>
  	</section>

  	<section id="products-section-2" class="products-section-2">
  	  <div class="table-row">
  			<div class="tablet-image tablet-visible">
			    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/products-machining.jpg" alt="Machining">
  			</div>
  			<div class="col-1-2 col-content">
  			  <?php the_field('prod_content_section_2'); ?>
  			</div>
  			<div class="col-1-2 col-image tablet-hidden">
			    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/products-machining.jpg" alt="Machining">
  			</div>
  	  </div>
  	</section>

  	<section id="products-section-3" class="products-section-3">
  	  <div class="table-row">
  			<div class="tablet-image tablet-visible">
			    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/products-jacks.jpg" alt="Jacks">
  			</div>
  			<div class="col-1-2 col-content">
  			  <?php the_field('prod_content_section_3'); ?>
  			</div>
  			<div class="col-1-2 col-image tablet-hidden">
			    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/products-jacks.jpg" alt="Jacks">
  			</div>
  	  </div>
  	</section>

  	<section class="bottom-section">
  	  <div class="wrapper">
			  <?php the_field('prod_bottom_section'); ?>
  	  </div>
  	</section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>