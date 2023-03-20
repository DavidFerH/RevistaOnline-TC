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

    public function showMagazines() {
        $revistas = Revistas::all();
        return view('show-revistas', compact('revistas'));
    }

    public function readMagazine($COD_REV) {
        $revista = DB::table('revistas')->where('COD_REV', $COD_REV)->first();
        $articulos = DB::table('articulos')->where('COD_REV', $COD_REV)->get();

        return view('revista-leer', compact('revista', 'articulos'));
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

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

        if ($this->subirImagen($target_file)) {
            $revista->portada = $target_file; //"testfile"; //$request->post('coverImage'); TO-DO CREAR UPLOAD PARA LA IMAGEN
            $revista->save();

            return redirect()->route("revista.index")->with("success", "Revista añadida correctamente");
        }
        else return  Redirect::back()->withErrors(['msg' => 'Se ha producido un error al subir la imagen']);
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

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

        if ($this->subirImagen($target_file)) {
            $portada = $target_file; //"testfile"; //$request->post('coverImage'); TO-DO CREAR UPLOAD PARA LA IMAGEN
        }
        else return  Redirect::back()->withErrors(['msg' => 'Se ha producido un error al subir la imagen']);

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

    public function subirImagen($target_file){
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Subida Imagen con validaciones
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
          if($check !== false) {
            $uploadOk = 1;
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            } else {
              echo "Se ha producido un error al subir la imagen";
            }
          } else {
            echo "Imagen no válida";
            $uploadOk = 0;
          }
        return $uploadOk;
    }
}
