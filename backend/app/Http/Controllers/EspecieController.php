<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especie;


class EspecieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Especie::all());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_tipo' => 'required|exists:tipo_animal,id_tipo',
            'nom_especie' => 'required|max:100'
        ]);

        $especie = Especie::create($request->all());

        return response()->json([
            'mensaje' => 'Especie creada exitosamente',
            'especie' => $especie
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $especie = Especie::find($id);

        if (!$especie) {
            return response()->json(['mensaje' => 'Especie no encontrada'], 404);
        }

        return response()->json($especie, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $especie = Especie::find($id);

        if (!$especie) {
            return response()->json(['mensaje' => 'Especie no encontrada'], 404);
        }

        $request->validate([
            'id_tipo' => 'required|exists:tipo_animal,id_tipo',
            'nom_especie' => 'required|max:100'
        ]);

        $especie->update($request->all());

        return response()->json([
            'mensaje' => 'Especie actualizada exitosamente',
            'especie' => $especie
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $especie = Especie::find($id);

        if (!$especie) {
            return response()->json(['mensaje' => 'Especie no encontrada'], 404);
        }

        $especie->delete();

        return response()->json(['mensaje' => 'Especie eliminada exitosamente'], 200);
    }
}
