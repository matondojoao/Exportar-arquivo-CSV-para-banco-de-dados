<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\ProdutosExport;
use App\Imports\ProdutosImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Produtos;

class ProdutosController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $prods = Produtos::get();

        return view('produtos', compact('prods'));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new ProdutosExport, 'produtos.csv');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new ProdutosImport,request()->file('file'));
        return back();
    }
}
