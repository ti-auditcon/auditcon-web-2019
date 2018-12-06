@extends('layouts.panel')

@section('content')
  {{-- header Section --}}
  <section class="appHeaderSection">
    <h3><i class="la la-newspaper-o mr-2"></i>Artículos</h3>
  </section>

  <section class="appContent">
    {{-- Contenido --}}
    {!! Form::open(['action' => 'PostController@update', 'method' => 'put']) !!}
    <input class="form-control" value="{{$post->id}}" name="post_id" type="hidden">
    <div class="appAddNew">
      <div class="d-flex justify-content-between mb-3 pb-1">
        <h3>Editar Artículo</h3>
        <button class="btn btn-primary" type="submit">Actualizar</button>
      </div>
      <div class="row">
        {{-- Primera Columna --}}
        <div class="col-8">
          {{-- Título del Post --}}
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Título</strong></p>
            <input class="form-control" value="{{$post->title}}" name="title" type="text">
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
              <textarea value="" id="summernote" name="editordata">{{$post->content}}</textarea>
            </form>
          </div>

        </div>{{-- Fin Primera Columna --}}

        {{-- Segunda Columna --}}
        <div class="col-4">
          {{-- Seleccionar Categoría --}}
          <div class="mb-4 pb-1">
            <div class="form-group">
              <div class="form-group  @if($errors->has('category_id')) has-warning  @endif">
  							<p class="labelText"><strong>Categoría</strong></p>
  							<select class="form-control"  name="category_id" data-live-search="true">
  								@foreach (App\Category::all() as $cat)
  									<option value="{{$cat->id}}" @if($post->category_id==$cat->id) selected @endif>{{$cat->category}}</option>
  								@endforeach
  							</select>
  						</div>
              </select>
            </div>
          </div>
          {{-- Seleccionar Etiquetas --}}
          <div class="mb-4 pb-1">
            <div class="form-group">
              <p class="labelText"><strong>Etiquetas</strong></p>
              <select multiple class="form-control" id="exampleFormControlSelect2" name="tags[]">
                @foreach ($post->post_tags as $post_tag)
                  <?php $num[] = $post_tag->tag_id; ?>
                @endforeach
                @foreach (App\Tag::all() as $tag)
                  <option value="{{$tag->id}}" @if(in_array($tag->id, $num)) selected @endif>{{$tag->tag}}</option>
                @endforeach
              </select>
            </div>
          </div>
          {{-- Seleccionar Autor, Autora, Autore, Autori --}}
          <div class="mb-4 pb-1">
            <div class="form-group">
              <p class="labelText"><strong>Autor(es)</strong><p>
                <select multiple class="form-control" id="FormControlSelect3" name="authors[]">
                  @foreach ($post->post_authors as $post_author)
                    {{$num[] = $post_author->author_id}}
                  @endforeach
                  @foreach (App\Author::all() as $au)
                    <option value="{{$au->id}}" @if(in_array($au->id, $num)) selected @endif>{{$au->first_name}} {{$au->last_name}}</option>
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
              <input type="checkbox">
              <span></span>
            </label>
          </div>

        </div>{{-- Fin Segunda Columna --}}
      </div>
    </div>
    {!! Form::close() !!}
  </section>
@endsection
