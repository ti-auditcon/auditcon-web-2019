@extends('layouts.panel')

@section('content')
  {{-- header Section --}}
  <section class="appHeaderSection">
    <h3><i class="la la-user mr-2"></i></i>Autores</h3>
  </section>
  <section class="appContent">
    {{-- Contenido --}}
    {!! Form::open(['action' => 'AuthorController@store']) !!}
    <div class="appAddNew">
      <div class="d-flex justify-content-between mb-3">
        <h3>Nuevo Autor</h3>
        <button class="btn btn-primary" type="submit">Publicar</button>
      </div>
      <div class="row">
        <div class="col-8">
          {{-- Nombre del autor--}}
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Nombre</strong></p>
            <input class="form-control" name="first_name" type="text" placeholder="Nombre del autor">
          </div>

          {{-- Apellido del autor --}}
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Apellido</strong></p>
            <input class="form-control" name="last_name" type="text" placeholder="Apellido del autor">
          </div>

          {{-- Ocupación --}}
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Ocupación</strong></p>
            <input class="form-control" name="ocupation" type="text" placeholder="Ej: Ingeniero Comercial">
          </div>

          {{-- Subir Imágen del Autor --}}
          {{-- <div class="mb-4 pb-2">
            <p class="labelText"><strong>Imágen del Autor</strong></p>
            <form action="/upload-target" class="dropzone" method="post" enctype="multipart/form-data">
              <div class="dz-default dz-message">
                <div class="text-center mb-3">
                  <i class="la la-cloud-upload text-primary d-block mb-1 color-metalicGold" style="font-size:50px;"></i>
                  <strong class="color-bunker">Arrastre la imagen del autor que desea subir</strong>
                </div>
              </div>
            </form>
          </div> --}}

          {{-- Descripción del autor --}}
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Descripción</strong></p>
            <textarea class="form-control" name="description" rows="8" placeholder="Agrega una descripción corta, humana y humilde."></textarea>
          </div>

        </div>
        <div class="col-4">
          {{-- Twitter --}}
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Twitter</strong></p>
            <label class="sr-only" for="inlineFormInputGroup">Usuario</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">@</div>
              </div>
              <input type="text" name="twitter" class="form-control" id="inlineFormInputGroup" placeholder="Usuario">
            </div>
          </div>
          {{-- Facebook --}}
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Facebook</strong></p>
            <label class="sr-only" for="inlineFormInputGroup">Usuario</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">@</div>
              </div>
              <input type="text" name="facebook" class="form-control" id="inlineFormInputGroup" placeholder="Usuario">
            </div>
          </div>
          {{-- LinkedIn --}}
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>LinkedIn</strong></p>
            <label class="sr-only" for="inlineFormInputGroup">Usuario</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">@</div>
              </div>
              <input type="text" name="linkedin" class="form-control" id="inlineFormInputGroup" placeholder="Usuario">
            </div>
          </div>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
  </section>
@endsection
