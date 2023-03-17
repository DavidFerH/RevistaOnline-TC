@extends('layout/template')

@section('CSS')
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
@endsection

@section('pageTitle', 'Bienvenidos a la revista de la UI1')
    
@section('content')
    <div class="row">
        <div class="col-12 mt-2">
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
                        <h5 class="card-title text-center">{{ $revista->TITULO}}</h5>
                        <p class="card-text">{{ $revista->NUMERO }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection