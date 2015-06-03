<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<section class="main">
  	  <div class="wrapper padded">
  	  
  	    <section class="main-content">
      		<h1 class="page-title"><?php the_title(); ?></h1>
          <div class="body">
        		<?php the_content(); ?>
          </div>
  	    </section>
  	    
        <aside id="sidebar" class="sidebar-right">
        
          <ul>
            <li class="widget widget-map">
            </li>
            <li class="widget widget-contact-info">
              <ul>
                <li><?php the_field('contact_address'); ?></li>
                <li><?php the_field('contact_phone'); ?></li>
                <li><?php the_field('contact_fax'); ?></li>
                <li><?php the_field('contact_email'); ?></li>
              </ul>
            </li>
            <li class="widget widget-catalog">
              <?php the_field('contact_catalog_block'); ?>
            </li>
          </ul>
        
        </aside>

  	  </div>
  	</section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>