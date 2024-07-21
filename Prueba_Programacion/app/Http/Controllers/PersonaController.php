<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{

    public function Altas(Request $request)
    {
        $persona = new Persona();
        $persona -> nombre = $request -> post('nombre');
        $persona -> apellido = $request -> post('apellido');
        $persona -> telefono = $request -> post('telefono');
        $persona -> save();

        return $persona;
    }

    public function Bajas($id)
    {
        $persona = Persona::findOrFail($id);
        $persona -> delete();
        return [ 'mensaje' => 'Persona dada de baja.' ];
    }

    public function Modificacion(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $persona -> nombre = $request -> post('nombre');
        $persona -> apellido = $request -> post('apellido');
        $persona -> telefono = $request -> post('telefono');
        $persona -> save();
        return $persona;
    }

    public function Listar(Request $request)
    {
        return Persona::all();
    }

    public function Busqueda(Request $request, $id)
    {
        return Persona::findOrFail($id);
    }
}
