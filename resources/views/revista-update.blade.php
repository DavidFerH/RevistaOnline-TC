@extends('layout/template')

@section('CSS')
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
@endsection

@section('pageTitle', 'Bienvenidos a la revista de la UI1')
    
@section('content')
<div class="row">
        <div class="col-12 mt-3">
            <h3 class="text-center">Formulario para editar la revista '{{ $revista->TITULO }}'</h3>
            <form class="row needs-validation justify-content-center mt-4" action="{{ route('revista.update', $revista->COD_REV) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- @method('PUT') --}}


    <div class="row">
        <div class="col-12 mt-2">
            
                <div class="card mt-2 mx-auto" style="width: 66rem;">
                    <div class="card-body">
                    <input type="text" class="form-control" name="TITULO" value="{{ $revista->TITULO }}">
                        <hr>
                    <input type="text" class="form-control" name="EDITORIAL" value="{{ $revista->EDITORIAL }}">
                    <input type="text" class="form-control" name="NUMERO" value="{{ $revista->NUMERO }}">
                    <input type="date" class="form-control" name="FECHA" value="{{ $revista->FECHA }}">
                <div class="col-4 mt-2">
                    <input type="file" class="form-control" name="fileToUpload" placeholder="Portada" aria-label="Portada">
                    <p class="card-text"><b>Portada: <img src="../../{{$revista->PORTADA}}" alt="Imagen revista" style="width:60%;"></p>
                </div>                

                        <div class="col-3 mt-2"></div>
                <div class="col-4 text-center">
                    <button type="submit" class="btn submitBtn">
                        <span class="fas fa-user-edit"></span> Editar revista
                    </button>
                </div>

             </form>


                    </div>
                </div>
        </div>
    </div>
@endsection