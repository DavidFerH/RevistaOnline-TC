<?php

namespace App\Http\Controllers;

use App\Models\articulos;
use App\Models\autor;
use App\Models\revistas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticulosController extends Controller {
    public function index() {
        $articles = Articulos::all();
        return view('articulo-index', compact('articles'));
    }

    public function create() {
        $authors = autor::all();
        return view('articulo-create', compact('authors'));      
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

    public function edit($COD_ART) {

        $articulo = DB::table('articulos')->where('COD_ART', $COD_ART)->first();
        return view('articulo-update', compact('articulo'));

    }

    public function update(Request $request, $COD_ART) {
        
        $titulo = $request->post('TITULO');
        $contenido = $request->post('CONTENIDO');

        Articulos::where('COD_ART', $COD_ART)->update([
            'TITULO' => $titulo,
            'CONTENIDO' => $contenido,
        ]);

        return redirect()->route("articulo.index")->with("success", "Artículo actualizado correctamente");

    }

    public function destroy($COD_ART) {
        //
        $articulo = DB::table('articulos')->where('COD_ART', $COD_ART)->delete(); 
        return redirect()->route("articulo.index")->with("success", "Artículo eliminado correctamente");
    }
}
