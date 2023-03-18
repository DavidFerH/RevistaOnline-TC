<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articulos extends Model {
    use HasFactory;
<<<<<<< HEAD
    // Para no meter updated_at and created_at
    public $timestamps = false;
=======
    public $timestamps = false; //para no meter updated_at and created_at


    public function autor()
    {
        return $this->belongsToMany(Autor::class, 'autor_articulos', 'DNI', 'DNI');
    }


>>>>>>> 77ac5faad1689f34f217276a9bf308d4a88d9b3a
}
