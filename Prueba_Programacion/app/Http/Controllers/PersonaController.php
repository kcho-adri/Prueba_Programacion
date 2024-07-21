<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{

    public function Altas(Request $request)
    {
        $persona = new Persona();
        $persona -> nombre = $request -> persona('nombre');
        $persona -> apellido = $request -> persona('apellido');
        $persona -> telefono = $request -> persona('telefono');
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
        $persona -> nombre = $request -> persona('nombre');
        $persona -> apellido = $request -> persona('apellido');
        $persona -> telefono = $request -> persona('telefono');
        $persona -> save();
        return $persona;
    }

    public function edit(Persona $persona)
    {
        //
    }

    public function update(Request $request, Persona $persona)
    {
        //
    }

    public function destroy(Persona $persona)
    {
        //
    }
}
