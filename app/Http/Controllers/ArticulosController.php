<?php

namespace App\Http\Controllers;

use App\Models\articulos;
use App\Models\revistas;
use Illuminate\Http\Request;

class ArticulosController extends Controller {
    public function index() {
        $articles = Articulos::all();
        $magazines = revistas::all();
        return view('index', compact('articles', 'magazines'));
    }

    public function create() {
        return view('createEntry');        
    }

    public function store(Request $request) {
        //
        $articulo = new Articulos();
        $articulo->cod_art = $request->post('COD_ART');
        $articulo->titulo = $request->post('title');
        $articulo->contenido = $request->post('article');
        //FALTA EL SELECT DE REVISTAS AQUÍ
        $articulo->cod_rev = 1; //$request->post('COD_REV');
        $articulo->autor()->attach($articulo->cod_art);

        $articulo->save();

        return redirect()->route("articulo.index")->with("success", "Artículo añadido correctamente");

    }

    public function show(articulos $articulos) {
        //
    } 

    public function edit(articulos $articulos) {
        //
    }

    public function update(Request $request, articulos $articulos) {
        //
    }

    public function destroy(articulos $articulos) {
        //
    }
}
