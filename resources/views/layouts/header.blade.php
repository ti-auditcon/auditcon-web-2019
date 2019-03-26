<!--Inicio Header -->
    <header class="main-header-wrapper background-bunkerDark color-white headroom animated">
      <div class="main-header">
        <a class="header-brand" href="/">
          <img class="logo h-opacity" src="{{asset('/img/logo.svg')}}">
        </a>
        <div class="menu-toggler">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="collapse-menu">
          <nav class="main-menu">
            <ul>
              <li><a href="/">Inicio</a></li>
              <li id="dropdown"><a href="{{url('/servicios')}}">Servicios</a></li>
              <li><a href="{{url('/nosotros')}}">Nosotros</a></li>
              <li><a href="{{url('/contacto')}}">Contacto</a></li>
              {{-- <li><a class="h-opacity" href="{{url('/blog')}}">Blog</a></li> --}}
              <li><a href="http://intranet.auditcon.cl">Acceso Clientes</a></li>
            </ul>
          </nav>
          <nav class="language-menu">
            <ul>
              <li><a class="h-opacity">Eng</a></li>
              <li> / </li>
              <li><a class="h-opacity">Esp</a></li>
            </ul>
          </nav>
          <nav class="social-button">
            <ul>
              <a target="_blank"><span class="rrss-icon icon-facebook-square"></span></a>
              <a target="_blank"><span class="rrss-icon icon-twitter"></span></a>
              <a target="_blank"><span class="rrss-icon icon-linkedin-square"></span></a>
              <a target="_blank"><span class="rrss-icon icon-whatsapp"></span></a>
            </ul>
          </nav>
        </div>
        <div id="dropdownServices" class="dropdown-services">
          <div class="container">
            <div class="row">
              <a class="col-lg-4" href="{{url('/servicios/contable')}}">
                <h3 data-icon="&#xe903;">Asesoria Contable</h3>
              </a>
              <a class="col-lg-4" href="{{url('/servicios/tributaria')}}">
                <h3 data-icon="&#xe90c;">Asesoria Tributaria</h3>
              </a>
              <a class="col-lg-4" href="{{url('/servicios/legal')}}">
                <h3 data-icon="&#xe918;">Asesoria Legal</h3>
              </a>
              <a class="col-lg-4" href="{{url('/servicios/laboral')}}">
                <h3 data-icon="&#xe909;">Asesoría Laboral</h3>
              </a>
              <a class="col-lg-4" href="{{url('/servicios/auditorias')}}">
                <h3 data-icon="&#xe904;">Auditorías</h3>
              </a>
              <a class="col-lg-4" href="{{url('/servicios/internacional')}}">
                <h3 data-icon="&#xe907;">Inversión Extranjera</h3>
              </a>
              <a class="col-lg-4" href="{{url('/servicios/tecnologia')}}">
                <h3 data-icon="&#xe90a;">Tecnología y Negocios</h3>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Fin Header -->
