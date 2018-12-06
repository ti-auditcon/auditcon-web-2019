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
        {{-- Buscador --}}
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Título o indicio" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
        </form>
        {{-- Button borrar --}}
        <div class="">
          <a class="btn btn-primary" href="{{url('/blog/categories/new')}}" role="button"><i class="la la-plus mr-1" style="font-size: 18px;"></i>Agregar Categoría</a>
          <button type="button" class="btn btn-danger disabled"><i class="la la-trash-o mr-1" style="font-size: 18px;"></i>Borrar</button>
        </div>
      </div>
      <table class="table table-hover appTable">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Posts asociados</th>
            <th scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href="{{url('/blog/categories/edit')}}">Negocios</a></td>
            <td>10 Posts</td>
            <td><a href=""><i class="la la-external-link iconExternal"></i></a></td>
          </tr>
          <tr>
            <td><a href="{{url('/blog/categories/edit')}}">Tecnología</a></td>
            <td>22 Posts</td>
            <td><a href=""><i class="la la-external-link iconExternal"></i></a></td>
          </tr>
          <tr>
            <td><a href="{{url('/blog/categories/edit')}}">Tributaria</a></td>
            <td>18 Posts</td>
            <td><a href=""><i class="la la-external-link iconExternal"></i></a></td>
          </tr>
          <tr>
            <td><a href="{{url('/blog/categories/edit')}}">Estrategia</a></td>
            <td>2 Posts</td>
            <td><a href=""><i class="la la-external-link iconExternal"></i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
@endsection
