@extends('layouts.panel')

@section('content')
  {{-- header Section --}}
  <section class="appHeaderSection">
    <h3><i class="la la-paperclip mr-2"></i></i>Etiquetas</h3>
  </section>

  <section class="appContent">
    {{-- Contenido --}}
    <div class="appTableWrapper table-responsive">
      <div class="tableMenu d-flex justify-content-between">
        {{-- Buscador --}}
        {!! Form::open(['action' => 'TagController@indexFilter','class' => 'form-inline']) !!}
        <form class="form-inline">
          <input class="form-control mr-sm-2" id="tag" type="text" name="name" placeholder="Tag" value="{{Session::get('tag_filter')}}">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
        </form>
        {!! Form::close() !!}
        {{-- Button borrar --}}
        <div>
          <a class="btn btn-primary" href="{{url('/blog/panel/tags/new')}}" role="button"><i class="la la-plus mr-1" style="font-size: 18px;"></i>Agregar Etiqueta</a>
        </div>
      </div>
      <table class="table table-hover appTable">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Posts Asociados</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        @foreach ($tags as $tag)
        <tbody>
          <tr>
            <td><a href="{{url('/blog/panel/tag/'.$tag->id.'/show')}}">{{$tag->tag}}</a></td>
            <?php $num= 0 ?>
            @foreach ($tag->post_tags as $p_tag)
            <?php $num = $num + 1?>
            @endforeach
            <td>{{$num}}</td>
            <td>
              <button data-id="{{$tag->id}}" data-name="{{$tag->tag}}" style="display: inline-block; vertical-align: middle;" class="btn btn-danger btn-icon-only btn-sm btn-air sweet-delete" alt="Borrar"><i class="la la-trash"></i></button>
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
  		//alert(id);
  			swal({
  					title: "Desea borrar el Tag "+$(this).data('name')+"?",
  					text: "",
  					type: 'warning',
  					showCancelButton: true,
  					confirmButtonClass: 'btn-warning',
  					cancelButtonText: 'Cancelar',
  					confirmButtonText: 'Eliminar',
  					closeOnConfirm: false,
  			},function(){
  				//redirección elimninar post
  				window.location.href = '../panel/tag/'+id+'/delete';
  			});
  	});
  	</script>

@endsection
