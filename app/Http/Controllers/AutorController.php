<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Models\revistas;
use Illuminate\Http\Request;

class AutorController extends Controller {
    public function index() {
        $authors = autor::all();
        $magazines = Revistas::all();

        return view('createEntry', compact('authors', 'magazines'));
    }

    public function create() {
        return view('createAutor');
    }

    public function store(Request $request) {
        $autor = new Autor();
        $autor->dni = $request->post('DNI');
        $autor->nombre = $request->post('NOMBRE');
        $autor->apellidos = $request->post('APELLIDOS');
        $autor->descripcion = $request->post('DESCRIPCION');
        $autor->save();

        return redirect()->route("autor-index.index")->with("success", "Autor añadido correctamente");

    }

    public function show(autor $autor) {
        //
    }

    public function edit(autor $autor) {
        //
        return view('actualizaAutor');
    }

    public function update(Request $request, autor $autor) {
        //
    }

    public function destroy(autor $autor) {
        //
        return view('eliminaAutor');
    }
}
