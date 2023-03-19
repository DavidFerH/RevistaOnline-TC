@extends('layout/template')

@section('CSS')
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
@endsection

@section('pageTitle', 'Bienvenidos a la revista de la UI1')
    
@section('content')
    <div class="row">
        <div class="col-12 mt-3">
            <div class="text-center">
                <h3>GESTIÓN DE ARTICULOS</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-4">
            @foreach ($articles as $article)
            <div class="card mt-2 mx-auto" style="width: 66rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $article->TITULO }}</h5>
                    <hr>
                    <p class="card-text"><b>Contenido del artículo:</b> </br> {{ $article->CONTENIDO }}</p>
                    <hr>
                        <form action="{{ route("articulo.edit", $article->COD_ART) }}" method="POST">
                            @csrf
                            <button class="btn btn-warning btn-sm">
                                <span class="fas fa-user-edit"></span>
                            </button>
                        </form>
                        <form class="mt-2" action="{{ route("articulo.destroy", $article->COD_ART) }}" method="POST">
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