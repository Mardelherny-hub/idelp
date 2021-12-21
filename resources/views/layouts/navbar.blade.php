<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">
      <!-- Brand -->
      <a class="navbar-brand d-block" href="{{ route('home') }}">
        <img src="{{ asset('img/logo-min.png') }}" alt="IDELP Logo"><strong>IDELP</strong>
      </a>
      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('programa') }}">Carrera
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cursos') }}">Cursos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">Inscripción 2021</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="nav-link" href="{{ route('requisitos') }}">Requisitos</a>
                <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/institucional">Institucional</a>
          </li>
        </ul>
        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://www.facebook.com/Instituto-IDELP-109195094330675/" class="nav-link" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
           <li class="nav-item">
            <a href="https://www.instagram.com/idelp.mza/?hl=es-la" class="nav-link" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://api.whatsapp.com/send?phone=5492612427937" class="nav-link border border-light rounded" target="blank">
              <i class="fab fa-whatsapp mr-2"></i>IDELP
            </a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<!-- Navbar -->
