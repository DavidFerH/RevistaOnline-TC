<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    use HasFactory;

    protected $table = 'autor'; //sino eloquent mete la s al final, autors.

    public function articulos()
    {
        return $this->belongsToMany(Articulos::class, 'autor_articulos', 'COD_ART', 'COD_ART');
    }


}
