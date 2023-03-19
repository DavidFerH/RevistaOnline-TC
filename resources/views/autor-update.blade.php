@extends('layout/template')

@section('CSS')
    <link rel="stylesheet" href="{{ url('css/createEntry.css') }}">
@endsection

@section('pageTitle', 'Bienvenidos a la revista de la UI1')

@section('content')
    <div class="row">
        <div class="col-12 mt-3">
            <h3 class="text-center">Formulario para editar al autor '{{ $autor->NOMBRE . " " . $autor->APELLIDOS }}'</h3>
            <form class="row needs-validation justify-content-center mt-4" action="{{ route('autor.update', $autor->DNI) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- @method('PUT') --}}
                <!-- Name and surname of the author -->
                <div class="col-4">
                    <input type="text" class="form-control" name="DNI" aria-label="DNI" value="{{ $autor->DNI }}" readonly>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" name="nombre" aria-label="Nombre" value="{{ $autor->NOMBRE }}" required>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" name="apellidos" aria-label="Apellidos" value="{{ $autor->APELLIDOS }}" required>
                </div>
                <div class="col-8 mt-2">
                    <div class="form-floating">
                        <textarea class="form-control" name="descripcion" id="descripcion" style="height: 400px" required>@php echo $autor->DESCRIPCION;@endphp</textarea>
                        <label for="floatingTextarea2">Descripcion del autor</label>
                    </div>
                </div>
                <div class="col-3 mt-2"></div>
                <div class="col-4 text-center">
                    <button type="submit" class="btn submitBtn">
                        <span class="fas fa-user-edit"></span> Editar autor
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
