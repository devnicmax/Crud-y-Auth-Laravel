@extends("template")

@section("title", "Edición de datos de Partidos")

@section("content")

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Editar Partidos de la Provincia de Buenos Aires</h1>
        </div>
        <div class="col createform">
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
            @foreach($partidos as $partido)
            <form action="{{ route('update-partido', $partido->id) }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
            <div class="mb-3">
                <label for="name" class="form-label">Nombre del partido</label>
                <input type="text" class="form-control" name="name" value="{{ $partido->name }}" placeholder="Ej: 3 de Febrero">
            </div>
            <div class="mb-3">
                <label for="latitude" class="form-label">Latitud</label>
                <input type="text" class="form-control" name="latitude" value="{{ $partido->latitude }}" placeholder="0.00000">
            </div>
            <div class="mb-3">
                <label for="longitude" class="form-label">Longitud</label>
                <input type="text" class="form-control" name="longitude" value="{{ $partido->longitude }}" placeholder="0.00000">
            </div>
            <button class="btn btn-lg w-100 mt-4 button">Actualizar</button>
            <button class="btn btn-lg w-100 mt-4 button"><a href="javascript:history.back();">Volver</a></button>
            @endforeach    
        </form>
        </div>
    </div>
</div>


@endsection