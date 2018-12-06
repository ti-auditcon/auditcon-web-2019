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
    if ($(window).width() < 768){
      // Si el contenedor tiene una altura menor a 100px
      // Agranda el alto del mismo contenedor a "X"px
      if ($('.main-header-wrapper').height() < 100){
        $('.main-header-wrapper').animate({
          height: "390px"
        }, 600);
      // Si no lo achica al tamaño normal
      } else {
        $('.main-header-wrapper').animate({
          height: "75px"
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

  //MARQUEE
  $('.marquee').marquee({
    //speed in milliseconds of the marquee
    speed: 100,
    //gap in pixels between the tickers
    gap: 50,
    //time in milliseconds before the marquee will start animating
    delayBeforeStart: 0,
    //'left' or 'right'
    direction: 'left',
    //true or false - should the marquee be duplicated to show an effect of continues flow
    duplicated: true,
    pauseOnHover: true
  });

});


