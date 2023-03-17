@extends('layout/template')

@section('pageTitle', 'Bienvenidos a la revista de la UI1 - Crear autor')
    
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
          
                  
            </div>
        </div>
    </div>
@endsection