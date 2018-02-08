<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="{{ asset('img/logo.png') }}" class="rounded-circle border" width="80" height="80" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('categories.index') }}">Categorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Articulos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Imagenes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tags</a>
      </li>
    </ul>
    <ul class="navbar-nav justify-content-between">
      <li class="nav-item">
        <a class="nav-link" href="#">Página principal</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
