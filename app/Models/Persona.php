<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    // Si usas campos personalizados o sin timestamps
    public $timestamps = false;
    protected $fillable = ['nombre', 'edad', 'altura_cm', 'peso_kg'];
}
