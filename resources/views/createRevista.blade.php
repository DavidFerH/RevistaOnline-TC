@extends('layout/template')

@section('pageTitle', 'Bienvenidos a la revista de la UI1 - Crear Revista')
    
@section('content')
    <div class="row mt-3">
        <div class="col-12">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-article-tab" data-bs-toggle="pill" data-bs-target="#v-pills-article" type="button" role="tab" aria-controls="v-pills-article" aria-selected="true">Añadir articulo</button>
                    <button class="nav-link" id="v-pills-magazine-tab" data-bs-toggle="pill" data-bs-target="#v-pills-magazine" type="button" role="tab" aria-controls="v-pills-magazine" aria-selected="false">Añadir revista</button>
                    <button class="nav-link" id="v-pills-authors-tab" data-bs-toggle="pill" data-bs-target="#v-pills-authors" type="button" role="tab" aria-controls="v-pills-authors" aria-selected="false">Añadir autor</button>
                    <button class="nav-link" id="v-pills-manageArticles-tab" data-bs-toggle="pill" data-bs-target="#v-pills-manageArticles" type="button" role="tab" aria-controls="v-pills-manageArticles" aria-selected="false">Gestionar articulos</button>
                    <button class="nav-link" id="v-pills-manageMagazines-tab" data-bs-toggle="pill" data-bs-target="#v-pills-manageMagazines" type="button" role="tab" aria-controls="v-pills-manageMagazines" aria-selected="false">Gestionar revistas</button>
                    <button class="nav-link" id="v-pills-manageAuthors-tab" data-bs-toggle="pill" data-bs-target="#v-pills-manageAuthors" type="button" role="tab" aria-controls="v-pills-manageAuthors" aria-selected="false">Gestionar autores</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- Tab pane to add an article -->
                    <div class="tab-pane fade show active" id="v-pills-article" role="tabpanel" aria-labelledby="v-pills-article-tab">
                        <h3>Formulario para crear una nueva revista</h3>
                       
                        <form class="row needs-validation justify-content-center mt-4" action="{{ route('revista.store') }}" method="post">
                            <div class="col-5">
                            <div class="col-5 mt-2">
                                <input type="date" class="form-control" name="publicationDate" placeholder="Fecha de publicacion" aria-label="Fecha de publicacion" required>
                            </div>
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
                            <div class="col-4">
                                <button type="submit" class="btn submitBtn">Enviar</button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Tab pane to manage magazines -->
                    <div class="tab-pane fade" id="v-pills-manageMagazines" role="tabpanel" aria-labelledby="v-pills-manageMagazines-tab">
                        <h3>Formulario para modificar una revista científica</h3>
                        <form class="row needs-validation justify-content-center mt-4" action="{{ route('revista.store') }}" method="post">
                            <div class="col-5">
                                <label for="magazines">Seleccione la revista a modificar</label>
                                <select id="magazines" class="form-select" name="IDmagazine" aria-label="Default select example">
                                    
                                       
                    
                                    
                                </select>
                            </div>
                                <div class="col-4">
                                    <button type="submit" class="btn submitBtn">Enviar</button>
                                </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection