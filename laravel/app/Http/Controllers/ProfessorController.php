<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfessorModel;

class ProfessorController extends Controller
{
    function add(Request $request)
    {
        ProfessorModel::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone
        ]);

        return response()->json([
            'message' => 'Professor cadastrado com sucesso!',
            'professores' => ProfessorModel::all()
        ], 200);
    }
}