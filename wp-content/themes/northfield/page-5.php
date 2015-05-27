<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<section class="hero hero-solutions">
  	  <div class="wrapper">
	      <div class="logo-solutions">
	        <svg class="logo-total-solutions"><use xlink:href="#logo-total-solutions" /></svg>
	      </div>
  			<h1><?php the_field('sol_hero_title'); ?></h1>
  	  </div>
  	</section>

  	<section class="solutions-section-1">
  	  <div class="table-row">
  			<div class="col-1-2 col-content">
  			  <?php the_field('sol_content_section_1'); ?>
  			</div>
  			<div class="col-1-2 col-image">
  			  <div class="icon">
            <svg class="icon-truck"><use xlink:href="#icon-truck" /></svg>
          </div>
  			</div>
  	  </div>
  	</section>

  	<section class="solutions-section-2">
  	  <div class="table-row">
  			<div class="col-1-2 col-image">
  			  <div class="icon">
            <svg class="icon-boxes"><use xlink:href="#icon-boxes" /></svg>
          </div>
  			</div>
  			<div class="col-1-2 col-content">
  			  <?php the_field('sol_content_section_2'); ?>
  			</div>
  	  </div>
  	</section>

  	<section class="solutions-section-3">
  	  <div class="table-row">
  			<div class="col-1-2 col-content">
  			  <?php the_field('sol_content_section_3'); ?>
  			</div>
  			<div class="col-1-2 col-image">
  			  <div class="icon">
            <svg class="icon-price"><use xlink:href="#icon-price" /></svg>
          </div>
  			</div>
  	  </div>
  	</section>

  	<section class="solutions-section-4">
  	  <div class="table-row">
  			<div class="col-1-2 col-image">
  			  <div class="icon">
            <svg class="icon-time"><use xlink:href="#icon-time" /></svg>
          </div>
  			</div>
  			<div class="col-1-2 col-content">
  			  <?php the_field('sol_content_section_4'); ?>
  			</div>
  	  </div>
  	</section>

  	<section class="solutions-section-5">
  	  <div class="table-row">
  			<div class="col-1-2 col-content">
  			  <?php the_field('sol_content_section_5'); ?>
  			</div>
  			<div class="col-1-2 col-image">
  			  <div class="icon">
            <svg class="icon-fast-track"><use xlink:href="#icon-fast-track" /></svg>
          </div>
  			</div>
  	  </div>
  	</section>

  	<section class="bottom-section">
  	  <div class="wrapper">
			  <?php the_field('sol_bottom_section'); ?>
  	  </div>
  	</section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>