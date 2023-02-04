<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\DestinacoesExport;
use App\Imports\DestinacoesImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Destinacoes;;

class DestinacoesController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $dests = Destinacoes::get();

        return view('destinacoes', compact('dests'));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new DestinacoesExport, 'destinacoes.csv');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new DestinacoesImport,request()->file('file'));
        return back();
    }
}
