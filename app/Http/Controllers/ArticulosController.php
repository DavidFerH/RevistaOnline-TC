<?php

namespace App\Http\Controllers;

use App\Models\articulos;
use Illuminate\Http\Request;

class ArticulosController extends Controller {
    public function index() {
        $articles = Articulos::all();
        return view('index', compact('articles'));
    }

    public function create() {
        return('Añadir vista de create entry');
    }

    public function store(Request $request) {
        //
    }

    public function show(articulos $articulos) {
        //
    } 

    public function edit(articulos $articulos) {
        //
    }

    public function update(Request $request, articulos $articulos) {
        //
    }

    public function destroy(articulos $articulos) {
        //
    }
}
