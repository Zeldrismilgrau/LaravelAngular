<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdministradorModel;
use Illuminate\Support\Facades\Validator;

class AdministradorController extends Controller
{
    function add(Request $dados) 
    { 
        $validator = Validator::make(
            $dados->all(),
            [
                'nome' => 'required|min:3|max:255',
                'cpf' => 'required|max:14',
                'email' => 'required|email|max:255',
                'telefone' => 'required|max:20',
                'usuario' => 'required|min:4|max:50',
                'senha' => 'required|min:6',
                'status' => 'required',
            ],
            [
                'nome.required' => 'O campo nome é obrigatório.',
                'cpf.required' => 'O CPF é obrigatório.',
                'email.required' => 'O e-mail é obrigatório.',
                'usuario.required' => 'O usuário é obrigatório.',
                'senha.required' => 'A senha é obrigatória.',
                'senha.min' => 'A senha deve ter no mínimo 6 caracteres.',
                'status.required' => 'O status é obrigatório.',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        AdministradorModel::create([
            'nome' => $dados->nome,
            'cpf' => $dados->cpf,
            'email' => $dados->email,
            'telefone' => $dados->telefone,
            'usuario' => $dados->usuario,
            // Criptografando a senha por segurança
            'senha' => bcrypt($dados->senha), 
            'status' => $dados->status
        ]);

        return response()->json([
            'message' => 'Administrador cadastrado com sucesso!',
            'administradores' => AdministradorModel::all()
        ], 200);
    }

    function remove(string $id) 
    {
        AdministradorModel::destroy($id);

        return response()->json([
            'success' => 'Removido!', 
            'administradores' => AdministradorModel::all()
        ], 200);
    }

    function atualizar(Request $dados) 
    {
        $administrador = AdministradorModel::find($dados->id);

        if (!$administrador) {
            return response()->json(['error' => 'Administrador não encontrado.'], 404);
        }
        
        $payload = $dados->all();
        
        // Se uma nova senha for enviada para atualizar, criptografa ela antes de salvar
        if (isset($payload['senha'])) {
            $payload['senha'] = bcrypt($payload['senha']);
        }

        $administrador->update($payload);

        return response()->json(AdministradorModel::all(), 200);
    }
}