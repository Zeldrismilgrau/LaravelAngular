<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComponenteModel;
use Illuminate\Support\Facades\Validator;

class ComponenteController extends Controller
{
    function add(Request $dados) 
    { 
        $validator = Validator::make(
            $dados->all(),
            [
                'nome' => 'required|min:3|max:255',
                'hora_inicio' => 'required',
                'hora_fim' => 'required',
            ],
            [
                'nome.required' => 'O campo nome é obrigatório.',
                'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                'hora_inicio.required' => 'A hora de início é obrigatória.',
                'hora_fim.required' => 'A hora de término é obrigatória.',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        ComponenteModel::create([
            'nome' => $dados->nome,
            'hora_inicio' => $dados->hora_inicio,
            'hora_fim' => $dados->hora_fim
        ]);

        return response()->json([
            'message' => 'Componente cadastrado com sucesso!',
            'componentes' => ComponenteModel::all()
        ], 200);
    }

    function remove(string $id) 
    {
        ComponenteModel::destroy($id);

        return response()->json([
            'success' => 'Removido!', 
            'componentes' => ComponenteModel::all()
        ], 200);
    }

    function atualizar(Request $dados) 
    {
        $componente = ComponenteModel::find($dados->id);

        if (!$componente) {
            return response()->json(['error' => 'Componente não encontrado.'], 404);
        }
        
        $componente->update($dados->all());

        return response()->json(ComponenteModel::all(), 200);
    }
}