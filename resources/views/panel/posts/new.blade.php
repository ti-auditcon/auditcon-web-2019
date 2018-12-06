@extends('layouts.panel')

@section('content')
  {{-- header Section --}}
  <section class="appHeaderSection">
    <h3><i class="la la-newspaper-o mr-2"></i>Artículos</h3>
  </section>
  <section class="appContent">
    {{-- Contenido --}}
    {!! Form::open(['action' => 'PostController@store']) !!}
    <div class="appAddNew">
      <div class="d-flex justify-content-between mb-3 pb-1">
        <h3>Nuevo Artículo</h3>
        <button class="btn btn-primary" type="submit">Publicar</button>
      </div>
      <div class="row">
        {{-- Primera Columna --}}
        <div class="col-8">
          {{-- Título del Post --}}
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Título</strong></p>
            <input class="form-control" value="{{old('title')}}" type="text" placeholder="Agrega un título para el post" name="title">

          </div>

          {{-- Subir Imágen Destacada --}}
          {{-- <div class="mb-4 pb-2">
            <p class="labelText"><strong>Imágen Destacada</strong></p>
            <form action="/upload-target" class="dropzone" method="post" enctype="multipart/form-data">
              <div class="dz-default dz-message">
                <div class="text-center mb-3">
                  <i class="la la-cloud-upload text-primary d-block mb-1 color-metalicGold" style="font-size:50px;"></i>
                  <strong class="color-bunker">Arrastre la imagen destacada para subir</strong>
                </div>
              </div>
            </form>
          </div> --}}

          {{-- WYSWYG Editor --}}
          <div class="mb-4 pb-1">
            <p class="labelText"><strong>Contenido</strong></p>
            <form class="summernoteForm" method="post">
              <textarea id="summernote" name="editordata">{{old('editordata')}}</textarea>
            </form>
          </div>

        </div>{{-- Fin Primera Columna --}}

        {{-- Segunda Columna --}}
        <div class="col-4">
          {{-- Seleccionar Categoría --}}
          <div class="mb-4 pb-1">
            <div class="form-group">
              <p class="labelText"><strong>Categoría</strong></p>
              <select class="form-control" name="category_id" id="exampleFormControlSelect1" data-live-search="true">
                <option value="">Seleccionar categoría...</option>
                @foreach (App\Category::all() as $cs)
                  <option value="{{$cs->id}}" @if(old('category_id')==$cs->id) selected @endif >{{$cs->category}}</option>
                @endforeach
              </select>
            </div>
          </div>
          {{-- Seleccionar Etiquetas --}}
          <div class="mb-4 pb-1">
            <div class="form-group">
              <p class="labelText"><strong>Etiquetas</strong></p>
              <select multiple class="form-control" id="exampleFormControlSelect2" name="tags[]">
                @foreach (App\Tag::all() as $tg)
                  <option value="{{$tg->id}}" {{ (collect(old('tags'))->contains($tg->id)) ? 'selected':'' }}>{{$tg->tag}}</option>
                @endforeach
              </select>
            </div>
          </div>
          {{-- Seleccionar Autor --}}
          <div class="mb-4 pb-1">
            <div class="form-group">
              <p class="labelText"><strong>Autor</strong><p>
                <select multiple class="form-control" id="FormControlSelect3" name="authors[]" title="Seleccionar un autor...">
                  @foreach (App\Author::all() as $aus)
                    <option value="{{$aus->id}}" {{ (collect(old('authors'))->contains($aus->id)) ? 'selected':'' }}>{{$aus->first_name}} {{$aus->last_name}}</option>
                  @endforeach
                </select>
              </select>
            </div>
          </div>
          {{-- Destacar Post --}}
          <div class="mb-4 pb-1">
            <div>
              <p class="labelText"><strong>¿Destacar?</strong></p>
              {{-- <p class="font-weight-light small">¿Este post, debería estar destacado en la portada?</p> --}}
            </div>
            <label class="ui-switch">
              <input type="checkbox" name="featured">
              <span></span>
            </label>
          </div>
        </div>{{-- Fin Segunda Columna --}}
      </div>
    </div>
    {!! Form::close() !!}
  </section>
@endsection
