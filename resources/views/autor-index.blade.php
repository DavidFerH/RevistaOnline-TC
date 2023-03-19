@extends('layout/template')

@section('CSS')
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
@endsection

@section('pageTitle', 'Bienvenidos a la revista de la UI1')
    
@section('content')
    <div class="row">
        <div class="col-12 mt-3">
            <div class="text-center">
                <h3>GESTIÓN DE AUTORES</h3>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-12 mt-2">
            @foreach ($autores as $autor)
                <div class="card mt-2 mx-auto" style="width: 66rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $autor->APELLIDOS . ", " . $autor->NOMBRE}}</h5>
                        <hr>
                        <p class="card-text"><b>Nombre:</b> {{ $autor->NOMBRE }}</p>
                        <p class="card-text"><b>Apellidos:</b> {{ $autor->APELLIDOS }}</p>
                        <p class="card-text"><b>DNI:</b> {{ $autor->DNI }}</p>
                        <p class="card-text"><b>Descripción del autor:</b> </br> {{ $autor->DESCRIPCION }}</p>
                        <hr>
                        <small class="card-text"><b>Creado:</b> {{ $autor->created_at }}</small>
                        </br>
                        <small class="card-text"><b>Ultima actualización:</b> {{ $autor->updated_at }}</small>
                        <hr>
                        <form action="{{ route("autor.edit", $autor->DNI) }}" method="POST">
                            @csrf
                            <button class="btn btn-warning btn-sm">
                                <span class="fas fa-user-edit"></span>
                            </button>
                        </form>
                        <form class="mt-2" action="{{ route("autor.destroy", $autor->DNI) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                <span class="fas fa-user-times"></span>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection