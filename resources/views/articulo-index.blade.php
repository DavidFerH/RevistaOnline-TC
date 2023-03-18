@extends('layout/template')

@section('CSS')
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
@endsection

@section('pageTitle', 'Bienvenidos a la revista de la UI1')
    
@section('content')
    <div class="row">
        <div class="col-12 mt-3">
            <div class="text-center">
                <h3>ARTICULOS</h3>
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
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection