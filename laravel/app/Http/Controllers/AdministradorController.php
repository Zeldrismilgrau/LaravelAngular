<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdministradorModel;

class AdministradorController extends Controller
{
    function add(Request $request)
    {
        AdministradorModel::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'usuario' => $request->usuario,
            // Boa prática: Criptografar a senha caso vá usá-la em produção (ex: bcrypt($request->senha))
            'senha' => $request->senha, 
            'status' => $request->status
        ]);

        return response()->json([
            'message' => 'Administrador cadastrado com sucesso!',
            'administradores' => AdministradorModel::all()
        ], 200);
    }
}