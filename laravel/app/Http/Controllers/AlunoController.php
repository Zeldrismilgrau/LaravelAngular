<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunoModel;

class AlunoController extends Controller
{
    function add(Request $request)
    {
        AlunoModel::create([
            'nome' => $request->nome
        ]);

        return response()->json([
            'message' => 'Cadastrado com sucesso!',
            'alunos' => AlunoModel::all()
        ], 200);
    }
}