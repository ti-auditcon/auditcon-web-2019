<!--Inicio Header -->
    <header class="blog-header-wrapper background-bunker color-white headroom animated">
      <div class="blog-header">
        {{-- Menu Toggler --}}
        <div class="menu-toggler-blog" id="blogMenuToggler">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <a class="header-brand-blog" href="{{url('/blog')}}">
          <img class="logo h-opacity" src="{{asset('/blog-asset/img/logo.svg')}}">
        </a>
        {{-- Search Toggler --}}
        <div class="search-toggler" id="searchToggler">
          <span class="icon-search"></span>
        </div>
        {{-- Menu Dropdown --}}
        <div id="dropdownMenu" class="blog-menu-dropdown toggleHeight">
          <div class="container py-md-1 py-lg-2 py-xl-3">
            <div class="row">
              {{-- Menus --}}
              <div class="col-12 col-md-4 col-lg-3 blog-menu-list">
                <a class="color-orangeYellow" href="{{url('/blog')}}">Portada</a>
                <a class="color-orangeYellow" href="{{url('/blog/category')}}">Negocios</a>
                <a class="color-orangeYellow" href="#">Tecnologia</a>
                <a class="color-orangeYellow" href="#">Tributaria</a>
                <a class="color-orangeYellow" href="#">Estrategia</a>
                <hr class="">
                <a class="color-orangeYellow" href="#">Artículos Nuevos</a>
                <a class="color-orangeYellow" href="#">Artículos Más Leidos</a>
              </div>
              {{-- Destacados según categoria --}}
              <div class="col-12 col-md-8 col-lg-6 blog-menu-featured d-none d-md-block">
                <div class="row">
                  <div class="col-6">
                    <div class="dummy-box" style="width: 100%; height: 160px;">
                      {{-- aqui va la el contenido (pasar un style con background-image) --}}
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="dummy-box" style="width: 100%; height: 160px;">
                      {{-- aqui va la el contenido (pasar un style con background-image) --}}
                    </div>
                  </div>
                </div>
              </div>
              {{-- Publicidad --}}
              <div class="col-12 col-lg-3 blog-menu-adv d-none d-lg-block">
                <div class="dummy-box" style="width: 100%; height: 160px;">
                  {{-- aqui va la el contenido (pasar un style con background-image) --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- Search Dropdown --}}
        <div id="dropdownSearch" class="blog-search-dropdown toggleHeight">
          <form class="searchForm" action="" method="post">
            <input class="background-transparent searchInput" id="searchInput" type="search" name="" value="" placeholder="Ingrese su búsqueda aquí" aria-label="Search">
            <button type="submit" class="background-transparent searchSubmit"></button>
          </form>
        </div>
      </div>
    </header>
<!-- Fin Header -->
