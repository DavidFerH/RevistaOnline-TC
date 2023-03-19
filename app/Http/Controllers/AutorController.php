<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Models\revistas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutorController extends Controller {
    public function index() {
        $autores = autor::all();

        return view('autor-index', compact('autores')); 
    }

    public function create() {
        return view('autor-create');
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

    public function edit($DNI) {
        $autor = DB::table('autor')->where('DNI', $DNI)->first();
        return view('autor-update', compact('autor'));
    }

    public function update(Request $request, $DNI) {        
        $nombre = $request->post('nombre');
        $apellidos = $request->post('apellidos');
        $descripcion = $request->post('descripcion');

        autor::where('DNI', $DNI)->update([
            'NOMBRE' => $nombre,
            'APELLIDOS' => $apellidos,
            'DESCRIPCION' => $descripcion
        ]);

        return redirect()->route("autor.index")->with("success", "Autor actualizado correctamente");
    }

    public function destroy(autor $autor) {
        //
        return view('eliminaAutor');
    }
}
