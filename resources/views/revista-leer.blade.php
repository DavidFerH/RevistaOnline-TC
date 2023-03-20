@extends('layout/template')

@section('CSS')
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
@endsection

@section('pageTitle', 'Bienvenidos a la revista de la UI1')
    
@section('content')
    <div class="row">
        <div class="col-12 mt-3">
            <div class="text-center">
                <h3>{{ $revista->TITULO }}</h3>
            </div>
        </div>
    </div>

    @php
        $route = $revista->PORTADA;
        $explodedRoute = explode("/", $route);
        $imageRoute = end($explodedRoute);
    @endphp

    <div class="row">
        <div class="col-12 mt-2">
            <div class="card mt-2 mx-auto" style="width: 66rem;">
                <img class="card-img-top mt-2 mx-auto" src="{{ url("covers/$imageRoute") }}" alt="Imagen revista" style="width:40%;">
                <div class="card-body">
                    <p class="card-text"><b>Titulo:</b> {{ $revista->TITULO }}</p>
                    <p class="card-text"><b>Editorial:</b> {{ $revista->EDITORIAL }}</p>
                    <p class="card-text"><b>Número de revista:</b> {{ $revista->NUMERO }}</p>
                    <p class="card-text"><b>Código de revista:</b> {{ $revista->COD_REV }}</p>
                    <p class="card-text"><b>Fecha publicacion:</b> {{ $revista->FECHA }}</p>
                    @if ($articulos)
                        <hr>
                        <h3 class="card-title text-center">Articulos relacionados</h3>
                        @foreach ($articulos as $articulo)
                            <hr>
                            <h5 class="card-text"><b>{{ $articulo->TITULO }}</b></h5>
                            <p class="card-text">{{ $articulo->CONTENIDO }}</p>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection