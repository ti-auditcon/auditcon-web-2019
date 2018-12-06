@extends('layouts.panel')

@section('content')
  {{-- header Section --}}
  <section class="appHeaderSection">
    <h3><i class="la la-paperclip mr-2"></i></i>Etiquetas</h3>
  </section>

  <section class="appContent">
    {{-- Contenido --}}
    {!! Form::open(['action' => 'TagController@store']) !!}
    <div class="appAddNew">
      <div class="d-flex justify-content-between mb-3">
        <h3>Nueva Etiqueta</h3>
        <button class="btn btn-primary" type="submit">Guardar</button>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Nombre</strong></p>
            <input class="form-control" name="tag" type="text" placeholder="Agrega un nombre para la etiqueta">
          </div>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
  </section>
@endsection
