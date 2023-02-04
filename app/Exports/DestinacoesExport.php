<?php

namespace App\Exports;
use App\Models\Destinacoes;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class DestinacoesExport implements FromCollection, WithHeadings,WithStrictNullComparison
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Destinacoes::select(
           "id",
           "descricao",
           "created_at",
           "updated_at",
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
            "descricao",
            "created_at",
            "updated_at",
        ];
    }
}
