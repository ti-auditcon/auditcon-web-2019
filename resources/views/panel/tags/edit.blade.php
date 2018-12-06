@extends('layouts.panel')

@section('content')
  {{-- header Section --}}
  <section class="appHeaderSection">
    <h3><i class="la la-paperclip mr-2"></i></i>Etiquetas</h3>
  </section>

  <section class="appContent">
    {{-- Contenido --}}
    <div class="appAddNew">
      <div class="d-flex justify-content-between mb-3">
        <h3>Editar Etiqueta</h3>
        <button class="btn btn-primary" type="button">Actualizar</button>
      </div>
      <div class="row">
        <div class="col-12">
          {{-- Nombre de la Categoría--}}
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Nombre</strong></p>
            <input class="form-control" type="text" disabled>
          </div>

          {{-- Descripción de la Categoría --}}
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Descripción</strong><span class="small ml-1 text-light">(Opcional)</span></p>
            <textarea class="form-control" rows="5"></textarea>
          </div>

          {{-- Posts Asociados --}}
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Artículos Asociados</strong></p>
            <table class="table table-hover appTable">
              <thead>
                <tr>
                  <th scope="col">Título</th>
                  <th scope="col">Categoría</th>
                  {{-- <th scope="col">Tags</th> --}}
                  <th scope="col">Creada el</th>
                  <th scope="col">Autor</th>
                  <th scope="col">Link</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="{{url('/blog/posts/edit')}}">10 Tips para ahorra en tecnología sin salir del presupuesto de su empresa</a></td>
                  <td><a href="">Tecnología</a></td>
                  {{-- <td><a href="#">Negocios</a>, <a href="#">era digital</a>, <a href="#">perritos</a>, <a href="">gatitos</a></td> --}}
                  <td>25/05/2018</td>
                  <td>Pablo Rioseco</td>
                  <td><a href=""><i class="la la-external-link iconExternal"></i></a></td>
                </tr>
                <tr>
                  <td><a href="{{url('/blog/posts/edit')}}">Auctor nec primis dictumst vehicula diam at per</a></td>
                  <td><a href="">Tecnología</a></td>
                  {{-- <td><a href="#">ligula</a>, <a href="#">convallis</a>, <a href="#">rhoncus</a>, <a href="">non</a></td> --}}
                  <td>25/05/2018</td>
                  <td>Pablo Rioseco</td>
                  <td><a href=""><i class="la la-external-link iconExternal"></i></a></td>
                </tr>
                <tr>
                  <td><a href="{{url('/blog/posts/edit')}}">Posuere tempus praesent sociosqu quis aenean himenaeos phasellus</a></td>
                  <td><a href="">Tecnología</a></td>
                  {{-- <td><a href="#">cursus</a>, <a href="#">penatibus</a>, <a href="#">potenti</a>, <a href="#">augue</a>, <a href="">nascetur</a></td> --}}
                  <td>25/05/2018</td>
                  <td>Pablo Rioseco</td>
                  <td><a href=""><i class="la la-external-link iconExternal"></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </section>
@endsection
