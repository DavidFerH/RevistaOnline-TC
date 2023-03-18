<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articulos extends Model
{
    use HasFactory;
    public $timestamps = false; //para no meter updated_at and created_at


    public function autor()
    {
        return $this->belongsToMany(Autor::class, 'autor_articulos', 'DNI', 'DNI');
    }


}
