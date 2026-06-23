<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComponenteModel;

class ComponenteController extends Controller
{
    function add(Request $request)
    {
        ComponenteModel::create([
            'nome' => $request->nome,
            'hora_inicio' => $request->hora_inicio,
            'hora_fim' => $request->hora_fim
        ]);

        return response()->json([
            'message' => 'Componente cadastrado com sucesso!',
            'componentes' => ComponenteModel::all()
        ], 200);
    }
}