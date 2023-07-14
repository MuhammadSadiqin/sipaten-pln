<?php

namespace App\Http\Controllers;


use App\Models\Lbkb;
use App\Exports\LbkbExport;
use App\Imports\LbkbImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class LbkbController extends Controller
{

    public function index()
    {
        $lbkb = Lbkb::paginate(20);

        return view('lbkb.index', [
            'lbkb' => $lbkb
        ]);
    }

     /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new LbkbExport, 'Lbkb.xlsx');
    }

      /**
     * @return \Illuminate\Support\Collection
     */
    public function import(Request $request)
    {
        Excel::import(new LbkbImport, request()->file('file'));
        return back();
        // $path1 = $request->file('file')->store('temp');
        // $path = storage_path('app') . '/' . $path1;
        // Excel::import(new LbkbImport, $path);

        // return back();
    }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lbkb $lbkb)
    {
        return view('lbkb.edit', [
            'item' => $lbkb
        ]);
    }
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
    // public function destroy(Lbkb $lbkb)
    // {
    //     $lbkb->delete();

    //     return redirect()->route('lbkb.index');
    

