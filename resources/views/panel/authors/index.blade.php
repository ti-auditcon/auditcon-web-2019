@extends('layouts.panel')

@section('content')
  {{-- header Section --}}
  <section class="appHeaderSection">
    <h3><i class="la la-user mr-2"></i></i>Autores</h3>
  </section>

  <section class="appContent">
    {{-- Contenido --}}
    <div class="appTableWrapper table-responsive">
      <div class="tableMenu d-flex justify-content-between">
        {{-- Buscador --}}
        {!! Form::open(['action' => 'AuthorController@indexFilter','class' => 'form-inline']) !!}
        <form class="form-inline">
          <input class="form-control mr-sm-2" id="author" type="text" name="name" placeholder="Nombre o apellido" value="{{Session::get('author_filter')}}">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
        </form>
        {!! Form::close() !!}
        {{-- Button borrar --}}
        <div>
          <a class="btn btn-primary" href="{{url('/blog/panel/authors/new')}}" role="button"><i class="la la-plus mr-1" style="font-size: 18px;"></i>Agregar Autor</a>
          {{-- <button type="button" class="btn btn-primary"><i class="la la-plus mr-1" style="font-size: 18px;"></i>Agregar Autor</button> --}}
        </div>
      </div>
      <table class="table table-hover appTable">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Posts Asociados</th>
            <th scope="col">Link</th>
          </tr>
        </thead>
        @foreach ($authors as $au)
        <tbody>
          <tr>
            {{-- class="appTableImg" src="{{asset('/blog-asset/img/pablito.jpg')}}" --}}
            <td><a href="{{url('/blog/panel/author/'.$au->id.'/show')}}">{{$au->first_name}} {{$au->last_name}}</a></td>
            <?php $num= 0 ?>
            @foreach ($au->post_authors as $pst_au)
            <?php $num = $num + 1?>
            @endforeach
            <td>{{$num}}</td>
            <td>
              <a href="{{url('/blog/panel/author/'.$au->id.'/edit')}}" class="btn btn-info btn-icon-only btn-sm btn-air" alt="Editar"><i class="la la-pencil"></i></a>
              <button data-id="{{$au->id}}" data-name="{{$au->first_name}} {{$au->last_name}}" style="display: inline-block; vertical-align: middle;" class="btn btn-danger btn-icon-only btn-sm btn-air sweet-delete" alt="Borrar"><i class="la la-trash"></i></button>
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
					title: "Desea borrar al Autor "+$(this).data('name')+"?",
					text: "",
					type: 'warning',
					showCancelButton: true,
					confirmButtonClass: 'btn-warning',
					cancelButtonText: 'Cancelar',
					confirmButtonText: 'Eliminar',
					closeOnConfirm: false,
  			},function(){
  				//redirección elimninar post
  				window.location.href = '../panel/author/'+id+'/delete';
  			});
  	});
  	</script>
@endsection
