<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdministradorModel extends Model
{
    use HasFactory;
    protected $table = 'administrador';
    
    // A senha geralmente deve ser ocultada em retornos JSON por segurança (opcional)
    protected $hidden = ['senha'];

    protected $fillable = [
        'nome', 
        'cpf', 
        'email', 
        'telefone', 
        'usuario', 
        'senha', 
        'status'
    ];
}