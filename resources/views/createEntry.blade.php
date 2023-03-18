@extends('layout/template')

@section('CSS')
    <link rel="stylesheet" href="{{ url('css/createEntry.css') }}">
@endsection

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
                    <h3>Formulario para añadir un nuevo artículo científico</h3>
                    <!-- Form to add a new article -->
                    <form class="row needs-validation justify-content-center mt-4" action="PHP Processors/addArticle.php" method="post">
                        <div class="col-5">
                        <label for="author">Seleccione el autor</label>
                        <select id="author" class="form-select" name="author" aria-label="Default select example">
                            
                        </select>
                        </div>
                        <div class="col-5">
                            
                        </div>
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
                <!-- Tab pane to add a magazine -->
                <div class="tab-pane fade" id="v-pills-magazine" role="tabpanel" aria-labelledby="v-pills-magazine-tab">
                    <h3>Formulario para añadir una nueva revista científica</h3>
                    <!-- Form to add a new magazine -->
                    <form class="row needs-validation justify-content-center mt-4" action="PHP Processors/addMagazine.php" method="post" enctype="multipart/form-data">
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
                            <input type="file" class="form-control" name="coverImage" placeholder="Portada" aria-label="Portada">
                        </div>
                        <div class="col-7 mt-2"></div>
                        <div class="col-4">
                            <button type="submit" class="btn submitBtn">Enviar</button>
                        </div>
                    </form>
                </div>
                <!-- Tab pane to add an author -->
                <div class="tab-pane fade" id="v-pills-authors" role="tabpanel" aria-labelledby="v-pills-authors-tab">
                    <h3>Formulario para añadir un nuevo autor</h3>
                    <!-- Form to add a new author -->
                    <form class="row needs-validation justify-content-center mt-4" action="PHP Processors/addAutor.php" method="post" enctype="multipart/form-data">
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
                        <div class="col-4">
                            <button type="submit" class="btn submitBtn">Enviar</button>
                        </div>
                    </form>
                </div>
                <!-- Tab pane to manage articles -->
                <div class="tab-pane fade" id="v-pills-manageArticles" role="tabpanel" aria-labelledby="v-pills-manageArticles-tab">
                    <h3>Formulario para modificar un artículo científico</h3>
                    <!-- Form to select an article -->
                    <form class="row needs-validation justify-content-center mt-4" action="modifyArticle.php" method="post">
                        <div class="col-5">
                            <label for="articles">Seleccione el artículo a modificar</label>
                            <select id="articles" class="form-select" name="cod_art" aria-label="Default select example">
                                <!-- Obtener nombre e id del articulo para mostrar en un option -->
                            </select>
                        </div>
                            <div class="col-4">
                                <button type="submit" class="btn submitBtn">Enviar</button>
                            </div>
                    </form>
                </div>
                <!-- Tab pane to manage magazines -->
                <div class="tab-pane fade" id="v-pills-manageMagazines" role="tabpanel" aria-labelledby="v-pills-manageMagazines-tab">
                    <h3>Formulario para modificar una revista científica</h3>
                    <form class="row needs-validation justify-content-center mt-4" action="modifyMagazine.php" method="post">
                        <div class="col-5">
                            <label for="magazines">Seleccione la revista a modificar</label>
                            <select id="magazines" class="form-select" name="IDmagazine" aria-label="Default select example">
                                <!-- Obtener nombre e id de la revista para mostrar en un option -->
                            </select>
                        </div>
                            <div class="col-4">
                                <button type="submit" class="btn submitBtn">Enviar</button>
                            </div>
                    </form>
                </div>
                <!-- Tab pane to manage author -->
                <div class="tab-pane fade" id="v-pills-manageAuthors" role="tabpanel" aria-labelledby="v-pills-manageAuthors-tab">
                    <h3>Formulario para modificar un autor</h3>
                    <form class="row needs-validation justify-content-center mt-4" action="modifyAutor.php" method="post">
                        <div class="col-5">
                            <label for="autores">Seleccione el autor a modificar</label>
                            <select id="autores" class="form-select" name="IDautor" aria-label="Default select example">
                                <!-- Obtener nombre e id de los autores para mostrar en un option -->
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