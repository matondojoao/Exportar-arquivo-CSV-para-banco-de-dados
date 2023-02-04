<?php

namespace App\Exports;
use App\Models\Clientes;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class SolicitantesExport implements FromCollection, WithHeadings,WithStrictNullComparison
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Clientes::select(
           "id",
           "nome",
           "nome_fantasia",
           "cnpj",
           "ie",
           "tipo",
           "status",
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
           "info",
           "created_at",
            "updated_at")->get();
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
            "tipo",
            "status",
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
            "info",
            "created_at",
             "updated_at"];
    }
}
