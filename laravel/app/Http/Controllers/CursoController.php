<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CursoModel;
use Illuminate\Support\Facades\Validator;

class CursoController extends Controller
{
    function add(Request $dados) 
    { 
        $validator = Validator::make(
            $dados->all(),
            [
                'nome' => 'required|min:3|max:255',
                'periodo' => 'required|string|max:50',
            ],
            [
                'nome.required' => 'O campo nome é obrigatório.',
                'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                'periodo.required' => 'O campo período é obrigatório.',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        CursoModel::create([
            'nome' => $dados->nome,
            'periodo' => $dados->periodo
        ]);

        return response()->json([
            'message' => 'Curso cadastrado com sucesso!',
            'cursos' => CursoModel::all()
        ], 200);
    }

    function remove(string $id) 
    {
        CursoModel::destroy($id);

        return response()->json([
            'success' => 'Removido!', 
            'cursos' => CursoModel::all()
        ], 200);
    }

    function atualizar(Request $dados) 
    {
        $curso = CursoModel::find($dados->id);

        if (!$curso) {
            return response()->json(['error' => 'Curso não encontrado.'], 404);
        }
        
        $curso->update($dados->all());

        return response()->json(CursoModel::all(), 200);
    }
}