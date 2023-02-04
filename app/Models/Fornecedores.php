<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    protected $table = 'fornecedores';

    protected $fillable = [
         'nome',
         'nome_fantasia',
         'cnpj',
         'ie',
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
         'representante',
         'representante_telefone1',
         'representante_telefone2',
         'representante_telefone3',
         'representante_email',
         'tipo',
         'status',
         'info',
         'created_at',
         'updated_at',
         'site',
         'complemento',
         'contrato',
         'outros_doc1',
         'outros_doc2',
         'outros_doc3'
    ];

    public function FornecedoresImportacoes()
    {
        return $this->hasMany(FornecedoresImportacoes::class, 'fornecedor');
    }
}

class FornecedoresImportacoes extends Model
{
    protected $table = 'importacoes';

    protected $guarded = [];


    public function Fornecedor()
    {
        return $this->belongsTo(Fornecedores::class, 'fornecedor');
    }
}

