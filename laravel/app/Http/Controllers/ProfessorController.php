<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfessorModel;
use Illuminate\Support\Facades\Validator;

class ProfessorController extends Controller
{
    function add(Request $dados) 
    { 
        $validator = Validator::make(
            $dados->all(),
            [
                'nome' => 'required|min:3|max:255',
                'email' => 'required|email|max:255',
                'telefone' => 'required|string|max:20',
            ],
            [
                'nome.required' => 'O campo nome é obrigatório.',
                'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                'email.required' => 'O campo e-mail é obrigatório.',
                'email.email' => 'Insira um e-mail válido.',
                'telefone.required' => 'O campo telefone é obrigatório.',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        ProfessorModel::create([
            'nome' => $dados->nome,
            'email' => $dados->email,
            'telefone' => $dados->telefone
        ]);

        return response()->json([
            'message' => 'Professor cadastrado com sucesso!',
            'professores' => ProfessorModel::all()
        ], 200);
    }

    function remove(string $id) 
    {
        ProfessorModel::destroy($id);

        return response()->json([
            'success' => 'Removido!', 
            'professores' => ProfessorModel::all()
        ], 200);
    }

    function atualizar(Request $dados) 
    {
        $professor = ProfessorModel::find($dados->id);

        if (!$professor) {
            return response()->json(['error' => 'Professor não encontrado.'], 404);
        }
        
        $professor->update($dados->all());

        return response()->json(ProfessorModel::all(), 200);
    }
}