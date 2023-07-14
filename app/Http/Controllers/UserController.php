<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::paginate(10);

        return view('users.index', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    // public function export()
    // {
    //     return Excel::download(new UsersExport, 'users.xlsx');
    // }

    /**
     * @return \Illuminate\Support\Collection
     */
    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request, User $user)
    {
        $data = $request->all();

        User::create($data);

        return redirect()->route('users.index');
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
    public function edit(User $user)
    {
        return view('users.edit', [
            'item' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $data = $request->all();
        $user->update($data);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}
