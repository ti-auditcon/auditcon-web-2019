@extends('layouts.panel')

@section('content')
  {{-- header Section --}}
  <section class="appHeaderSection">
    <h3><i class="la la-user mr-2"></i></i>Autores</h3>
  </section>

  <section class="appContent">
    {{-- Contenido --}}
    {!! Form::open(['action' => 'AuthorController@update', 'method' => 'put'])!!}
    <input class="form-control" value="{{$author->id}}" name="author_id" type="hidden">
    <div class="appAddNew">
      <div class="d-flex justify-content-between mb-3">
        <h3>Editar Autor</h3>
        <button class="btn btn-primary" type="submit">Actualizar</button>
      </div>
      <div class="row">
        <div class="col-8">
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Nombre</strong></p>
            <input class="form-control" value="{{$author->first_name}}" name="first_name" type="text" placeholder="Nombre del autor">
          </div>
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Apellido</strong></p>
            <input class="form-control" value="{{$author->last_name}}" name="last_name" type="text" placeholder="Apellido del autor">
          </div>
          {{-- Ocupación --}}
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Ocupación</strong></p>
            <input class="form-control" value="{{$author->ocupation}}" name="ocupation" type="text" placeholder="Ej: Ingeniero Comercial">
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
            <textarea class="form-control" value="{{$author->description}}" name="description" rows="6" placeholder="Agrega una descripción corta, humana y humilde."></textarea>
          </div>


        </div>
        <div class="col-4">
          {{-- LinkedIn --}}
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>LinkedIn</strong></p>
            <label class="sr-only" for="inlineFormInputGroup">Usuario</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">@</div>
              </div>
              <input type="text" name="linkedin" @if(in_array(1, $author->author_networks()->pluck('social_network_id')->toArray()))
                value="{{$author->author_networks()->where('social_network_id',1)->first()->account}}"  @endif  class="form-control" id="inlineFormInputGroup" placeholder="Usuario">
              </div>
            </div>
          {{-- Twitter --}}
          <div class="mb-4 pb-2">
            <p class="labelText"><strong>Twitter</strong></p>
            <label class="sr-only" for="inlineFormInputGroup">Usuario</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">@</div>
              </div>
              <input type="text" name="twitter" @if(in_array(2, $author->author_networks()->pluck('social_network_id')->toArray()))
              value="{{$author->author_networks()->where('social_network_id',2)->first()->account}}"  @endif  class="form-control" id="inlineFormInputGroup" placeholder="Usuario">
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
              <input type="text" name="facebook" @if(in_array(4, $author->author_networks()->pluck('social_network_id')->toArray()))
              value="{{$author->author_networks()->where('social_network_id',4)->first()->account}}"  @endif  class="form-control" id="inlineFormInputGroup" placeholder="Usuario">
            </div>
          </div>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
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
            {{-- <th scope="col">Autor</th> --}}
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        @foreach ($author->post_authors as $psau)
        <tbody>
          <tr>
            <td>{{$psau->post->title}}</td>
            <td>{{$psau->post->category->category}}</td>
            <td>{{$psau->post->publication_date}}</td>
            <td>
              <button data-id="{{$psau->post->id}}" data-author_id="{{$author->id}}" data-name="{{$psau->post->title}}" style="display: inline-block; vertical-align: middle;"
              class="btn btn-danger btn-icon-only btn-sm btn-air sweet-delete" alt="Borrar"><i class="la la-cut"></i></button>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </section>
@endsection

@section('scripts')
  	{{-- sweet alert js --}}
  	<script>
  	$('.sweet-delete').click(function(e){
  	  var id = $(this).data('id');
      var author_id = $(this).data('author_id');
  		//alert(id);
  			swal({
  					title: "Desea desvincular al autor del artículo "+$(this).data('name')+"?",
  					text: "",
  					type: 'warning',
  					showCancelButton: true,
  					confirmButtonClass: 'btn-warning',
  					cancelButtonText: 'Cancelar',
  					confirmButtonText: 'Desvincular',
  					closeOnConfirm: false,
  			},function(){
  				//redirección elimninar post
  				window.location.href = '../'+id+'/unlink/'+author_id;
  			});
  	});
  	</script>
@endsection
