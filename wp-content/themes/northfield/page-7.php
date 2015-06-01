<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<section class="hero hero-products">
  	  <div class="wrapper">
  			<h1><?php the_field('prod_hero_title'); ?></h1>
  	  </div>
  	</section>

  	<section class="products-section-1">
  	  <div class="table-row">
  			<div class="col-1-2 col-content">
  			  <?php the_field('prod_content_section_1'); ?>
  			</div>
  			<div class="col-1-2 col-image">
  			</div>
  	  </div>
  	</section>

  	<section class="products-section-2">
  	  <div class="table-row">
  			<div class="col-1-2 col-image">
  			</div>
  			<div class="col-1-2 col-content">
  			  <?php the_field('prod_content_section_2'); ?>
  			</div>
  	  </div>
  	</section>

  	<section class="products-section-3">
  	  <div class="table-row">
  			<div class="col-1-2 col-content">
  			  <?php the_field('prod_content_section_3'); ?>
  			</div>
  			<div class="col-1-2 col-image">
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