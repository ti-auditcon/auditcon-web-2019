// //metodo para cambiar imagen y texto
var json = {
    "data": [
        { "h1":"Operación Renta 2018: <br>Te acompañamos en este desafío",
          "h6":"Consultoría y Asesoría",
          "image":"url('../img/backs/back_1.jpg')"
        },
        { "h1":"Auditcon se suma a la transformación Digital",
          "h6":"Innovación y Tecnología",
          "image":"url('../img/backs/back_2.jpg')"
        },
        { "h1":"Más de 30 años trabajando para hacer crecer las empresas",
          "h6":"Confianza y Seriedad",
          "image":"url('../img/backs/back_3.jpg')"
        }
    ]
 };

function changeImage(element) {
  element.classList.remove("fadeIn");
  var headline = document.getElementById('present-headline'); //elemento principal actual
  var oldslide = headline.getAttribute('data-slide'); //elemento principal actual
  var newslide = element.getAttribute('data-slide');
  var backslide = document.getElementById('back-slider');
  var list = document.getElementById('present-list');

  //var h1 = headline.getElementsByTagName('h1')[0];
  //fade out

  $(headline).fadeOut(300, function() {
      $(this).delay(600);
      $(this).fadeIn(600);
      $(backslide).fadeOut(200, function() {
      //  $(this).delay(600);
        $(this).fadeIn(200);
        backslide.style.backgroundImage = json.data[newslide].image;

      });
      headline.getElementsByTagName('h1')[0].innerHTML = json.data[newslide].h1;
      headline.getElementsByTagName('h6')[0].innerHTML = json.data[newslide].h6;
      headline.setAttribute("data-slide", newslide);
  });

  $(list).fadeOut(300, function() {
    $(this).delay(600);
    $(this).fadeIn(600);
    //slider mini nuevo
    element.setAttribute("data-slide", oldslide);
    element.getElementsByTagName('a')[0].innerHTML = json.data[oldslide].h1;
    //////
  });

  //backslide.style.backgroundImage = json.data[newslide].image;



};
