  
      <footer id="footer" class="footer">
        <div class="wrapper">
        
          <nav class="footer-nav">
        			<?php wp_nav_menu( array('menu'=>'2') ); ?>
          </nav>
          
          <p class="footer-contact">700 Wiley Farm Court, Schaumburg, IL 60173 &bull; Phone +1(847)755-0777 &bull; Fax +1(847)755-0779 &bull; Email koliver@northfieldind.com</p>
          
          <p class="footer-copyright">&copy;<?php echo date('Y'); ?> Northfield Industries <a href="http://bradsawicki.com" target="_blank">Web Development</a>: Brad Sawicki | Web Design: Frohlichstein Inc.</p>
  
        </div>
      </footer>
    
    </div>
  
  	<?php wp_footer(); ?>
  	
    <script src="<?php bloginfo('template_directory'); ?>/dist/js/main.js"></script>
  </body>
</html>