<?php

namespace App\Http\Controllers;

use App\Exports\TigaPhasaExport;
use App\Imports\TigaPhasaImport;
use App\Models\TigaPhasa;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TigaPhasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tigaphasa = TigaPhasa::paginate(10);

        return view('tigaphasa.index', [
            'tigaphasa' => $tigaphasa
        ]);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new TigaPhasaExport, 'Tiga Phasa.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import(Request $request)
    {
        Excel::import(new TigaPhasaImport, request()->file('file'));
        return back();
        // $path1 = $request->file('file')->store('temp');
        // $path = storage_path('app') . '/' . $path1;
        // Excel::import(new AmrImport, $path);

        // return back();
    }

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
    public function edit(TigaPhasa $tigaphasa)
    {
        return view('tigaphasa.edit', [
            'item' => $tigaphasa
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
    public function destroy(TigaPhasa $tigaphasa)
    {
        $tigaphasa->delete();

        return redirect()->route('tigaphasa.index');
    }
}
