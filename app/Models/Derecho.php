<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Derecho extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_derecho', 'titulo', 'descripcion', 'archivo', 'id_admin'
    ];
}
