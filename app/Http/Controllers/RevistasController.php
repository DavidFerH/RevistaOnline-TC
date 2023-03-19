<?php

namespace App\Http\Controllers;

use App\Models\revistas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RevistasController extends Controller {

    public function index() {
        $revistas = Revistas::all();
        return view('revista-index', compact('revistas'));
    }

    public function create() {
        return view('revista-create');
    }

    public function store(Request $request) {
        
        $revista = new Revistas();
        // $revista->cod_rev = $request->post('COD_REV');
        $revista->titulo = $request->post('title');
        $revista->numero = $request->post('number');
        $revista->editorial = $request->post('editorial');
        $revista->fecha = $request->post('publicationDate');
        $revista->portada = "testfile"; //$request->post('coverImage'); TO-DO CREAR UPLOAD PARA LA IMAGEN
        $revista->save();

        return redirect()->route("revista.index")->with("success", "Revista añadida correctamente");
    }

    public function show(revistas $revistas) {
        //
    }

    public function edit($COD_REV) {
        $revista = DB::table('revistas')->where('COD_REV', $COD_REV)->first();
        return view('revista-update', compact('revista'));        
    }

    public function update(Request $request, $COD_REV) {
  
        $titulo = $request->post('TITULO');
        $numero = $request->post('NUMERO');
        $editorial = $request->post('EDITORIAL');
        $fecha = $request->post('FECHA');
        $portada = "testfile"; //$request->post('coverImage'); TO-DO CREAR UPLOAD PARA LA IMAGEN

        Revistas::where('COD_REV', $COD_REV)->update([
            'TITULO' => $titulo,
            'NUMERO' => $numero,
            'EDITORIAL' => $editorial,
            'FECHA' => $fecha,
            'PORTADA' => $portada
        ]);

        return redirect()->route("revista.index")->with("success", "Revista actualizado correctamente");        
    }

    public function destroy($COD_REV) {
        $revista = DB::table('revistas')->where('COD_REV', $COD_REV)->delete(); 
        return redirect()->route("revista.index")->with("success", "Revista eliminada correctamente");
    }
}
