<?php

namespace App\Http\Controllers;

use App\Models\revistas;
use Illuminate\Http\Request;

class RevistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $revistas = Revistas::all();
        return view('revista-index', compact('revistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('createRevista');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
        $revista = new Revista();
        $revista->cod_rev = $request->post('COD_REV');
        $revista->titulo = $request->post('TITULO');
        $revista->numero = $request->post('NUMERO');
        $revista->editorial = $request->post('EDITORIAL');
        $revista->fecha = $request->post('FECHA');
        $revista->portada = $request->post('PORTADA');
        $revista->save();

        return redirect()->route("revista.index")->with("success", "Revista añadida correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\revistas  $revistas
     * @return \Illuminate\Http\Response
     */
    public function show(revistas $revistas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\revistas  $revistas
     * @return \Illuminate\Http\Response
     */
    public function edit(revistas $revistas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\revistas  $revistas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, revistas $revistas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\revistas  $revistas
     * @return \Illuminate\Http\Response
     */
    public function destroy(revistas $revistas)
    {
        //
    }
}
