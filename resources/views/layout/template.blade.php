<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('images/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    @yield('CSS')
    
    <!-- Title -->
    <title>@yield('pageTitle')</title>

    </head>
    <body><!-- NavBar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('index.index') }}"><img src="{{ url('images/logo.png') }}" alt="Logo" style="width: 50px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('index.index') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Publicaciones</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('articulo.index') }}">Articulos</a></li>
                                <li><a class="dropdown-item" href="{{ route('revista.index') }}">Revistas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Administración</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('autor.create') }}">Creación de autores</a></li>
                                <li><a class="dropdown-item" href="{{ route('articulo.create') }}">Creación de articulos</a></li>
                                <li><a class="dropdown-item" href="{{ route('revista.create') }}">Creación de revistas</a></li>
                                <li><a class="dropdown-item" href="{{ route('autor.index') }}">Gestión de autores</a></li>
                                <li><a class="dropdown-item" href="{{ route('articulo.editList') }}">Gestión de articulos</a></li>
                                <li><a class="dropdown-item" href="{{ route('revista.editList') }}">Gestión de revistas</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid main-container">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="text-center text-lg-start bg-white text-muted mt-5 footerNavBar">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            </section>
            <!-- Section: Links  -->
            <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3 text-secondary"></i>Sobre el trabajo
                    </h6>
                    <p>
                        Trabajo desarrollado por Pedro Gutiérrez y David Ferrero para la asignatura Servicios y Aplicaciones Orientadas a la web
                    </p>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
                    <p><i class="fas fa-home me-3 text-secondary"></i>C. de Fernán González, 76, 09003 Burgos</p>
                    <p><i class="fas fa-envelope me-3 text-secondary"></i>comunicacion@ui1.es</p>
                    <p><i class="fas fa-phone me-3 text-secondary"></i> 947 671 731</p>
                    <p><i class="fas fa-address-book"></i><a class="nav nav-link" style="display: inline" href="{{route('contact.form')}}"> Contacto</a></p>
                </div>
                <!-- Grid column -->
                </div>
                <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->
            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
                © 2023 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Servicios y Aplicaciones Orientadas a la web</a>
            </div>
            <!-- Copyright -->
        </footer>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>