<?php

namespace App\Http\Controllers;


use App\Models\Lbkb;
use App\Models\User;
use App\Exports\LbkbExport;
use App\Imports\LbkbImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


class LbkbController extends Controller
{

    public function index()
    {
        $lbkb = Lbkb::get();

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
        $user = Auth::user(); // Ambil user yang sedang login
        $user_name = $user->name; // Ambil 'name' dari user yang sedang login
        $user_id = User::where('name', $user_name)->value('id'); // Cari 'id' berdasarkan 'name' dari user

        if (!is_int($user_id)) {
            // Tampilkan pesan atau lakukan tindakan yang sesuai jika 'user_id' tidak valid
            // Contoh: kembalikan pesan error atau alihkan pengguna ke halaman yang sesuai
            return redirect()->route('home')->with('error', 'Invalid user_id.');
        }
        Excel::import(new LbkbImport($user_id), request()->file('file'), null, \Maatwebsite\Excel\Excel::XLSX, [
            'useHeadingRow' => false, // Ignore the first row (header) when importing
        ]);

        return back();
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
