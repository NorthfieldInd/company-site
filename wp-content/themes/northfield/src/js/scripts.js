$(function(){

  mobileNav = function() {
    var mobileBtn = $('.btn-mobile');
    var mainMenu = $('.menu-main-menu-container');
    mobileBtn.on('click', function(e){
      e.preventDefault();
      mainMenu.toggleClass('show');
      $(this).toggleClass('active');
    });
  }
  
  projectSlider = function() {
    $('.home-hero .slider').bxSlider({
      mode: 'fade',
      auto: true,
      pause: 5000,
      controls: false
    });
  }
  
  $(window).on('load', function() {
    $('.animate').addClass('fade-in');
  });
  
  $(".body").fitVids();
  
  mobileNav();
  projectSlider();

});


