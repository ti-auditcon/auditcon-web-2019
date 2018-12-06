@extends('layouts.panel')

@section('content')
  {{-- header Section --}}
  <section class="appHeaderSection">
    <h3><i class="la la-folder-open mr-2"></i></i>Categorias</h3>
  </section>

  <section class="appContent">
    {{-- Contenido --}}
    <div class="appTableWrapper table-responsive">
      <div class="tableMenu d-flex justify-content-between">
        {{-- Button borrar --}}
        <div class="">
          <a class="btn btn-primary" href="{{url('/blog/panel/categories/new')}}" role="button"><i class="la la-plus mr-1" style="font-size: 18px;"></i>Agregar Categoría</a>
        </div>
      </div>
      <table class="table table-hover appTable">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Posts asociados</th>
          </tr>
        </thead>
        @foreach ($categories as $cat)
        <tbody>
          <tr>
            <td><a href="{{url('/blog/panel/categories/'.$cat->id.'/show')}}">{{$cat->category}}</a></td>
            <?php $num= 0 ?>
            @foreach ($cat->posts as $post)
            <?php $num = $num + 1?>
            @endforeach
            <td>{{$num}}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </section>
@endsection


{{-- end page --}}
