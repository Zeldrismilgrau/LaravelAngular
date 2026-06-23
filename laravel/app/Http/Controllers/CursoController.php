<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CursoModel;

class CursoController extends Controller
{
    function add(Request $request)
    {
        CursoModel::create([
            'nome' => $request->nome,
            'periodo' => $request->periodo
        ]);

        return response()->json([
            'message' => 'Curso cadastrado com sucesso!',
            'cursos' => CursoModel::all()
        ], 200);
    }
}