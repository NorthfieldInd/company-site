<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<section class="hero hero-fast-track">
  	  <div class="wrapper">
  			<h1><?php the_field('fast_hero_title'); ?></h1>
  	  </div>
  	</section>

  	<section class="fast-track-section-1">
  	  <div class="table-row">
  			<div class="col-1-2 col-content">
  			  <?php the_field('fast_content_section_1'); ?>
  			</div>
  			<div class="col-1-2 col-image">
  			</div>
  	  </div>
  	</section>

  	<section class="fast-track-section-2">
  	  <div class="table-row table-row-col-image-left">
  			<div class="col-1-2 col-image">
  			</div>
  			<div class="col-1-2 col-content">
  			  <?php the_field('fast_content_section_2'); ?>
  			</div>
  	  </div>
  	</section>

  	<section class="fast-track-section-3">
  	  <div class="table-row">
  			<div class="col-1-2 col-content">
  			  <?php the_field('fast_content_section_3'); ?>
  			  <h4>Download Forms</h4>
  			  <ul class="forms-list">
  			    <li><a href="<?php the_field('fast_quote_form'); ?>"><svg class="icon-file"><use xlink:href="#icon-file" /></svg> Quote Form</a></li>
  			    <li><a href="<?php the_field('fast_credit_application_form'); ?>"><svg class="icon-file"><use xlink:href="#icon-file" /></svg> Credit Application Form</a></li>
  			    <li><a href="<?php the_field('fast_tax_form'); ?>"><svg class="icon-file"><use xlink:href="#icon-file" /></svg> Tax Form</a></li>
  			    <li><a href="<?php the_field('fast_iso_certification_form'); ?>"><svg class="icon-file"><use xlink:href="#icon-file" /></svg> ISO Certificate Form</a></li>
  			  </ul>
  			</div>
  			<div class="col-1-2 col-image">
  			</div>
  	  </div>
  	</section>

  	<section class="bottom-section">
  	  <div class="wrapper">
			  <?php // the_field('fast_bottom_section'); ?>
  	  </div>
  	</section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>