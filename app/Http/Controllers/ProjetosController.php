<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\ProjetosExport;
use App\Imports\ProdutosImport;
use App\Imports\ProjetosImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Projetos;;

class ProjetosController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $projs = Projetos::get();

        return view('projetos', compact('projs'));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new ProjetosExport, 'projetos.csv');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new ProjetosImport,request()->file('file'));
        return back();
    }
}
