<?php

namespace App\Http\Controllers;

use App\Models\articulos;
use App\Models\Index;
use Illuminate\Http\Request;

class IndexController extends Controller {

    public function index() {
        $articles = articulos::all();
        return view('index', compact('articles'));
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        //
    }

    public function show(Index $index) {
        //
    }

    public function edit(Index $index) {
        //
    }

    public function update(Request $request, Index $index) {
        //
    }

    public function destroy(Index $index) {
        //
    }
}
