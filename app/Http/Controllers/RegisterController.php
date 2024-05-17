<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Exception;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("login.signup");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|min:3|max:35',
                'username' => 'required|min:5|max:15',
                'email' => 'required|email:dns',
                'password' => 'required|min:8|max:255'
            ]);
            User::create($validatedData);
            return redirect('/')->with('berhasil', 'Registration Successful');
        } catch (Exception $e) {
            return redirect('/Register')
                ->with('error', 'Registration Failed: ' . $e->getMessage()); // Preserve user input for convenience
        }
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
