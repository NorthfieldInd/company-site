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

		<section class="home-testimonials">
		  <div class="wrapper">

		    <div class="testimonials-list">
          <?php
          $args = array( 'post_type' => 'testimonials', 'posts_per_page' => -1 );
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
          	<p class="testimonial-quote"><?php the_content(); ?><?php the_title(); ?></p>
          <?php endforeach; 
          wp_reset_postdata();?>
		    </div>
		    
		    <div class="testimonials-logos">
		    </div>
		    
		  </div>
		</section>

    <?php // get_template_part( 'partials/featured-posts' ); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>