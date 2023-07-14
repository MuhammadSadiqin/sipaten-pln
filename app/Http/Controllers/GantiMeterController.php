<?php

namespace App\Http\Controllers;

use App\Exports\GantiMeterExport;
use App\Models\GantiMeter;
use Illuminate\Http\Request;
use App\Imports\GantiMeterImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\GantiMeterRequest;

class GantiMeterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gantimeter = GantiMeter::paginate(10);

        return view('gantimeter.index', [
            'gantimeter' => $gantimeter
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function import(Request $request)
    {

        $path1 = $request->file('file')->store('temp');
        $path = storage_path('app') . '/' . $path1;
        Excel::import(new GantiMeterImport, $path);

        return back();
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new GantiMeterExport, 'Ganti Meter.xlsx');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GantiMeterRequest $request, GantiMeter $gantimeter)
    {
        $data = $request->all();

        GantiMeter::create($data);

        return redirect()->route('gantimeter.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GantiMeter $gantimeter)
    {
        return view('gantimeter.edit', [
            'item' => $gantimeter
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GantiMeterRequest $request, GantiMeter $gantiMeter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GantiMeter $gantimeter)
    {
        $gantimeter->delete();

        return redirect()->route('gantimeter.index');
    }
}
