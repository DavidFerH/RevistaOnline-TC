@extends('layout/template')

@section('CSS')
    <link rel="stylesheet" href="{{ url('css/createEntry.css') }}">
@endsection

@section('pageTitle', 'Bienvenidos a la revista de la UI1')

@section('content')
    <div class="row">
        <div class="col-12 mt-3">
            <h3 class="text-center">Formulario para editar al articulo '{{ $articulo->TITULO . " " . $articulo->CONTENIDO }}'</h3>
            <form class="row needs-validation justify-content-center mt-4" action="{{ route('articulo.update', $articulo->COD_ART) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- @method('PUT') --}}
                <!-- Name and surname of the author -->
                <div class="col-4">
                    <input type="text" class="form-control" name="TITULO" aria-label="TITULO" value="{{ $articulo->TITULO }}">
                </div>

                <div class="col-4">
                    <input type="text" class="form-control" name="CONTENIDO" aria-label="CONTENIDO" value="{{ $articulo->CONTENIDO }}">
                </div>


                <div class="col-3 mt-2"></div>
                <div class="col-4 text-center">
                    <button type="submit" class="btn submitBtn">
                        <span class="fas fa-user-edit"></span> Editar articulo
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
