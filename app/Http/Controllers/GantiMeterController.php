<?php

namespace App\Http\Controllers;

use App\Imports\GantiMeterExport;
use App\Models\GantiMeter;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Imports\GantiMeterImport;


class GantiMeterController extends Controller
{
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

    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function export() 
    // {
    //     return Excel::download(new UsersExport, 'users.xlsx');
    // }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new GantiMeterImport, request()->file('file'));
        return back();
    }
    // public function create()
    // {
    //     return view('gantimeter.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(UserRequest $request, User $user)
    // {
    //     $data = $request->all();

    //     $data['profile_photo_path'] = $request->file('profile_photo_path')->store('assets/user', 'public');

    //     User::create($data);

    //     return redirect()->route('users.index');
    // }

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
    public function edit(GantiMeter $gantiMeter)
    {
        return view('gantimeter.edit', [
            'item' => $gantiMeter
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UserRequest $request, User $user)
    // {
    //     $data = $request->all();

    //     if ($request->file('profile_picture_path')) {
    //         $data['profile_photo_path'] = $request->file('profile_photo_path')->store('assets/user', 'public');
    //     }

    //     $user->update($data);

    //     return redirect()->route('users.index');
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GantiMeter $gantiMeter)
    {
        $gantiMeter->delete();

        return redirect()->route('gantimeter.index');
    }
}
