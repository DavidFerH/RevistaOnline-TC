<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    use HasFactory;
    // Si no eloquent mete la s al final, autors.
    protected $table = 'autor';
}
