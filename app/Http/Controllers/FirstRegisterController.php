<?php

namespace App\Http\Controllers;

use App\Http\Requests\FirstRegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;


class FirstRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return $user;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('firstRegister.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FirstRegisterRequest $request)
    {
        $validatedData = $request->validated();

        $user = User::create($validatedData);

        $user->save();

        return redirect()->route('register.user');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('firstRegister.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
