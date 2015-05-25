<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<section class="hero home-hero">
		  <div class="slider">
  		  <div class="slide slide-1">
    		  <div class="wrapper">
      			<h1><?php the_field('home_hero_title_1'); ?></h1>
    		  </div>
  		  </div>
  		  <div class="slide slide-2">
    		  <div class="wrapper">
      			<h1><?php the_field('home_hero_title_2'); ?></h1>
    		  </div>
  		  </div>
  		  <div class="slide slide-3">
    		  <div class="wrapper">
      			<h1><?php the_field('home_hero_title_3'); ?></h1>
    		  </div>
  		  </div>
		  </div>
		</section>

		<section class="home-products">
		  <div class="wrapper">
		  
		    <div class="row">
  		    <div class="col-1-3">
      			<?php the_field('home_product_block_1'); ?>
  		    </div>
  		    <div class="col-1-3">
      			<?php the_field('home_product_block_2'); ?>
  		    </div>
  		    <div class="col-1-3">
      			<?php the_field('home_product_block_3'); ?>
  		    </div>
		    </div>
		  
		  </div>
		</section>
		
		<section class="home-solutions">
		  <div class="wrapper">
		  
		    <div class="home-solutions-logos">
		      <div class="logo-northfield">
		        <img src="<?php echo get_template_directory_uri(); ?>/src/images/logo.svg" alt="Northfield Industries">
		      </div>
		      <div class="logo-solutions">
		        <svg class="logo-total-solutions"><use xlink:href="#logo-total-solutions" /></svg>
		      </div>
		    </div>
		  
        <p class="home-solutions-content"><?php the_field('home_total_solutions'); ?></p>
        
        <ul class="solutions-list">
          <li>
            <div class="icon">
              <svg class="icon-truck"><use xlink:href="#icon-truck" /></svg>
            </div>
            <h4>On Time Shipment</h4>
          </li>
          <li>
            <div class="icon">
              <svg class="icon-boxes"><use xlink:href="#icon-boxes" /></svg>
            </div>
            <h4>30 Day Safety Stock</h4>
          </li>
          <li>
            <div class="icon">
              <svg class="icon-price"><use xlink:href="#icon-price" /></svg>
            </div>
            <h4>90 Day Price Guarantee</h4>
          </li>
          <li>
            <div class="icon">
              <svg class="icon-time"><use xlink:href="#icon-time" /></svg>
            </div>
            <h4>24 Hour Response Time</h4>
          </li>
          <li>
            <div class="icon">
              <svg class="icon-fast-track"><use xlink:href="#icon-fast-track" /></svg>
            </div>
            <h4>Fast Track On-Boarding</h4>
          </li>
        </ul>
        
        <ul class="home-solutions-links">
          <li><a href="" class="btn">Learn More</a></li>
          <li><a href="" class="btn">Fast Track</a></li>
        </ul>
        
		  </div>
		</section>


		<section class="home-testimonials">
		  <div class="wrapper">
		  
		    <h2 class="section-title">Customer Testimonials</h2>

		    <div class="testimonials-list slider">
          <?php
          $args = array( 'post_type' => 'testimonials', 'posts_per_page' => -1 );
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
          	<div class="testimonial-quote">
          	  <?php the_content(); ?>
          	  <p class="testimonial-customer">&ndash; <?php the_title(); ?></p>
            </div>
          <?php endforeach;
          wp_reset_postdata();?>
		    </div>
		    
		    <ul class="testimonials-logos">
		      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-unicarriers.png" alt=""></li>
		      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-cnh.png" alt=""></li>
		      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-vermeer.png" alt=""></li>
		      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-bush-hog.png" alt=""></li>
		    </ul>
		    
		  </div>
		</section>
		
		<section class="bottom-section home-bottom-section">
		  <div class="wrapper">
		    <?php the_field('bottom_section'); ?>
		  </div>
		</section>

    <?php // get_template_part( 'partials/featured-posts' ); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>