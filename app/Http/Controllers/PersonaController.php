<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function show($id)
    {
        $persona = Persona::find($id);

        if (!$persona) {
            return response()->json(['mensaje' => 'Persona no encontrada'], 404);
        }

        return response()->json($persona);
    }
}
