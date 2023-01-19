@extends('template')

@section('title', 'Dashboard');

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Listado de Partidos de la Provincia de Buenos Aires</h1>
        </div>
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{Session::get('success')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>
        @endif
        <div class="col table">
          <button><a href="{{ url('/partidos/create') }}">Crear nuevo partido</a></button>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Partido</th>
                    <th scope="col">Latitud</th>
                    <th scope="col">Longitud</th>
                    <th scope="col">Optiones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach($partidos as $partido)
                    <td>{{ $partido->id }}</td>
                    <td>{{ $partido->name }}</td>
                    <td>{{ $partido->latitude }}</td>
                    <td>{{ $partido->longitude}}</td>
                    
                    <td><button><a href="{{ route('edit-partido', $partido->id) }}">Editar</a></button>
                        <form method="post" action="{{ route('delete-partido', $partido->id) }}">
                          {{ method_field('DELETE') }}
                          @csrf
                          <button type="submit" class="button">Eliminar</button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
  </div>
@endsection