$(document).ready(function(){

  // Menu toggler click
  $('.menu-toggler').click(
    function() {
    // Cambia al ícono de cerrar
      $(this).toggleClass('open');
    }
  );

  $('.menu-toggler').on('click', function(){

    // Si el ancho es menos a 768px
    var width = $(window).width();
    if (width < 992){
      // Si el contenedor tiene una altura menor a 100px
      // Agranda el alto del mismo contenedor a "X"px
      if ($('.main-header-wrapper').height() < 100){
        $('.main-header-wrapper').animate({
          height: "360px"
        }, 600);
      // Si no lo achica al tamaño normal
      } else {
        $('.main-header-wrapper').animate({
          height: "85px"
        }, 600);
      }
    // Si es mayor que 768
    } else {
      // Si el contenedor tiene una altura menor a 100px
      // Agranda el alto del mismo contenedor a "X"px
      if ($('.main-header-wrapper').height() < 100){
        $('.main-header-wrapper').animate({
          height: "405px"
        }, 700);
      // Si no lo achica al tamaño normal
      } else {
        $('.main-header-wrapper').animate({
          height: "85px"
        }, 700);
      }
    }

  });

  // HEADER hide/show
  $('.headroom').headroom({
   'tolerance': {
    'down' : 10,
    'up' : 20
   },
   'offset' : 205,
   'classes': {
    'initial': 'headroom',
    'pinned': 'slideDown',
    'unpinned': 'slideUp'
   }
  });

  var lastScrollTop = 0;
  $(window).scroll(function(event){
     var st = $(this).scrollTop();
     if (st > lastScrollTop){
       $('.blog-menu-dropdown').slideUp(300, "linear");
       $('.blog-search-dropdown').slideUp(300, "linear");
     }
     lastScrollTop = st;
  });

  //Dropdown
  var width = $(window).width();
  if (width > 991){
    $("#dropdown, #dropdownServices").hover(function(){
        $("#dropdownServices").slideDown("1000");
        clearTimeout(debounce);
    });

    $("#dropdown, #dropdownServices").mouseleave (function() {
        debounce = setTimeout(closeMenu, 350);
    });

    var debounce;
    var closeMenu = function(){
        $("#dropdownServices").slideUp("1000");
        clearTimeout(debounce);
    }
  }

  //Slides index
  // var options = {
  //   swipe: false,
  //   magneticSwipe: false,
  //   transition: "slide",
  //   animateDuration: 700,
  //   interval: 6000,
  //   slideTracker: false,
  //   pauseOnHover: true
  // }
  // $(".slider").simpleSlider(options);
  //
  // // Obtiene el data-index number y lo cambia
  // $('.present-list-item').click(function(){
  //   var dataIndex = $(this).data('index');
  //   var slider = $(".slider").data("simpleslider");
  //   slider.nextSlide(dataIndex);
  //   // alert(dataIndex);
  // });

  // B L O G

  // Activa el Buscador y hace Focus en el input
  $('#searchToggler').click(function(){
    if ($('.blog-menu-dropdown').is(':visible')) {
      $('.blog-menu-dropdown').slideUp(300, "linear");
      $('.blog-search-dropdown').delay( 300 ).slideToggle(300, "linear");
      $('.searchInput').focus();
    } else {
      $('.blog-search-dropdown').slideToggle(300, "linear");
      $('.searchInput').focus();
    }
  });

  // Activa el Menú
  $('#blogMenuToggler').click(function(){
    if ($('.blog-search-dropdown').is(':visible')) {
      $('.blog-search-dropdown').slideUp(300, "linear");
      $('.blog-menu-dropdown').delay( 300 ).slideToggle(500, "linear");
    } else {
      $('.blog-menu-dropdown').slideToggle(500, "linear");
    }
  });

  // Slider Inicio
  $('.slider').bxSlider({
    // mode: 'fade',
    stopAutoOnClick: true,
    easing: 'ease-in-out',
    pager: false,
    auto: true,
    pause: 4000,
  });

});
//
//
//
//
//
//
//
//
//
//
