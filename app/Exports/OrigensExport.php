<?php

namespace App\Exports;
use App\Models\Origens;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class OrigensExport implements FromCollection, WithHeadings,WithStrictNullComparison
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Origens::select(
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
