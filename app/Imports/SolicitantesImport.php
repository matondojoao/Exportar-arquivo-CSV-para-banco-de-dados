<?php
namespace App\Imports;

use App\Models\Clientes;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SolicitantesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Clientes([
            'nome'=> $row['nome'],
            'nome_fantasia'=> $row['nome_fantasia'],
            'cnpj'=> $row['cnpj'],
            'ie'=> $row['ie'],
            'tipo'=> $row['tipo'],
            'status'=> $row['status'],
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
            'info'=> $row['info'],
            'created_at'=> $row['created_at'],
            'updated_at'=> $row['updated_at'],
        ]);
    }
}
