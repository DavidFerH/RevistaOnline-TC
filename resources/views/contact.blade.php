@extends('layout/template')

@section('CSS')
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
    <link rel="stylesheet" href="{{ url('css/createEntry.css') }}">
@endsection

@section('pageTitle', 'Bienvenidos a la revista de la UI1')
    
@section('content')
    <div class="row">
        <div class="col-12 mt-3">
            <div class="text-center">
                <h3>Formulario de Contacto</h3>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            </div>
        </div>
    @endif
<div class="row">
    <div class="col-12 mt-2">

        <form class="row needs-validation justify-content-center mt-4"  action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="col-5">
                <label class="col-sm-2 col-form-label">Email</label> 
                <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="col-5">
                        <label class="col-sm-2 col-form-label">Asunto</label>

                        <input type="text" class="form-control" name="asunto" placeholder="Asunto">
                </div>

                <div class="col-10 mt-2">
                            <div class="form-floating">
                                <textarea class="form-control" name="message" placeholder="Escriba aqui su mensaje" id="content" style="height: 400px" required></textarea>
                                <label for="floatingTextarea2">Escriba aquí su mensaje</label>
                            </div>
                </div>
            </div>

            </div>

            <div class="col-4 text-center">
                <button type="submit" class="btn submitBtn">
                    <span class="fas fa-user-plus"></span> Enviar mensaje
                </button>
            </div>
</form>


<div class="col-12 text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2949.0342566395507!2d-3.7096483!3d42.34179299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd45fd2efd071ea9%3A0xd590fefd35625541!2sUniversidad%20Isabel%20I%20(UI1)!5e0!3m2!1ses!2ses!4v1679333329409!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

</div>
</div>
</div>
@endsection