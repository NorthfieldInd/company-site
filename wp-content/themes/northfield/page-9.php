<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<section class="hero">
  	  <div class="wrapper">
  			<h1><?php the_field('cap_hero_title'); ?></h1>
  	  </div>
  	</section>

  	<section class="capabilities-section-1">
  	  <div class="table-row">
  			<div class="col-1-2 col-content">
  			  <?php the_field('cap_content_section_1'); ?>
  			</div>
  			<div class="col-1-2 col-image">
  			</div>
  	  </div>
  	</section>

  	<section class="capabilities-section-2">
  	  <div class="table-row table-row-col-image-left">
  			<div class="col-1-2 col-image">
  			</div>
  			<div class="col-1-2 col-content">
  			  <?php the_field('cap_content_section_2'); ?>
  			</div>
  	  </div>
  	</section>

  	<section class="capabilities-section-3">
  	  <div class="table-row">
  			<div class="col-1-2 col-content">
  			  <?php the_field('cap_content_section_3'); ?>
  			</div>
  			<div class="col-1-2 col-image">
  			</div>
  	  </div>
  	</section>
  	
  	<section class="capabilities-maps">
  	  <h2 class="section-title">Worldwide Manufacturing Capabilities</h2>
  	</section>

  	<section class="bottom-section">
  	  <div class="wrapper">
			  <?php the_field('cap_bottom_section'); ?>
  	  </div>
  	</section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>