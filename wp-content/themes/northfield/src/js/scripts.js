$(function(){

  mobileNav = function() {
    var mobileBtn = $('.btn-mobile');
    var mainMenu = $('.main-nav .menu-main-menu-container');
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

  gallerySlider = function() {
    $('.gallery-slider').bxSlider({
      mode: 'fade',
      auto: true,
      pause: 5000,
      controls: false
    });
  }

  navScroll = function() {
    var navLink = $('#products-nav a');

    navLink.on('click', function(e) {
      e.preventDefault();
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
      }
    });
  }

  $(window).on('load', function() {
    $('.animate').addClass('fade-in');
  });

  $(".body").fitVids();

  mobileNav();
  heroSlider();
  testimonialSlider();
  navScroll();
  gallerySlider();

});


