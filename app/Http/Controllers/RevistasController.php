<?php

namespace App\Http\Controllers;

use App\Models\revistas;
use Illuminate\Http\Request;

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

    public function edit(revistas $revistas) {
        //
    }

    public function update(Request $request, revistas $revistas) {
        //
    }

    public function destroy(revistas $revistas) {
        //
    }
}
