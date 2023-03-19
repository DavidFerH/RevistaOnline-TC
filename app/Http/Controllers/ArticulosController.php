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

    public function showArticles() {
        $articles = Articulos::all();
        $message = "ULTIMOS ARTÍCULOS";
        return view('show-articulos', compact('articles', 'message'));
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
        $articulo->autor()->attach($articulo->cod_art);

        $articulo->save();

        return redirect()->route("articulo.index")->with("success", "Artículo añadido correctamente");

    }

    public function show(articulos $articulos) {
        //
    } 

    public function edit($COD_ART) {
        $articulo = DB::table('articulos')->where('COD_ART', $COD_ART)->first();
        $revistas = Revistas::all();
        return view('articulo-update', compact('articulo', 'revistas'));
    }

    public function update(Request $request, $COD_ART) {
        
        $titulo = $request->post('TITULO');
        $contenido = $request->post('CONTENIDO');
        $COD_REV = $request->post('COD_REV');

        Articulos::where('COD_ART', $COD_ART)->update([
            'TITULO' => $titulo,
            'CONTENIDO' => $contenido,
            'COD_REV' => $COD_REV
        ]);

        return redirect()->route("articulo.index")->with("success", "Artículo actualizado correctamente");

    }

    public function destroy($COD_ART) {
        //
        $articulo = DB::table('articulos')->where('COD_ART', $COD_ART)->delete(); 
        return redirect()->route("articulo.index")->with("success", "Artículo eliminado correctamente");
    }
}
