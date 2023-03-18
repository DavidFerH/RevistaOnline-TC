<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Models\revistas;
use Illuminate\Http\Request;

class AutorController extends Controller {
    public function index() {
        $autores = autor::all();
        $revistas = Revistas::all();

        return view('autor-index', compact('autores', 'revistas')); 
    }

    public function create() {
        $autores = autor::all();
        return view('createEntry', compact('autores'));     
        
    }

    public function store(Request $request) {
        $autor = new Autor();
        $autor->dni = $request->post('DNI');
        $autor->nombre = $request->post('nombre');
        $autor->apellidos = $request->post('apellidos');
        $autor->descripcion = $request->post('descripcion');
        $autor->save();

        return redirect()->route("autor.index")->with("success", "Autor añadido correctamente");

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
