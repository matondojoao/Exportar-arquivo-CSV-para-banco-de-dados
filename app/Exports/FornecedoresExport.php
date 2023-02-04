<?php

namespace App\Exports;
use App\Models\Fornecedores;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class FornecedoresExport implements FromCollection, WithHeadings,WithStrictNullComparison
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fornecedores::select(
           "id",
           "nome",
           "nome_fantasia",
           "cnpj",
           "ie",
           "email",
           "endereco",
           "numero",
           "bairro",
           "cidade",
           "estado",
           "cep",
           "pais",
           "telefone1",
           "telefone2",
           "telefone3",
           "representante",
           "representante_telefone1",
           "representante_telefone2",
           "representante_telefone3",
           "representante_email",
           "tipo",
           "status",
           "info",
           "created_at",
           "updated_at",
           "site",
           "complemento",
           "contrato",
           "outros_doc1",
           "outros_doc2",
           "outros_doc3",
           )->get();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return [
            "id",
           "nome",
           "nome_fantasia",
           "cnpj",
           "ie",
           "email",
           "endereco",
           "numero",
           "bairro",
           "cidade",
           "estado",
           "cep",
           "pais",
           "telefone1",
           "telefone2",
           "telefone3",
           "representante",
           "representante_telefone1",
           "representante_telefone2",
           "representante_telefone3",
           "representante_email",
           "tipo",
           "status",
           "info",
           "created_at",
           "updated_at",
           "site",
           "complemento",
           "contrato",
           "outros_doc1",
           "outros_doc2",
           "outros_doc3"];
    }
}
