@extends('layouts.panel')

@section('content')
  {{-- header Section --}}
  <section class="appHeaderSection">
    <h3><i class="la la-folder-open mr-2"></i></i>Categorias</h3>
  </section>

  <section class="appContent">
    {{-- Contenido --}}
    {!! Form::open(['action' => 'CategoryController@store']) !!}
    <div class="appAddNew">
      <div class="d-flex justify-content-between mb-3">
        <h3>Nueva Categoría</h3>
        <button class="btn btn-primary" type="submit">Guardar</button>
      </div>
      <div class="row">
        <div class="col-12">
          {{-- Nombre de la Categoría--}}
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Nombre</strong></p>
            <input class="form-control" name="category" type="text" placeholder="Agrega un nombre para la categoría">
          </div>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
  </section>
@endsection
