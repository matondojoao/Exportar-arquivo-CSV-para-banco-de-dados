<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\OrigensExport;
use App\Imports\OrigensImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Origens;;

class OrigensController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $orgs = Origens::get();

        return view('origens', compact('orgs'));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new OrigensExport, 'origens.csv');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new OrigensImport,request()->file('file'));
        return back();
    }
}
