@extends('layouts.panel')

@section('content')

  {{-- header Section --}}
  <section class="appHeaderSection">
    <h3><i class="la la-newspaper-o mr-2"></i>Artículos</h3>
  </section>

  <section class="appContent">
    {{-- Contenido --}}
    <div class="appTableWrapper table-responsive">
        {{-- {!! Form::open(['action' => 'PostController@indexFilter','class' => 'form-inline']) !!}
        <form class="form-inline">
          <input class="form-control mr-sm-2" id="post" type="text" name="name" placeholder="Título o indicio" value="{{Session::get('post_filter')}}">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
        </form>
        {!! Form::close() !!} --}}
        <div>
          <a class="btn btn-primary" href="{{url('/blog/panel/posts/new')}}" role="button"><i class="la la-plus mr-1" style="font-size: 18px;"></i>Agregar Artículo</a>
        </div>
      <div class="page-content fade-in-up">
        <div class="ibox">
          <div class="ibox-body">

            <div class="flexbox mb-4">
              <div class="flexbox">
                <label class="mb-0 mr-2">Categoría:</label>
                <select class="selectpicker show-tick form-control" id="type-filter" title="Seleccionar" data-style="btn-solid" data-width="150px">
                  <option value="">Todas</option>
                  @foreach (App\Category::all() as $cat)
                    <option>{{$cat->category}}</option>
                  @endforeach
                </select>
              </div>
              <div class="input-group-icon input-group-icon-left mr-3">
                  <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                  <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Buscar ...">
              </div>
            </div>
            <div class="table-responsive row">
              <table class="table table-bordered table-hover" id="datatable">
                <thead class="thead-default thead-lg">
                  <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Categoría</th>
                    <th>Etiquetas</th>
                    <th>Creada el</th>
                    <th>Autor</th>
                    <th class="no-sort"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                    <tr>
                      <td>{{$post->id}}</td>
                      <td><a href="javascript:;">{{$post->title}}</a></td>
                      <td>{{$post->category->category}}</td>
                      <td>@foreach ($post->post_tags as $ptags)<a>{{$ptags->tag->tag}},</a> @endforeach</td>
                      <td>{{$post->publication_date}}</td>
                      <td>
                        @foreach ($post->post_authors as $pauthor)
                        <a>{{$pauthor->author->first_name}} {{$pauthor->author->last_name}},</a> @endforeach
                      </td>
                      <td>
                        <a href="{{url('/blog/panel/post/'.$post->id.'/edit')}}" class="btn btn-info btn-icon-only btn-sm btn-air" alt="Editar"><i class="la la-pencil"></i></a>
                        <button data-id="{{$post->id}}" style="display: inline-block; vertical-align: middle;"
                          class="btn btn-danger btn-icon-only btn-sm btn-air sweet-delete" alt="Borrar"><i class="la la-trash"></i></button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
  </section>
@endsection

@section('scripts')

  	{{-- sweet alert js --}}
  	<script>
  	$('.sweet-delete').click(function(e){
  	  var id = $(this).data('id');
  		//alert(id);
  			swal({
  					title: "Desea borrar el artículo N° "+$(this).data('id')+"?",
  					text: "",
  					type: 'warning',
  					showCancelButton: true,
  					confirmButtonClass: 'btn-warning',
  					cancelButtonText: 'Cancelar',
  					confirmButtonText: 'Eliminar',
  					closeOnConfirm: false,
  			},function(){
  				//redirección elimninar post
  				window.location.href = '../panel/post/'+id+'/delete';
  			});
  	});
  	</script>


    <script>
    $(function() {
        $('#datatable').DataTable({
          pageLength: 10,
                fixedHeader: true,
                responsive: true,
                "sDom": 'rtip',
                columnDefs: [{
                    targets: 'no-sort',
                    orderable: false
                }]
            });

        var table = $('#datatable').DataTable();
        $('#key-search').on('keyup', function() {
            table.search(this.value).draw();
        });
        $('#type-filter').on('change', function() {
            table.column(2).search($(this).val()).draw();
        });
      });
      </script>


@endsection

{{-- <button data-id="{{$bill->id}}" data-name="{{$bill->id}}" class="btn btn-icon-ext sweet-validate" style="display: inline-block; vertical-align: middle;" alt="Borrar" ><i class="la la-check"></i>&nbsp;&nbsp;Validar Boleta</button> --}}
