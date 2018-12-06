@extends('layouts.panel')

@section('content')
  {{-- header Section --}}
  <section class="appHeaderSection">
    <h3><i class="la la-image mr-2"></i>Media</h3>
  </section>

  <section class="appContent">
    {{-- Contenido --}}
    <div class="appAddNew">
      <div class="d-flex justify-content-between mb-3">
        <h3>Subir Imágen</h3>
        <button class="btn btn-primary" type="button">Subir</button>
      </div>
      <div class="row">
        <div class="col-12 mt-2">
          <div>
            {{-- <p class="labelText"><strong>Imágen Destacada</strong></p> --}}
            <form action="/upload-target" class="dropzone dropzoneFullHeight" method="post" enctype="multipart/form-data">
              <div class="dz-default dz-message">
                <div class="text-center mb-3">
                  <i class="la la-cloud-upload text-primary d-block mb-1 color-metalicGold" style="font-size:50px;"></i>
                  <strong class="color-bunker">Arrastre la imagen para subir</strong>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
