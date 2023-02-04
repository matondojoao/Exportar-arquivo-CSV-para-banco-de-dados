<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nome',
        'nome_fantasia',
        'cnpj',
        'ie',
        'tipo',
        'status',
        'email',
        'endereco',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'pais',
        'telefone1',
        'telefone2',
        'telefone3',
        'info',
        'created_at',
        'updated_at',
    ];
}
