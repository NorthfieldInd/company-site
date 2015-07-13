
      <footer id="footer" class="footer">
        <div class="wrapper">

          <nav class="footer-nav">
        			<?php wp_nav_menu( array('menu'=>'3') ); ?>
          </nav>

          <p class="footer-contact"><span class="footer-address">700 Wiley Farm Court,</span> Schaumburg, IL 60173 <span class="bullet">&bull;</span> <span class="footer-phone">Phone <?php the_field('contact_phone', 11); ?></span> <span class="bullet">&bull;</span> <span class="footer-fax">Fax <?php the_field('contact_fax', 11); ?></span> <span class="bullet">&bull;</span> Email <a href="mailto:<?php the_field('contact_email', 11); ?>"><?php the_field('contact_email', 11); ?></a></p>

          <p class="footer-sub-co">Please visit our subsidiary company for more services at <a href="http://www.dnmachining.com" target="_blank">dnmachining.com</a></p>

          <p class="footer-copyright">&copy;<?php echo date('Y'); ?> Northfield Industries</p>

        </div>
      </footer>

    </div>

  	<?php wp_footer(); ?>

    <script src="<?php bloginfo('template_directory'); ?>/dist/js/main.min.js"></script>
  </body>
</html>