@extends('layouts.panel')

@section('content')
  {{-- header Section --}}
  <section class="appHeaderSection">
    <h3><i class="la la-image mr-2"></i>Media</h3>
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
          <a class="btn btn-primary" href="{{asset('/blog/assets/new')}}" role="button"><i class="la la-cloud-upload mr-2" style="font-size: 18px;"></i>Subir Imágen</a>
          <button type="button" class="btn btn-danger disabled"><i class="la la-trash-o mr-1" style="font-size: 18px;"></i>Borrar</button>
        </div>
      </div>
      <table class="table table-hover appTable">
        <thead>
          <tr>
            <th scope="col">Archivo</th>
            <th scope="col">Tamaño</th>
            <th scope="col">Enlazado a</th>
            <th scope="col">Subido el</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href=""><img class="appTableImg" src="{{asset('/blog-asset/img/blog/05.jpeg')}}">imagencita01.jpg</a></td>
            <td>145.68 KB</td>
            <td><a href="#">10 Tips para ahorra en tecnología sin salir del presupuesto de su empresa<a></td>
            <td>12/06/2018</td>
          </tr>
          <tr>
            <td><a href=""><img class="appTableImg" src="{{asset('/blog-asset/img/blog/06.jpeg')}}">absdasdakasdla_0120931img.jpg</a></td>
            <td>145.68 KB</td>
            <td><a href="#">Potenti sociosqu facilisi sagittis aliquam tristique dis dui feugiat cubilia<a></td>
            <td>12/06/2018</td>
          </tr>
          <tr>
            <td><a href=""><img class="appTableImg" src="{{asset('/blog-asset/img/blog/07.jpeg')}}">lolololol_33.jpg</a></td>
            <td>145.68 KB</td>
            <td><a href="#">3 Per cursus penatibus potenti augue nascetur<a></td>
            <td>12/06/2018</td>
          </tr>
          <tr>
            <td><a href=""><img class="appTableImg" src="{{asset('/blog-asset/img/blog/08.jpeg')}}">IMAGEN_X999.jpg</a></td>
            <td>145.68 KB</td>
            <td><a href="#">Consequat et rutrum integer morbi praesent nostra leo senectus<a></td>
            <td>12/06/2018</td>
          </tr>
          <tr>
            <td><a href=""><img class="appTableImg" src="{{asset('/blog-asset/img/blog/09.jpeg')}}">09.jpg</a></td>
            <td>145.68 KB</td>
            <td><a href="#">Asfacilisi sagittis aliquam tristique dis dui feugiat cubilias<a></td>
            <td>12/06/2018</td>
          </tr>
          <tr>
            <td><a href=""><img class="appTableImg" src="{{asset('/blog-asset/img/blog/05.jpeg')}}">DSC_000120.jpg</a></td>
            <td>145.68 KB</td>
            <td><a href="#">10 Tips para ahorra en tecnología sin salir del presupuesto de su empresa<a></td>
            <td>12/06/2018</td>
          </tr>
          <tr>
            <td><a href=""><img class="appTableImg" src="{{asset('/blog-asset/img/blog/06.jpeg')}}">06.jpg</a></td>
            <td>145.68 KB</td>
            <td><a href="#">Potenti sociosqu facilisi sagittis aliquam tristique dis dui feugiat cubilia<a></td>
            <td>12/06/2018</td>
          </tr>
          <tr>
            <td><a href=""><img class="appTableImg" src="{{asset('/blog-asset/img/blog/07.jpeg')}}">07.jpg</a></td>
            <td>145.68 KB</td>
            <td><a href="#">3 Per cursus penatibus potenti augue nascetur<a></td>
            <td>12/06/2018</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
@endsection
