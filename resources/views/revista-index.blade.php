@extends('layout/template')

@section('CSS')
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
@endsection

@section('pageTitle', 'Bienvenidos a la revista de la UI1')
    
@section('content')
    <div class="row">
        <div class="col-12 mt-3">
            <div class="text-center">
                <h3>REVISTAS</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-2">
            @foreach ($revistas as $revista)
                <div class="card mt-2 mx-auto" style="width: 66rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $revista->TITULO }}</h5>
                        <hr>
                        <p class="card-text"><b>Titulo:</b> {{ $revista->TITULO }}</p>
                        <p class="card-text"><b>Editorial:</b> {{ $revista->EDITORIAL }}</p>
                        <p class="card-text"><b>Número de revista:</b> {{ $revista->NUMERO }}</p>
                        <p class="card-text"><b>Código de revista:</b> {{ $revista->COD_REV }}</p>
                        <hr>
                        <small class="card-text"><b>Fecha publicacion:</b> {{ $revista->FECHA }}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection