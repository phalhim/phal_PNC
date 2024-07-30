<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $User = User::all();
        return $User;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $User = User::create([
            'name' => $request->name,
            'age' => $request->age,
            'provinces' =>  $request->provinces,
            'email' =>  $request->email,
            'password'=> $request->password
        ]);
        return $User;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $User = User::find($id);
        return $User;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $User = User::find($id);
        $User->update([
            "name" => $request->name,
            "age" => $request->age,
            "provinces" =>  $request->provinces,
            "email" =>  $request->email,
            "email_verified_at" =>  $request->email_verified_at,
            "password" =>  $request->password
        ]);
        return "User was updated successfully";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $User = User::find($id);
        $User->delete();
        return "User was deleted successfully";
    }
}
