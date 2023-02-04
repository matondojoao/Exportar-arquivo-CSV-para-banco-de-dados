<?php
namespace App\Imports;

use App\Models\Fornecedores;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use function Ramsey\Uuid\v1;

class FornecedoresImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Fornecedores([

            'nome'=> $row['nome'],
            'nome_fantasia'=> $row['nome_fantasia'],
            'cnpj'=> $row['cnpj'],
            'ie'=> $row['ie'],
            'email'=> $row['email'],
            'endereco'=> $row['endereco'],
            'numero'=> $row['numero'],
            'bairro'=> $row['bairro'],
            'cidade'=> $row['cidade'],
            'estado'=> $row['estado'],
            'cep'=> $row['cep'],
            'pais'=> $row['pais'],
            'telefone1'=> $row['telefone1'],
            'telefone2'=> $row['telefone2'],
            'telefone3'=> $row['telefone3'],
            'representante'=> $row['representante'],
            'representante_telefone1'=> $row['representante_telefone1'],
            'representante_telefone2'=> $row['representante_telefone2'],
            'representante_telefone3'=> $row['representante_telefone3'],
            'representante_email'=> $row['representante_email'],
            'tipo'=> $row['tipo'],
            'status'=> $row['status'],
            'info'=> $row['info'],
            'created_at'=> $row['created_at'],
            'updated_at'=> $row['updated_at'],
            'site'=> $row['site'],
            'complemento'=> $row['complemento'],
            'contrato'=> $row['contrato'],
            'outros_doc1'=> $row['outros_doc1'],
            'outros_doc2'=> $row['outros_doc2'],
            'outros_doc3'=> $row['outros_doc3'],

        ]);
    }
}
