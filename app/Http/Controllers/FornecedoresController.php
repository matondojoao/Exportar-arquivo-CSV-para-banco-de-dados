<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\FornecedoresExport;
use App\Imports\FornecedoresImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Fornecedores;;

class FornecedoresController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $forns = Fornecedores::get();

        return view('fornecedores', compact('forns'));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new FornecedoresExport, 'solicitantes.csv');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new FornecedoresImport,request()->file('file'));
        return back();
    }
}
