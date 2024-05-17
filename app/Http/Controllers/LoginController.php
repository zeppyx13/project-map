<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.login');
    }
    public function auth(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => ['required', 'email:dns'],
                'password' => ['required'],
            ]);

            // Attempt user authentication
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }

            throw new \Exception('Invalid login credentials.'); // Throw specific exception
        } catch (\Exception $e) {
            // Handle authentication error
            $errorMessage = ($e->getMessage());
            return back()->with('error', $errorMessage);
        }
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
        //
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
