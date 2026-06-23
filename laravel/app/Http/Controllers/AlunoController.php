<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunoModel;
use Illuminate\Support\Facades\Validator;

class AlunoController extends Controller
{
    function add(Request $dados) 
    { 
        // VALIDAÇÃO DOS DADOS
        $validator = Validator::make(
            $dados->all(),
            [
                'nome' => 'required|min:3|max:255',
            ],
            [
                'nome.required' => 'O campo nome é obrigatório.',
                'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Criando o aluno após a validação passar
        AlunoModel::create([
            'nome' => $dados->nome
        ]);

        return response()->json([
            'message' => 'Cadastrado com sucesso!',
            'alunos' => AlunoModel::all()
        ], 200);
    }

    function remove(string $id) 
    {
        AlunoModel::destroy($id);

        return response()->json([
            'success' => 'Removido!', 
            'alunos' => AlunoModel::all()
        ], 200);
    }

    function atualizar(Request $dados) 
    {
        // Encontra o aluno pelo ID enviado na requisição
        $aluno = AlunoModel::find($dados->id);

        if (!$aluno) {
            return response()->json(['error' => 'Aluno não encontrado.'], 404);
        }
        
        // Atualiza os dados
        $aluno->update($dados->all());

        // Retorna a lista atualizada de todos os alunos
        return response()->json(AlunoModel::all(), 200);
    }
}