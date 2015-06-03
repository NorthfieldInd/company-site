<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<section class="main">
  	  <div class="wrapper">
  	  
  	    <section class="page-content">
      		<h1 class="page-title"><?php the_title(); ?></h1>
          <div class="body">
        		<?php the_content(); ?>
          </div>
  	    </section>
  	    
        <?php get_sidebar(); ?>
        
  	  </div>
  	</section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>