@extends('layout/template')

@section('CSS')
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
@endsection

@section('pageTitle', 'Bienvenidos a la revista de la UI1')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Nuevo mensaje del formulario de contacto</h3>
                </div>
                    <div class="card-body">
                    <h3 class="card-title">Datos del mensaje</h3>
                    <p class="card-text"><b>Email:</b> {{ $data['email'] }}.</p>
                    <p class="card-text"><b>Subject:</b> {{ $data['asunto'] }}.</p>
                    <p class="card-text"><b>Message:</b> {{ $data['message'] }}.</p>
                
                </div>
            </div>
        </div>
    </div>
@endsection