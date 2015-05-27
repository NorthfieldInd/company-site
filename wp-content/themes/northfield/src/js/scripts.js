$(function(){

  mobileNav = function() {
    var mobileBtn = $('.btn-mobile');
    var mainMenu = $('.menu-menu-1-container');
    mobileBtn.on('click', function(e){
      e.preventDefault();
      mainMenu.toggleClass('show');
      $(this).toggleClass('active');
    });
  }
  
  heroSlider = function() {
    $('.home-hero .slider').bxSlider({
      mode: 'fade',
      auto: true,
      pause: 5000,
      controls: false
    });
  }

  testimonialSlider = function() {
    $('.home-testimonials .slider').bxSlider({
      mode: 'fade',
      auto: true,
      pause: 5000,
      pager: false,
      nextText: '<svg class="icon-next"><use xlink:href="#icon-next" /></svg>',
      prevText: '<svg class="icon-prev"><use xlink:href="#icon-prev" /></svg>',
    });
  }
    
  $(window).on('load', function() {
    $('.animate').addClass('fade-in');
  });
  
  $(".body").fitVids();
  
  mobileNav();
  heroSlider();
  testimonialSlider();

});


