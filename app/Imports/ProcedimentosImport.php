<?php
namespace App\Imports;

use App\Models\Procedimentos;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use function Ramsey\Uuid\v1;

class ProcedimentosImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Procedimentos([

            'descricao'=> $row['descricao'],
            'created_at'=> $row['created_at'],
            'updated_at'=> $row['updated_at'],


        ]);
    }
}
