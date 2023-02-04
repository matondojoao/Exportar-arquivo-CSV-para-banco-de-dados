<?php
namespace App\Imports;

use App\Models\Produtos;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProdutosImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Produtos([
            'unidade' => $row['unidade'],
            'prvenda'=> $row['prvenda'],
            'observacoes'=> $row['observacoes'],
            'codbarras'=> $row['codbarras'],
            'patrimonio'=> $row['patrimonio'],
            'emprestados'=> $row['emprestados'],
            'ativo' => $row['ativo'],
            'npatrimonio'=> $row['npatrimonio'],
            'marca'=> $row['marca'],
            'estoque'=> $row['estoque'],
            'estoque2'=> $row['estoque2'],
            'estoque3'=> $row['estoque3'],
            'estoque4'=> $row['estoque4'],
            'estoque5'=> $row['estoque5'],
            'estoque6'=> $row['estoque6'],
            'minimo'=> $row['minimo'],
            'minimo2'=> $row['minimo2'],
            'minimo3'=> $row['minimo3'],
            'minimo4'=> $row['minimo4'],
            'minimo5'=> $row['minimo5'],
            'minimo6'=> $row['minimo6'],
            'grupo'=> $row['grupo'],
            'consignado'=> $row['consignado'],
            'origemconsig'=> $row['origemconsig'],
            'localizacao'=> $row['localizacao'],
            'codfabricante'=> $row['codfabricante'],
            'maximo1'=> $row['maximo1'],
            'maximo2'=> $row['maximo2'],
            'maximo3'=> $row['maximo3'],
            'maximo4'=> $row['maximo4'],
            'maximo5'=> $row['maximo5'],
            'maximo6'=> $row['maximo6'],
            'idtipo'=> $row['idtipo'],
            'idseq'=> $row['idseq'],
            'idseq_auto'=> $row['idseq_auto'],
            'estoque_em_lotes'=> $row['estoque_em_lotes'],
            'lote_minimo'=> $row['lote_minimo'],
            'lote_maximo'=> $row['lote_maximo'],
            'valor_menor'=> $row['valor_menor'],
            'valor_maior'=> $row['valor_maior'],
            'valor_ultimo'=> $row['valor_ultimo'],
            'regms'=> $row['regms'],
            'bula'=> $row['bula'],
            'pop'=> $row['pop'],
            'nserie'=> $row['nserie'],
            'modelo'=> $row['modelo'],
            'conferido'=> $row['conferido'],
            'dataafericao'=> $row['dataafericao'],
            'ncertificado'=> $row['ncertificado'],
            'proafericao'=> $row['proafericao'],
            'datacadastro'=> $row['datacadastro'],
            'epi'=> $row['epi'],
            'validade'=> $row['validade'],
            'certificado'=> $row['certificado'],
            'validade_epi'=> $row['validade_epi'],
            'localizacao2'=> $row['localizacao2'],
            'nome'=> $row['nome'],
            'localizacao3'=> $row['localizacao3'],
            'localizacao4'=> $row['localizacao4'],
            'localizacao5'=> $row['localizacao5'],
            'localizacao6'=> $row['localizacao6'],
            'emprestados1'=> $row['emprestados1'],
            'emprestados2'=> $row['emprestados2'],
            'emprestados3'=> $row['emprestados3'],
            'emprestados4'=> $row['emprestados4'],
            'emprestados5'=> $row['emprestados5'],
            'emprestados6'=> $row['emprestados6'],
            'estoque_comprado'=> $row['estoque_comprado'],
            'created_at'=> $row['created_at'],
            'updated_at'=> $row['updated_at'],
        ]);
    }
}
