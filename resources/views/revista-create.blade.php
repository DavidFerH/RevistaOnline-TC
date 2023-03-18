@extends('layout/template')

@section('CSS')
    <link rel="stylesheet" href="{{ url('css/createEntry.css') }}">
@endsection

@section('pageTitle', 'Bienvenidos a la revista de la UI1')

@section('content')
    <div class="row">
        <div class="col-12 mt-3">
            <h3 class="text-center">Formulario para añadir una nueva revista científica</h3>
            <!-- Form to add a new magazine -->
            <form class="row needs-validation justify-content-center mt-4" action="{{route('revista.store')}} " method="post" enctype="multipart/form-data">
                @csrf 
                <!-- Name and surname of the author -->
                <div class="col-4">
                    <input type="text" class="form-control" name="title" placeholder="Titulo" aria-label="Titulo" required>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" name="editorial" placeholder="Editorial" aria-label="Editorial" required>
                </div>
                <div class="col-3">
                    <input type="number" class="form-control" name="number" placeholder="Numero" aria-label="Numero" required>
                </div>
                <div class="col-4 mt-2">
                    <input type="date" class="form-control" name="publicationDate" placeholder="Fecha de publicacion" aria-label="Fecha de publicacion" required>
                </div>
                <div class="col-7 mt-2"></div>
                <div class="col-4 mt-2">
                    <input type="file" class="form-control" name="coverImage" placeholder="Portada" aria-label="Portada"    >
                </div>
                <div class="col-7 mt-2"></div>
                <div class="col-4 text-center">
                    <button type="submit" class="btn submitBtn">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@endsection