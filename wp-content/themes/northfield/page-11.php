<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<section class="main">
  	  <div class="wrapper padded">
  	  
  	    <section class="main-content">
      		<h1 class="page-title"><?php the_title(); ?></h1>
  		    <ul class="contact-info mobile-visible">
            <li>
              <div class="icon">
                <svg class="icon-marker"><use xlink:href="#icon-marker" /></svg>
              </div>
              <?php the_field('contact_address'); ?>
            </li>
            <li>
              <div class="icon">
                <svg class="icon-phone"><use xlink:href="#icon-phone" /></svg>
              </div>
              <?php the_field('contact_phone'); ?>
            </li>
            <li>
              <div class="icon">
                <svg class="icon-fax"><use xlink:href="#icon-fax" /></svg>
              </div>
              <?php the_field('contact_fax'); ?>
            </li>
            <li>
              <div class="icon">
                <svg class="icon-mail"><use xlink:href="#icon-mail" /></svg>
              </div>
              <a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a>
            </li>
          </ul>
          <div class="body">
        		<?php the_content(); ?>
          </div>
  	    </section>
  	    
        <aside id="sidebar" class="sidebar-right">
        
          <ul>
            <li class="widget widget-map mobile-hidden">
              <a href="https://goo.gl/maps/zw5bn" target="_blank"><img src="/wp-content/themes/northfield/dist/images/map.png" alt="Northfield Industries Location"></a>
            </li>
            <li class="widget widget-contact-info mobile-hidden">
              <ul class="contact-info">
                <li>
                  <div class="icon">
                    <svg class="icon-marker"><use xlink:href="#icon-marker" /></svg>
                  </div>
                  <?php the_field('contact_address'); ?>
                </li>
                <li>
                  <div class="icon">
                    <svg class="icon-phone"><use xlink:href="#icon-phone" /></svg>
                  </div>
                  <?php the_field('contact_phone'); ?>
                </li>
                <li>
                  <div class="icon">
                    <svg class="icon-fax"><use xlink:href="#icon-fax" /></svg>
                  </div>
                  <?php the_field('contact_fax'); ?>
                </li>
                <li>
                  <div class="icon">
                    <svg class="icon-mail"><use xlink:href="#icon-mail" /></svg>
                  </div>
                  <a href="mailto:<?php the_field('contact_email'); ?>" class="contact-email"><?php the_field('contact_email'); ?></a>
                </li>
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