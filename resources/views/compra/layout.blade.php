<!DOCTYPE html>
<html>
<head>
  {{-- <title>Hola</title> --}}
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
</head>
<body>

{{-- <nav class="navbar navbar-dark bg-primary"> --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><h3>Steven</h3></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('compras.index') }}">Productos<span class="sr-only">(current)</span></a>
        {{-- <a class="btn btn-success mb-3" href="{{ route('compras.create') }}">Crear libro</a> --}}
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('compras.create') }}">Agregar producto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:83/compra/resources/views/compra/login.blade.php" tabindex="-1" aria-disabled="true">Ingresar</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

  </div>
    <ul class="navbar-nav mr-auto mr-sm-4 mt-lg-0">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown


        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('logout') }}">

        {{ csrf_field() }}
      <button class="btn btn-outline-danger my-2 my-sm-0" style="margin-left: 20px;" type="submit">Cerrar Sesión</button>
    </form>

          {{-- <a class="dropdown-item" href="#">{{auth()->user()->name}}</a> --}}
      
{{--           <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> --}}
      </li>
    </ul>

</nav>


@yield('content')

@yield('script')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>