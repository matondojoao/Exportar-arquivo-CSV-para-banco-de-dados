<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\SolicitantesExport;
use App\Imports\SolicitantesImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Clientes;

class SolicitantesController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $sols = Clientes::get();

        return view('solicitantes', compact('sols'));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new SolicitantesExport, 'solicitantes.csv');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new SolicitantesImport,request()->file('file'));
        return back();
    }
}
