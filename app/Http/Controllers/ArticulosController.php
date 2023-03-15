<?php

namespace App\Http\Controllers;

use App\Models\Articulos;
use Illuminate\Http\Request;

class ArticulosController extends Controller {

    public function index() {
        return view('welcome');
    }

    public function create() {
        // return view('createEntry');
        return('Añadir vista de create entry');
    }

    public function store(Request $request) {
        //
    }

    public function show(Articulos $articulos) {
        //
    }

    public function edit(Articulos $articulos) {
        //
    }

    public function update(Request $request, Articulos $articulos) {
        //
    }

    public function destroy(Articulos $articulos) {
        //
    }
}
