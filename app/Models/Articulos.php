<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articulos extends Model {
    use HasFactory;
    // Para no meter updated_at and created_at
    public $timestamps = false;
}
