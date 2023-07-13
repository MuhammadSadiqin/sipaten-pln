<?php

namespace App\Http\Controllers;

use App\Imports\AmrImport;
use App\Models\Amr;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AmrController extends Controller
{
    public function index()
    {
        $amr = Amr::paginate(1);

        return view('amr.index', [
            'amr' => $amr
        ]);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import(Request $request)
    {

        $path1 = $request->file('file')->store('temp');
        $path = storage_path('app') . '/' . $path1;
        Excel::import(new AmrImport, $path);

        return back();
    }
}
