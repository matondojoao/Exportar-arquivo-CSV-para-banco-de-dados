<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\ProcedimentosExport;
use App\Imports\ProcedimentosImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Procedimentos;;

class ProcedimentosController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $procds = Procedimentos::get();

        return view('procedimentos', compact('procds'));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new ProcedimentosExport, 'procedimentos.csv');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new ProcedimentosImport,request()->file('file'));
        return back();
    }
}
