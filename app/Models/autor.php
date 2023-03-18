<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    use HasFactory;
<<<<<<< HEAD
    // Si no eloquent mete la s al final, autors.
    protected $table = 'autor';
=======
    protected $table = 'autor'; //sino eloquent mete la s al final, autors.

    public function articulos()
    {
        return $this->belongsToMany(Articulos::class, 'autor_articulos', 'COD_ART', 'COD_ART');
    }


>>>>>>> 77ac5faad1689f34f217276a9bf308d4a88d9b3a
}
