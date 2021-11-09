<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_imagen', 'titulo', 'descripcion', 'archivo', 'id_admin'
    ];
}
