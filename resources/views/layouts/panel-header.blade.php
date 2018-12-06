<header class="page-sidebar appMainHeader">
    <div class="page-brand">
        <a href="{{url('/blog/panel')}}">
            <span class="brand">A</span>
        </a>
    </div>
    {{-- Side Menu --}}
    <div class="header-menu-wrapper">
        <div class="header-menu nav scroller">
            {{-- Menu toggler Button --}}
            {{-- <a class="appHeaderButton sidebar-toggler" href="javascript:;">
                <div class="sidebar-toggler-icon">
                    <span class="icon-line"></span>
                    <span class="icon-line"></span>
                    <span class="icon-line"></span>
                </div>
            </a> --}}
            {{-- End Menu toggler Button --}}
            <a class="appHeaderButton" href="{{url('/blog/panel/posts')}}">
              <i class="la la-newspaper-o appIcon"></i>
              <p class="appNameSection">Artículos</p>
            </a>
            <a class="appHeaderButton" href="{{url('/blog/panel/assets')}}">
              <i class="la la-image appIcon"></i>
              <p class="appNameSection">Media</p>
            </a>
            <a class="appHeaderButton" href="{{url('/blog/panel/categories')}}">
              <i class="la la-folder-open appIcon"></i>
              <p class="appNameSection">Categorías</p>
            </a>
            <a class="appHeaderButton" href="{{url('/blog/panel/tags')}}">
              <i class="la la-paperclip appIcon"></i>
              <p class="appNameSection">Etiquetas</p>
            </a>
            <a class="appHeaderButton" href="{{url('/blog/panel/authors')}}">
              <i class="la la-user appIcon"></i>
              <p class="appNameSection">Autores</p>
            </a>
        </div>
    </div>{{-- End Side Menu --}}
    <div class="">
      <a class="appHeaderButtonOff" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        <i class="la la-power-off appIcon"></i>
        <p class="appNameSection">Cerrar Sesión</p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </a>
    </div>
</header>
