@extends('layout/template')

@section('CSS')
    <link rel="stylesheet" href="{{ url('css/createEntry.css') }}">
@endsection

@section('pageTitle', 'Bienvenidos a la revista de la UI1')

@section('content')
    <div class="row">
        <div class="col-12 mt-3">
            <h3 class="text-center">Formulario para añadir un nuevo artículo científico</h3>
            <!-- Form to add a new article -->
            <form class="row needs-validation justify-content-center mt-4" action="{{route('articulo.store')}}" method="post">
                @csrf 
                <div class="col-5">
                <label for="author">Seleccione el autor</label>
                <select id="author" class="form-select" name="author" aria-label="Default select example">
                    @foreach ($authors as $author)
                        <option value="{{ $author['DNI']  }}"> {{ $author['NOMBRE'] . " " . $author['APELLIDOS'] }} </option>
                    @endforeach
                </select>
                </div>
                <div class="col-5"></div>
                <div class="col-5 mt-2"></div>
                <div class="col-10 mt-2">
                    <input type="text" class="form-control" name="title" placeholder="Titulo del articulo" aria-label="Titulo del articulo" required>
                </div>
                <div class="col-10 mt-2">
                    <div class="form-floating">
                        <textarea class="form-control" name="article" placeholder="Escriba aqui su articulo" id="content" style="height: 400px" required></textarea>
                        <label for="floatingTextarea2">Cuerpo del articulo</label>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <button type="submit" class="btn submitBtn">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
