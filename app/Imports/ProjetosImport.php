<?php
namespace App\Imports;

use App\Models\Projetos;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use function Ramsey\Uuid\v1;

class ProjetosImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Projetos([

            'descricao'=> $row['descricao'],
            'created_at'=> $row['created_at'],
            'updated_at'=> $row['updated_at'],
        ]);
    }
}
