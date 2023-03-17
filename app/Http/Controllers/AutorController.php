<?php

namespace App\Http\Controllers;

use App\Models\autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $autores = Autor::all();
        return view('autor-index', compact('autores'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createAutor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $autor = new Autor();
        $autor->dni = $request->post('DNI');
        $autor->nombre = $request->post('NOMBRE');
        $autor->apellidos = $request->post('APELLIDOS');
        $autor->descripcion = $request->post('DESCRIPCION');
        $autor->save();

        return redirect()->route("autor-index.index")->with("success", "Autor añadido correctamente");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(autor $autor)
    {
        //
        return view('actualizaAutor');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autor $autor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(autor $autor)
    {
        //
        return view('eliminaAutor');
    }
}
