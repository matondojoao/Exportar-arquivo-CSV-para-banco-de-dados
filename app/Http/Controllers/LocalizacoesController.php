<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\LocalizacoesExport;
use App\Imports\LocalizacoesImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Localizacoes;;

class LocalizacoesController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $locs = Localizacoes::get();

        return view('localizacoes', compact('locs'));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new LocalizacoesExport, 'localizacoes.csv');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new LocalizacoesImport,request()->file('file'));
        return back();
    }
}
