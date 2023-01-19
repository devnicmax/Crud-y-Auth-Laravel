<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title') | Sistema de Partidos</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-6 col-lg-3 mx-auto">
        <div class="formContainer">
          <img class="logo img-fluid" src="{{ asset('images/logo.png') }}" alt="">
          @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    @endforeach
                </ul>
            </div>
          @endif
          <form action="{{ route('validate-register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-3">
              <label class="mb-2" for="username">Correo Electrónico</label>
              <input class="form-control" name="email" type="email" placeholder="correo@electronico"/>
            </div>
            <div class="form-group mt-3">
                <label class="mb-2" for="password">Nombre y Apellido</label>
                <input class="form-control" name="name" type="text" placeholder="Ej: Pedro Gimenez"/>
              </div>
            <div class="form-group mt-3">
              <label class="mb-2" for="password">Contraseña</label>
              <input class="form-control" name="password" type="password" placeholder="Minimo 8 caracteres"/>
            </div>
            <div class="form-group mt-3">
                <label class="mb-2" for="password">Repetir Contraseña</label>
                <input class="form-control" name="repassword" type="password" placeholder="Minimo 8 caracteres"/>
              </div>
            <button class="btn btn-lg w-100 mt-4 button">Registrarse</button>
          </form>
        </div>
      </div>
      <a class="register" href="{{ url('/') }}">Ingresar con su cuenta</a>
    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>