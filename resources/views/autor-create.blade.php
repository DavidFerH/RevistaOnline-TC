@extends('layout/template')

@section('CSS')
    <link rel="stylesheet" href="{{ url('css/createEntry.css') }}">
@endsection

@section('pageTitle', 'Bienvenidos a la revista de la UI1')

@section('content')
    <div class="row">
        <div class="col-12 mt-3">
            <h3 class="text-center">Formulario para añadir un nuevo autor</h3>

            <form class="row needs-validation justify-content-center mt-4" action="{{route('autor.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Name and surname of the author -->
                <div class="col-4">
                    <input type="text" class="form-control" name="DNI" placeholder="DNI" aria-label="DNI" required>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" aria-label="Nombre" required>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" aria-label="Apellidos" required>
                </div>
                <div class="col-8 mt-2">
                    <div class="form-floating">
                        <textarea class="form-control" name="descripcion" placeholder="Escriba aqui su descripción" id="descripcion" style="height: 400px" required></textarea>
                        <label for="floatingTextarea2">Descripcion del autor</label>
                    </div>
                </div>
                <div class="col-3 mt-2"></div>
                <div class="col-4 text-center">
                    <button type="submit" class="btn submitBtn"><span class="fas fa-user-plus">
                        </span> Añadir autor
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
