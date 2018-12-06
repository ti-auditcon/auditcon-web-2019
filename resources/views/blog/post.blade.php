@extends('layouts.blog')

@section('content')
  <section class="thePost-wrapper">
    <div class="thePost">

      {{-- Imágen del Post --}}
      <article class="thePost-img" style="background-image: url('{{asset('/blog-asset/img/1.jpg')}}')"></article>

      {{-- Título y Metadata del Post --}}
      <article class="thePost-header text-center">
        <span class="blogPostCategory">Categoría</span>
        <h1>Diam nisl varius lectus a euismod eros felis nec erat</h1>
        <div class="header-metadata">
          <p>
            <b>Pablo Rioseco</b><br>
            18 de Agosto del 2018
          </p>
        </div>
      </article>

      {{-- Contenido del Post --}}
      <article class="thePost-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </article>

      {{-- Botones para compartir el Post --}}
      <section class="thePost-sharing text-center">
        <span class="blogPostCategory">Compartir</span>
        <nav class="postSharing-buttons">
          <a target="_blank" href="#"><span class="sh-icon icon-facebook-square"></span></a>
          <a target="_blank" href="#"><span class="sh-icon icon-twitter"></span></a>
        </nav>
      </section>

      {{-- Author Box --}}
      <section class="thePost-authorBox">
        <div class="authorBoxImg">
          <img src="{{asset('/blog-asset/img/pablito.jpg')}}">
        </div>
        <div class="authorBoxData">
          <div class="dataName">
            <h4>Pablo Rioseco</h4>
            <p>Ingeniero Comercial</p>
          </div>
          <div class="dataDescription">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <div class="authorRRSS">
              <a target="_blank" href="#"><span class="sh-icon icon-facebook-square"></span></a>
              <a target="_blank" href="#"><span class="sh-icon icon-twitter"></span></a>
              <a target="_blank" href="#"><span class="sh-icon icon-linkedin-square"></span></a>
            </div>
          </div>
        </div>
      </section>

      {{-- Posts relacionados --}}
      <section class="thePost-related">
        <div class="title mb-4 mb-md-3">
          <h4>Otros artículos interesantes.</h4>
        </div>
        <div class="relatedItems container">
          <div class="row">

            <div class="relatedItem col-12 col-md-4">
              <span class="blogPostCategory">Categoría</span>
              <a href=""><h3>No abras este post, en serio, no es un juego</h3></a>
            </div>

            <div class="relatedItem col-12 col-md-4">
              <span class="blogPostCategory">Categoría</span>
              <a href=""><h3>Emprendimientos Chilenos que tienen más garantías a futuro de acuerdo a Steve Dogs</h3></a>
            </div>

            <div class="relatedItem col-12 col-md-4">
              <span class="blogPostCategory">Categoría</span>
              <a href=""><h3>10 razones para morir en el intento y no seguir intentandolo</h3></a>
            </div>

          </div>
        </div>
      </section>

      {{-- Comentarios del Post --}}
      <section class="thePost-comments">
        <div class="title mb-4 mb-md-3">
          <h4>Comentarios.</h4>
        </div>
        <div class="comments-wrapper">
          <div class="comments">

          </div>
        </div>
      </section>

    </div>
  </section>

  {{-- suscribeCTA --}}
  <section class="suscribeCTA-wrapper">
    <div class="suscribeCTAImage" style="background-image: url('{{asset('/blog-asset/img/mail_cta.jpg')}}')"></div>
    <div class="suscribeCTA">
      <span class="blogPostCategory">Suscripción</span>
      <h1 class="color-white">Reciba <span class="color-orangeYellow">los últimos artículos</span> <br>del blog <span class="color-orangeYellow">en su correo</span></h1>
      <form>
        <div class="form-group">
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@correo.com">
          <button type="submit" class="btn btn-primary btn-sm">Suscribirse</button>
        </div>
      </form>
    </div>
  </section>
  
@endsection
