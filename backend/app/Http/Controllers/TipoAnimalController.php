<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoAnimal;


class TipoAnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(TipoAnimal::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom_tipo' => 'required|max:100'
        ]);

        $tipo = TipoAnimal::create($request->all());

        return response()->json([
            'mensaje' => 'Tipo de animal creado exitosamente',
            'tipo_animal' => $tipo
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $tipo = TipoAnimal::find($id);

        if (!$tipo) {
            return response()->json(['mensaje' => 'Tipo de animal no encontrado'], 404);
        }

        return response()->json($tipo, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $tipo = TipoAnimal::find($id);

        if (!$tipo) {
            return response()->json(['mensaje' => 'Tipo de animal no encontrado'], 404);
        }

        $request->validate([
            'nom_tipo' => 'required|max:100'
        ]);

        $tipo->update($request->all());

        return response()->json([
            'mensaje' => 'Tipo de animal actualizado exitosamente',
            'tipo_animal' => $tipo
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $tipo = TipoAnimal::find($id);

        if (!$tipo) {
            return response()->json(['mensaje' => 'Tipo de animal no encontrado'], 404);
        }

        $tipo->delete();

        return response()->json(['mensaje' => 'Tipo de animal eliminado exitosamente'], 200);
    }
}
